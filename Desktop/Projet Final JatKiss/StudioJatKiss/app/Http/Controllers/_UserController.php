<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('pseudo', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('index'); // Redirigez vers le tableau de bord après la connexion réussie
        }

        return back()->withErrors(['pseudo' => 'Les informations d\'identification ne correspondent pas.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/index');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'pseudo' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
    }
    
    public function update(Request $request){
        // Validez les données du formulaire de mise à jour
        $user = User::findOrFail(auth()->user()->id);
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'pseudo' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'sometimes|string|min:8|confirmed',
        ]);

        // Mettez à jour les données du profil
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->pseudo = $request->input('pseudo');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Enregistrez les modifications dans la base de données
        $user->save();

        // Redirigez l'utilisateur vers la page de profil avec un message de succès
        return redirect()->route('profile.show')->with('success', 'Profil mis à jour avec succès');
    }
}
