<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeanceController extends Controller
{
    public function enregistrement()
    {
        return view('enregistrement');
    }

    public function photographie()
    {
        return view('photographie');
    }
}
