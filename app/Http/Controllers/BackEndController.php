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

use function Laravel\Prompts\alert;

class BackEndController extends Controller
{
    const minAnggota = [
        'Lomba Karya Inovasi' => 1,
        'Short Movie' => 5,
        'Ratoeh Jaroe' => 13,
        'Mobile Legend' => 5,
        'Music Cover' => 1,
    ];
    const maxAnggota = [
        'Lomba Karya Inovasi' => 3,
        'Short Movie' => 15,
        'Ratoeh Jaroe' => 19,
        'Mobile Legend' => 7,
        'Music Cover' => 5,
    ];
    const jumlahAnggota = [
        'Science Competition' => 3,
        'Smart and Quick' => 3,
        'Social Competition' => 3,
        'Mathematics Competition' => 1,
        'LDBI' => 3,
        'NSDC' => 3,
        'Speech Contest' => 1,
        'Cipta Baca Puisi' => 1,
        'Khitobah' => 1,
        'Monolog' => 1,
        'Story-telling' => 1,
        'Essay Writing Competition' => 1,
        'Short Movie' => -1,
        'Photography' => 1,
        'Lomba Karya Inovasi' => -1,
        'Music Cover' => 1,
        'Mobile Legend' => -1,
        'Soccer' => 18,
        'Ratoeh Jaroe' => -1,
        'Pramuka' => 16,
        'Music Cover' => -1,
    ];

    const lombaSMP = array(
        "Science Competition",
        "Smart and Quick",
        "Social Competition",
        "Mathematics Competition",
        "Speech Contest",
        "Cipta Baca Puisi",
        "Khitobah",
        "Monolog",
        "Story-telling",
        "Essay Writing Competition",
        "Photography",
        "Lomba Karya Inovasi",
        "Music Cover",
        "Mobile Legend",
        "Ratoeh Jaroe",
        "Pramuka"
    );
    const lombaSMA = array(
        "LDBI",
        "NSDC",
        "Khitobah",
        "Monolog",
        "Story-telling",
        "Essay Writing Competition",
        "Short Movie",
        "Photography",
        "Music Cover",
        "Mobile Legend",
        "Soccer",
        "Ratoeh Jaroe",
    );
    public static function Register(Request $request)
    {
        $validatedRequest = $request->validate([
            'email' => ['required', 'unique:users', 'email:dns'],
            'username' => ['required'],
            'password' => ['required'],
            'sekolah' => ['required'],
            'jenjang' => ['required'],
            'lomba' => ['required']
        ]);

        $validatedRequest['password'] = Hash::make($validatedRequest['password']);

        if ($validatedRequest['jenjang'] == 'smp') {
            if (in_array($validatedRequest['lomba'], static::lombaSMP)) {
                return redirect('/login');
            } else {
                return redirect()->back()->withErrors(['msg' => 'Lomba Tidak Sesuai dengan Jenjang']);
            }
        } else if ($validatedRequest['jenjang' == 'sma']) {

            if (in_array($validatedRequest['lomba'], static::lombaSMA)) {
                return redirect('/login');
            } else {
                return redirect()->back()->withErrors(['msg' => 'Lomba Tidak Sesuai dengan Jenjang']);
            }
        } else {
            if ($validatedRequest['lomba'] == "Photography") {
                return redirect('/login');
            } else {
                return redirect()->back()->withErrors(['msg' => 'Lomba Tidak Sesuai dengan Jenjang']);
            }
        }
        // if ($validatedRequest['jenjang'] == 'SMP') return view('home');
        // else {
        //     User::create($validatedRequest);

        //     return redirect('/login');
        // }
    }

    public static function Login(Request $request)
    {
        $validatedRequest = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validatedRequest)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
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

    public static function UpdateDrive(Request $request)
    {
        echo ($request);
        $request->validate([
            'drivePath' => 'required'
        ]);
        $user = Auth::user();
        $user->update($request->all());

        return back();
    }

    public static function Submit(Request $request)
    {
        $user = Auth::user();
        $lomba = $user->lomba;
        $anggota = $user->anggota;
        if (static::jumlahAnggota[$lomba] == -1) {
            if (static::minAnggota[$lomba] <= $anggota && static::maxAnggota[$lomba] >= $anggota) {
                $user->update(['status' => "Menunggu"]);
                return back();
            } else {
                return redirect()->back()->withErrors(['msg' => 'Syarat Belum Memenuhi']);
            }
        } else if (static::jumlahAnggota[$lomba] == $anggota) {
            $user->update(['status' => "Menunggu"]);
            return back();
        } else {
            return redirect()->back()->withErrors(['msg' => 'Syarat Belum Memenuhi']);
        }
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

        Password::Reset($request->only('email', 'password', 'password_confirmation', 'token'), function (User $user, string $password) {
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
        $user = Auth::user();
        $user->update(['anggota' => $user->anggota + 1,]);

        $participant = Participant::create([
            'user_id' => Auth::user()->id,
            'name' => "Nama Peserta",
            'idAkun' => "ID Akun",
            'nicknameAkun' => "Nickname Akun"
        ]);
    }

    public static function SaveParticipant(Request $request)
    {
        $participant = Participant::where('id', $request->participantId)->first();
        if ($participant->user == Auth::user()) {
            $participant->update([
                'name' => $request->participantName,
                'idAkun' => $request->idAkun,
                'nicknameAkun' => $request->nicknameAkun,
            ]);
        }
    }

    public static function DeleteParticipant(Request $request)
    {

        $participant = Participant::where('id', $request->participantId)->first();
        if ($participant->user == Auth::user()) {
            $participant->delete();
        }
        $user = Auth::user();
        $user->update(['anggota' => $user->anggota - 1,]);
        return back();
    }

    public static function Edit(Request $request)
    {
        $user = User::all()->where('id', $request->id)->first();
        $user->update([
            'status' => $request->status,
            'comment' => $request->comment
        ]);
        return back();
    }

    public static function ChangeCompetition(Request $request)
    {
        Auth::user()->update(['lomba' => $request->competition]);
        foreach (Auth::user()->participants as $participant) {
            $participant->delete();
        }
        return back();
    }
}
