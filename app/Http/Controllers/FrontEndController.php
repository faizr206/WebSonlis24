<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public static function Register()
    {
        return view('register');
    }

    public static function Login()
    {
        return view('login');
    }
}
