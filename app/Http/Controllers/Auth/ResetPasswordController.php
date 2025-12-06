<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function index(){
        return view('auth.password-forget');
    }

    public function send_mail(Request $request){
        // Validation
        $request->validate([ 'email'     => 'required|email', ]);

        // check if the mail corresponds to a user
        if(!$user = User::where('email' , $request->email)->first()) {
            return back()->with('error_reset' , "Nous n'arrivons pas à trouver votre mail dans nos enregistrement.");
        }

        // Generate token
        $token = hash('sha256' , Str::random(20));

        try {

            DB::beginTransaction();

                // Create password reset
                if (DB::table('password_reset_tokens')->where('email' , $user->email)->first()) {
                    DB::table('password_reset_tokens')->where('email', $user->email)->delete();
                }

                // Insert token to reset
                $password_reset =  DB::table('password_reset_tokens')->insert([
                    'email'     => $user->email ,
                    'token'     => $token ,
                    'created_at'=> Carbon::now(),
                ]);

                // Generate reset url
                // $url = route('password.reset').'?email='.$user->email.'&token='.$token;
                $url = route('password.reset' , [$user->email , $token]);

                // Email data
                $data = [
                    'email'     => $request->email,
                    'url'       => $url ,
                    'fullname'  => $user->lastname.' '.$user->firstname
                ];

                // Send email
                $email_send = false ;
                try {
                    Mail::to($user->email)->send(new ResetPassword($data) , $data);
                    $email_send = true ;
                } catch (\Throwable $th) {
                    dd($th);
                    return back()->with('error_reset' , "Nous n'arrivons pas à envoyer un mail de réinitialisation à votre addresse mail saisie. Il peut s'agit d'une addresse non valide.");
                }

            DB::commit();

            if ($email_send) {
                return back()->with('mail_send' , "Nous avons envoyer un mail de réinitialisation à votre addresse (".$request->email.").");
            }
            dd('cc');
            return back()->with('error_reset' , "Nous n'arrivons pas à envoyer un mail de réinitialisation à votre addresse mail saisie. Il peut s'agit d'une addresse non valide.");

        } catch (\Throwable $th) {
            dd($th);
            return back()->with('error_reset' , "Nous n'arrivons pas à envoyer un mail de réinitialisation à votre addresse mail saisie. Il peut s'agit d'une addresse non valide.");
        }

    }

    public function show($email , $token){

        if (DB::table('password_reset_tokens')->where('email' , $email)->where('token' , $token)->first()) {
            return view('auth.reset-password' , compact('email','token'));
        }
        return redirect()->route('password.request')->with('error_reset' , "Demande expirée ou inexistante. Veuillez soumettre une nouvelle et la validée avant 60min.");

    }

    public function update(Request $request){

        // Validation
        $credentials = $request->validate([
            'password'  => 'required|string|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8'
        ]);

        // Get passwords reseting data
        $token = $request->token ;
        $email = $request->email ;

        // retrieve password_reseting line
        $password =  DB::table('password_reset_tokens')->where('email' , $email)
                    ->where('token' , $token)
                    ->first();
        // dd($token);
        $response = "token not found";
        if ($password) {

            $user = User::where('email' , $email)->first() ;

            if ($user->update(['password' => bcrypt($request->password)])) {
                $password = DB::table('password_reset_tokens')->where('email' , $email)
                                ->where('token' , $token)
                                ->delete();
                $response = "password reset";
            }else{
                $response = "password not reset";
            }
            return view('auth.reset-response' , compact('response'));
        }

        return view('auth.reset-response' , compact('response'));

    }

}
