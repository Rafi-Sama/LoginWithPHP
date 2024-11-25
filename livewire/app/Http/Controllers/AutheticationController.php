<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutheticationController extends Controller
{
    public function signup()
    {
        return view('signup');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
