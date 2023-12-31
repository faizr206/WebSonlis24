<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Competition;
use App\Models\Participant;
use App\Models\Team;

class BackEndController extends Controller
{
    public static function Register(Request $request)
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

    public static function Login(Request $request)
    {
        $validatedRequest = $request->validate([
            'email' => ['required'],
            'password'=> ['required']
        ]);

        if(Auth::attempt($validatedRequest))
        {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }
        
    }
    
    public static function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public static function ProfileEdit(Request $request)
    {
        $edit = true;
        return back()->with([
            'edit' => true
        ]);
    }

    public static function Profile(Request $request)
    {
        $validatedRequest = $request->validate([
            'username' => 'required',
            'email' => 'required|email:dns',
            'sekolah' => 'required'
        ]);
        $user = Auth::user();
        $user->update($validatedRequest);
        return back()->with([
            'edit' => false
        ]);
    }

    public static function AddTeam(Request $request)
    {
        $competition = Competition::where('name', $request->competitionName)->first();

        $team = Team::create([
            'user_id' => Auth::user()->id,
            'competition_id' => $competition->id
        ]);

        return back();
    }

    public static function DeleteTeam(Request $request)
    {
        $team = Auth::user()->teams->where('id', $request->team)->first();
        foreach($team->participants as $participant)
        {
            $participant->delete();
        }
        $team->delete();
        return back();
    }

    public static function AddParticipant(Request $request)
    {
        $participant = Participant::create([
            'team_id' => $request->team,
            'name' => "unnamed"
        ]);
        return back();
    }

    public static function DeleteParticipant(Request $request)
    {
        $participant = Participant::where('id', $request->participant)->first();
        if($participant->team->user == Auth::user())
        {
            $participant->delete();
        }
        return back();
    }

    public static function Team(Request $request)
    {
        $team = Team::all()->where('id', $request->team)->first();
        foreach ($team->participants as $participant) {
            $participant->update(['name' => ($request[$participant->id]!="")? $request[$participant->id] : ""]);
        }

        return back();
    }
}
