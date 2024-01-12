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
})->name('welcome');
Route::post('test/{id}', [UserController::class, 'index'])->missing(function () {
    dd('not found');
});

Route::get('x', function () {
    return session()->all();
});

Route::post("response", [UserController::class, 'show']);

Route::get('cookie', function () {




//    return response()->download(public_path('storage/ReferenceCard.pdf'));
//    return redirect('/')->with('statussss','data');
//    $cookie = cookie('my-first-cookie', '12', 2);
//    return response('Hello World')->cookie($cookie);
});




