<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function showConfirmation()
    {
        return view('confirmation');
    }

    public function showNotFound()
    {
        return view('notFound');
    }

}
