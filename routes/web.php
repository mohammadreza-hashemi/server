<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;

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
Route:: get('config', [ConfigController::class, 'index']);
Route::resource('user', UserController::class)
    ->middleware(['tokenIsValid','hasRole:editor']);
Route::get('/',function () {
    return view('welcome');
});





