<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\BackEndController;

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

Route::get('/', [FrontEndController::class, 'Main'])->middleware('auth');
Route::get('/profile', [FrontEndController::Class, 'Profile'])->middleware('auth');
Route::get('/register', [FrontEndController::class, 'Register'])->middleware('guest');
Route::get('/login', [FrontEndController::class, 'Login'])->middleware('guest');
Route::get('/forgotPassword', [FrontEndController::class, 'ForgotPassword'])->middleware('guest');
Route::get('/resetPassword', [FrontEndController::class, 'ResetPassword'])->name('password.reset')->middleware('guest');
Route::get('/lomba', [FrontEndController::class, 'Lomba'])->middleware('auth');
Route::get('/lomba/{team}', [FrontEndController::class, 'Team'])->middleware('auth');
Route::get('/admin', [FrontendController::class, 'Admin'])->middleware('auth')->middleware('admin');

Route::post('/register', [BackEndController::class, 'Register']);
Route::post('/login', [BackEndController::class, 'Login']);
Route::post('/logout', [BackEndController::class, 'Logout']);
Route::post('/profile/edit', [BackEndController::class, 'ProfileEdit']);
Route::post('/profile', [BackEndController::class, 'Profile']);
Route::post('/forgotPassword', [BackEndController::class, 'ForgotPassword']);
Route::post('/resetPassword', [BackEndController::class, 'ResetPassword']);
Route::post('/addTeam', [BackEndController::class, 'AddTeam']);
Route::post('/deleteTeam', [BackEndController::class, 'DeleteTeam']);
Route::post('/addParticipant', [BackEndController::class, 'AddParticipant']);
Route::post('/deleteParticipant', [BackEndController::class, 'DeleteParticipant']);
Route::post('/lomba/{team}', [BackEndController::class, 'Team'])->middleware('auth');
Route::get('/upload/{nama}', [UploadController::class, 'upload'])->name('upload');
Route::post('/uploads/{nama}', [UploadController::class, 'uploadPost'])->name('upload.post');