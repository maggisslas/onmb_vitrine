<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $role = Role::where('name' , $type)->first();
        // $users = User::where('role_id' , $role->id)->get();
        $users = User::all();
        // $page_name = ($type == 'user') ? 'Utilisateurs' : ( $type == 'manager' ? 'Partenaires' : 'Administrateurs' );
        return view('admin.users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create' , compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Validation
        $data = $request->validate([
            'lastname'  => 'required|string',
            'firstname' => 'required|string',
            'email'     => 'required|email|unique:users',
            'telephone' => 'required',
            'role_id'   => 'required',
        ]);

        // Store
        try {

            // $data['role_id']  = Role::where('name' , 'admin')->first()->id;

            if (User::create($data)) {
                return  redirect()->route('admin.users.index')->with(['success' => "Utilisateur ajouté."]);
            }else{
                return  redirect()->back()
                                ->with(['error' => "Une erreur s'est produit lors de l'enregistrement de l'utilisateur. Veuillez rééssayé"]);
            }

        } catch (\Throwable $th) {
            dd($th);
            return  redirect()->back()
                                ->with(['error' => "Une erreur s'est produit lors de l'enregistrement de l'utilisateur. Veuillez rééssayé"]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.users.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'email'     => 'required|email|'.Rule::unique('users' , 'email')->ignore($user->id),
            'lastname'  => 'required|string',
            'firstname' => 'required|string',
            'telephone' => 'required',
            'password'  => ['string' , 'nullable' , 'confirmed' , 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&*()_+[\]{}|;:,.<>?])[A-Za-z\d@#$%^&*()_+[\]{}|;:,.<>?]{8,}$/']
        ]);

        if($request->filled('password')){
            if(Hash::check($request->current_password, $user->password))
                $data['password'] = bcrypt($request->password);
            else
                return back()->with(['error' => "Le mot de passe actuel saisie est incorrecte."]);
        }

        unset($data['password']);
        $user->update($data);

        if ($request->password) {
            Auth::logout();
            $request->session()->regenerate();
            return redirect()->route('login.index')->with(['update_profile' => 'Profil modifié. Reconnectez-vous avec vos nouveaux accès.']);
        }

        if ($user->wasChanged())
            return back()->with(['success' => "Vous avez modifier votre profile avec succès."]);
        else
            return back()->with(['info' => "Vous n'avez apporté aucune modification à votre profile."]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function state($id , $status){

        $user = User::find($id);
        $user->is_enabled = ($status == 'false') ? false : true;
        $user->save();

        return response()->json();
    }
}
