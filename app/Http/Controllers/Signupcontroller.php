<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Signupcontroller extends Controller
{
    public function index()
    {
        return view('signup');
    }
}
