<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
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
    
    use AuthenticatesUsers;
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'pseudo'; // Remplacez par le nom de votre champ d'utilisateur
    }
    protected $redirectTo = '/index';

}