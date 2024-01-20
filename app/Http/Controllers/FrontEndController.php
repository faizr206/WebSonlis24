<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public static function Main()
    {
        return view('main');
    }

    public static function Profile()
    {
        return view('profile');
    }

    public static function Register()
    {
        return view('register');
    }

    public static function Login()
    {
        return view('login');
    }

    public static function ForgotPassword()
    {
        return view('forgotPassword');
    }

    public static function ResetPassword()
    {
        return view('resetPassword');
    }

    public static function Lomba()
    {
        return view('lomba');
    }

    public static function Dashboard()
    {
        return view('dashboard', [
            'competitions' => \App\Models\Competition::all(),
            'participants' => \Illuminate\Support\Facades\Auth::user()->participants
        ]);
    }

    public static function Admin()
    {
        return view('admin', [
            'users' => \App\Models\User::all()
        ]);
    }

    public static function User($id)
    {
        return view('user', [
            'user' =>\App\Models\User::all()->where('id', $id)->first()
        ]);
    }
}
