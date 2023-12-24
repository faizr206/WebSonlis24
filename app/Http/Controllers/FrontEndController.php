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

    public static function Lomba()
    {
        return view('lomba', [
            'competitions' => \App\Models\Competition::all()->where('jenjang', \Illuminate\Support\Facades\Auth::user()->jenjang)
        ]);
    }

    public static function Competition($competition)
    {
        return view('lomba', [
            'competition' => \App\Models\Competition::all()->where('name', $competition)->first()
        ]);
    }
}
