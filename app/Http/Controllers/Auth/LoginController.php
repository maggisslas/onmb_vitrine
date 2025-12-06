<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request){

        // Validation
        $credentials = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|string|min:8',
        ]);

        if($user = User::where("email" , $request->email)->first()){ // If user found in DB

            if($user->is_enabled){ // Check if user is allowed to logedin

                if (!$user->password) { // If user set password

                    $request->validate([
                        'confirm_password' => 'required_with:password|same:password|min:8'
                    ]);
                    $user->update(['password' => $request->password]);
                }

                // If user already have a password
                if (Auth::attempt($credentials , $request->filled('remember'))) {

                    $request->session()->regenerate();

                    if ($user->role->name == 'admin')
                        return redirect()->intended(route('admin.dashboard'));
                    else
                        return redirect()->intended(route('manager.dashboard'));

                }else{
                    return back()->with(['error_login' => 'Identifiants incorrects']);
                }
            } else { // if user's not allowed
                return back()->with(['error_login' => "Vous n'êtes pas autorisé à vous connecter"]);
            }

        } else {// if user not found
            return back()->with(['error_login' => 'Utilisateur introuvable dans nos enregistrements']);
        }


    }

    public function define_password($email){

        $response = false;
        $response = ($user = User::where("email" , $email)->first()) ? ($user->password ? false : true) : false;
        return response()->json(['response' => $response]);

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index');
    }

}
