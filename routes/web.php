<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;
use \Illuminate\Http\Request;
use App\Http\Controllers\OrderController;

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
Route::get('config', [ConfigController::class, 'index']);
//Route::resource('user', UserController::class);


Route::get('user/{category}', [UserController::class, 'index'])
    ->missing(function () {
        return to_route('welcome');
    });


Route::permanentRedirect('/dashboard', '/user/create');
Route::view('/', 'welcome')->name('welcome');
Route::get('/product/{id}/comments/{commentId}', function (int $id, int $commentId) {
    dd('done');
});
Route::get('/product/{id}/{name}', function (Request $request) {
    dd('done');
})->where(['id' => '[0-9]+', 'name' => '[a-z]+'])
    ->whereAlpha('name')
    ->whereNumber('id')
    ->whereIn('name', ['ali', 'hasan', 'reza']);
Route::get('search/{search}', function (string $search) {
    return $search;
})->where('search', '.*');

Route::controller(OrderController::class)
    ->domain('localhost:8000')
    ->name('panel.')
    ->prefix('panel')->group(function () {
        Route::get('users/tests', 'test')->name('test');
        Route::get('users/', 'activeUsers')->name('users');
    });

Route::get('test', function (Request $request) {
    return $request->ip();
})->middleware(['throttle:login']);

Route::fallback(function () {
    return 'this route is not found ';

});


