<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [FrontEndController::class, 'Register']);
Route::get('/login', [FrontEndController::class, 'Login']);
Route::get('/lomba', [FrontEndController::class, 'Lomba'])->middleware('auth');
Route::get('/lomba/{competition}', [FrontEndController::class, 'Competition'])->middleware('auth');
Route::post('/register', [BackEndController::class, 'Register']);
Route::post('/login', [BackEndController::class, 'Login']);
Route::post('/lomba/{competition}', [BackEndController::class, 'Competition']);