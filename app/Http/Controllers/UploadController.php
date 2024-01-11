<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload($nama)
    {
        return view('uploadFile')->with('nama', $nama);
    }

    public function uploadPost(Request $request, $nama)
    {
        Storage::putFileAs('syarat', $request->file('file'), $request->file->getClientOriginalName());
        echo Storage::delete('syarat/' . $request->file->getClientOriginalName());
    }
}
