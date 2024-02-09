<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class FileController extends Controller
{
    public function download($filename)
    {
        return response()->file('file/' . $filename);
    }
    public function juknis($filename)
    {
        return response()->file('file/juknis/' . $filename);
    }
}
