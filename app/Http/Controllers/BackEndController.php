<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

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

            return redirect()->intended('/');
        }

        return back();
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
            'edit' => true,
            'competitions' => Competition::all()
        ]);
    }

    public static function Profile(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email:dns',
            'sekolah' => 'required',
            'lomba' => 'required'
        ]);
        $user = Auth::user();
        $user->update($request->all());
        return back()->with([
            'edit' => false
        ]);
    }

    public static function ForgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns'
        ]);

        Password::sendResetLink($request->only('email'));

        return redirect('login');
    }

    public static function ResetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|confirmed'
        ]);

        Password::Reset($request->only('email', 'password', 'password_confirmation', 'token'), function (User $user, string $password)
        {
            $user->ForceFill([
                'password' => Hash::make($password)
            ]);

            $user->save();
        });

        return redirect('login');
    }

    public static function Dashboard_Participant(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Participant::where('id', $request->participant_id)->update($request->only('name'));
        return back();
    }

    public static function AddParticipant(Request $request)
    {
        $participant = Participant::create([
            'user_id' => Auth::user()->id,
            'name' => "unnamed"
        ]);
    }

    public static function SaveParticipant(Request $request)
    {
        $participant = Participant::where('id', $request->participantId)->first();
        if($participant->user == Auth::user())
        {
            $participant->update([
                'name' => $request->participantName
            ]);
        }
    }

    public static function DeleteParticipant(Request $request)
    {
        $participant = Participant::where('id', $request->participantId)->first();
        if($participant->user == Auth::user())
        {
            $participant->delete();
        }
        return back();
    }

    public static function AdminEdit(Request $request, $id)
    {
        $user = User::all()->where('id', $id)->first();
        $user->update([
            'status' => $request->status,
            'comment' => $request->comment
        ]);
        return back();
    }

    public static function ChangeCompetition(Request $request)
    {
        Auth::user()->update(['lomba' => $request->competition]);
        foreach(Auth::user()->participants as $participant)
        {
            $participant->delete();
        }
        return back();
    }
}
