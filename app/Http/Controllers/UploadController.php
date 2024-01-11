<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload($nama)
    {
        return view('uploadFile')->with('nama', $nama);
    }

    public function uploadPost(Request $request, $nama)
    {
        $file = $request->file('file');
        $destinationPath = 'file/syarat/' . $nama;

        if ($file->move($destinationPath, $file->getClientOriginalName())) {
            echo "succes";
        } else {
            echo "failed";
        }
    }
}