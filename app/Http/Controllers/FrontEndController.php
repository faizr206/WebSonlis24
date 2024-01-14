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
        return view('lomba', [
            'competitions' => \App\Models\Competition::all()->where('jenjang', \Illuminate\Support\Facades\Auth::user()->jenjang),
            'teams' => \Illuminate\Support\Facades\Auth::user()->teams
        ]);
    }

    public static function Team($team)
    {
        return view('team', [
            'team' => \Illuminate\Support\Facades\Auth::user()->teams->where('id', $team)->first(),
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
