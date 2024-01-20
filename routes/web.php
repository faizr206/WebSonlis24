<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin2', function () {
    return view('admin2');
});

Route::get('/admin2/file/{nama}/{filename}', [FileController::class, 'download']);

Route::get('/upload/{nama}', [UploadController::class, 'upload'])->name('upload');
Route::post('/uploads/{nama}', [UploadController::class, 'uploadPost'])->name('upload.post');
