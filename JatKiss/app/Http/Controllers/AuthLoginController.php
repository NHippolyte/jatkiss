<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AuthLoginController extends Controller
{
    use AuthenticatesUsers;


public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    // Votre logique de traitement de la connexion ici
}
}
