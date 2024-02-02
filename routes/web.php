<?php

use App\Http\Controllers\FileController;
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

Route::get('/', [FrontendController::class, 'Main']);
Route::get('/home', [FrontendController::class, 'Home']);
Route::get('/login', [FrontendController::class, 'Login'])->middleware('guest');
Route::get('/register', [FrontendController::class, 'Register'])->middleware('guest');
Route::get('/dashboard', [FrontendController::class, 'Dashboard'])->middleware('auth');

Route::get('/admin', [FrontendController::class, 'Admin'])->middleware('admin');
Route::get('/admin/user-{id}', [FrontEndController::class, 'Admin2'])->middleware('admin');

Route::get('/admin2/file/{nama}/{filename}', [FileController::class, 'download']);

Route::get('/upload/{nama}', [UploadController::class, 'upload'])->name('upload');
Route::post('/uploads/{nama}', [UploadController::class, 'uploadPost'])->name('upload.post');

Route::get('/profile', [FrontEndController::Class, 'Profile'])->middleware('auth');
Route::get('/forgotPassword', [FrontEndController::class, 'ForgotPassword'])->middleware('guest');
Route::get('/resetPassword', [FrontEndController::class, 'ResetPassword'])->name('password.reset')->middleware('guest');
Route::get('/lomba', [FrontEndController::class, 'Lomba'])->middleware('auth');
Route::get('/dashboard', [FrontEndController::class, 'Dashboard'])->middleware('auth');
Route::get('/admin', [FrontendController::class, 'Admin'])->middleware('auth')->middleware('admin');
Route::get('/getParticipant', [FrontEndController::class, 'GetParticipant']);

Route::post('/register', [BackEndController::class, 'Register']);
Route::post('/login', [BackEndController::class, 'Login']);
Route::post('/logout', [BackEndController::class, 'Logout']);
Route::post('/profile/edit', [BackEndController::class, 'ProfileEdit']);
Route::post('/profile', [BackEndController::class, 'Profile']);
Route::post('/forgotPassword', [BackEndController::class, 'ForgotPassword']);
Route::post('/resetPassword', [BackEndController::class, 'ResetPassword']);
Route::post('/addParticipant', [BackEndController::class, 'AddParticipant']);
Route::post('/saveParticipant', [BackendController::class, 'SaveParticipant']);
Route::post('/deleteParticipant', [BackEndController::class, 'DeleteParticipant']);
Route::post('/changeCompetition', [BackEndController::class, 'ChangeCompetition']);

Route::post('/admin/user-{id}/edit', [BackEndController::class, 'AdminEdit'])->middleware('admin');
Route::post('/dashboard/peserta', [BackEndController::class, 'Dashboard_Participant']);