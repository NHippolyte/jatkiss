<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showIndex()
    {
        return view('index');
    }


    public function showProfile()
    {
        $user = auth()->user(); // Récupérez l'utilisateur connecté

        return view('profile', compact('user'));
    }

}