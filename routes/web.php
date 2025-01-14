<?php

use App\Http\Controllers\LandingController;
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

route::get('map', [LandingController::class, 'map'])->name('landing.map');
route::get('card', [LandingController::class, 'card'])->name('landing.card');
route::get('quiz', [LandingController::class, 'quiz'])->name('landing.quiz');
route::get('word', [LandingController::class, 'word'])->name('landing.word');
route::get('drag', [LandingController::class, 'drag'])->name('landing.drag');
route::get('biodata', [LandingController::class, 'biodata'])->name('landing.biodata');
route::get('cardrule', [LandingController::class, 'cardrule'])->name('landing.cardrule');
route::get('wordrule', [LandingController::class, 'wordrule'])->name('landing.wordrule');
route::get('dragrule', [LandingController::class, 'dragrule'])->name('landing.dragrule');
route::resource('/', LandingController::class);

Route::get('gamerule', function () {
    return view('gamerule');
});

// Route::get('/card', function () {
//     return view('card');
// });

// Route::get('/quiz', function () {
//     return view('quiz');
// });

// Route::get('/word', function () {
//     return view('word');
// });

// Route::get('/start', function () {
//     return view('start');
// });

// Route::get('/map', function () {
//     return view('map');
// })->name('map');

Route::get('/register', [UserController::class, 'showRegisterForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');



