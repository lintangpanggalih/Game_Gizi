<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('start');
});

Route::get('/card', function () {
    return view('card');
});

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/word', function () {
    return view('word');
});

Route::get('/start', function () {
    return view('start');
});

Route::get('/register', [UserController::class, 'showRegisterForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/map', function () {
    return view('map');
})->name('map');

