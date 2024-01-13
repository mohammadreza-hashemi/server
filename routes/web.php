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
Route::resource('user', UserController::class);
Route::get('/', function () {
    return view('welcome');
})->name('welcome.index');

Route::get('unsubscribe', function () {
    return 'message';
})->name('unsubscribe')->middleware('signed');

Route::get('url', function () {
    echo url("") . "<br>";
    echo url()->current() . "<br>";
    echo url()->full() . "<br>";
//    echo url("")->previous()."<br>";
//    echo url("")."<br>";
    echo route('welcome.index') . "<br>";
    echo URL::signedRoute('unsubscribe', ['user' => 1]) . "<br>";
    echo URL::signedRoute('unsubscribe', ['user' => 1], absolute: false) . "<br>";
    return redirect()->action([UserController::class, 'index']);
});






