<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class FileController extends Controller
{
    private static function getUrl($type, $file)
    {
        return URL::to(Config::get('assets.' . $type) . '/' . $file);
    }

    public function download($filename)
    {
        return response()->file('file/syarat/faiz/' . $filename);
        //return view('fileview')->with('filename', $filename);
        //return self::getUrl('img', $filename);
        // return response()->download(public_path('file/syarat/faiz/ss.png'));
    }
}
