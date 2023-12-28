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

Route::get('/', [FrontEndController::class, 'Main'])->middleware('auth');
Route::get('/register', [FrontEndController::class, 'Register'])->middleware('guest');
Route::get('/login', [FrontEndController::class, 'Login'])->middleware('guest');
Route::get('/lomba', [FrontEndController::class, 'Lomba'])->middleware('auth');
Route::get('/lomba/{team}', [FrontEndController::class, 'Team'])->middleware('auth');
Route::post('/register', [BackEndController::class, 'Register']);
Route::post('/login', [BackEndController::class, 'Login']);
Route::post('/logout', [BackEndController::class, 'Logout']);
Route::post('/addTeam', [BackEndController::class, 'AddTeam']);
Route::post('/addParticipant', [BackEndController::class, 'AddParticipant']);
Route::post('/lomba/{team}', [BackEndController::class, 'Team'])->middleware('auth');