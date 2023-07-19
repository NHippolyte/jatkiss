<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;


class AuthRegisterController extends Controller
{
    use RegistersUsers;

public function showRegistrationForm()
{
    return view('auth.register');
}

public function register(Request $request)
{
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirection après l'inscription réussie
        return redirect('/home');
    }
}
}