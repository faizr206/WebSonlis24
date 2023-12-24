<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Participant;
use App\Models\Competition;

class BackEndController extends Controller
{
    public static function Register(Request $request) : RedirectResponse
    {
        $validatedRequest = $request->validate([
            'email' => ['required', 'unique:users', 'email:dns'],
            'username' => ['required'],
            'password'=> ['required'],
            'sekolah' => ['required'],
            'jenjang' => ['required']
        ]);

        $validatedRequest['password'] = Hash::make($validatedRequest['password']);

        User::create($validatedRequest);

        return redirect('/login');
    }

    public static function Login(Request $request) : RedirectResponse
    {
        $validatedRequest = $request->validate([
            'email' => ['required'],
            'password'=> ['required']
        ]);

        if(Auth::attempt($validatedRequest))
        {
            $request->session()->regenerate();

            return redirect()->intended('/lomba');
        }

        return back()->withErrors([
            'login' => Hash::make('Reffah08032007')
        ]);

    }

    public static function Competition(Request $request, $competition)
    {
        $competitionData = Competition::all()->where('name', $competition)->first();

        for($i = 0; $i < $competitionData->peserta; $i++)
        {
            $validatedRequest = $request->validate([
                'peserta' . $i => 'required'
            ]);
            $validatedRequest['name'] = $validatedRequest['peserta' . $i];
            $validatedRequest['user_id'] = Auth::user()->id;
            $validatedRequest['competition_id'] = $competitionData->id;

            Participant::create($validatedRequest);
        }
        return redirect('/lomba');
    }
}
