<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

route::get('map', [LandingController::class, 'map'])->name('landing.map');
route::get('card', [LandingController::class, 'card'])->name('landing.card');
route::get('quiz', [LandingController::class, 'quiz'])->name('landing.quiz');
route::get('word', [LandingController::class, 'word'])->name('landing.word');
route::get('drag', [LandingController::class, 'drag'])->name('landing.drag');
route::get('biodata', [LandingController::class, 'biodata'])->name('landing.biodata');
route::get('registration', [LandingController::class, 'registration'])->name('landing.registration');
route::get('cardrule', [LandingController::class, 'cardrule'])->name('landing.cardrule');
route::get('wordrule', [LandingController::class, 'wordrule'])->name('landing.wordrule');
route::get('dragrule', [LandingController::class, 'dragrule'])->name('landing.dragrule');
route::resource('/', LandingController::class);
Route::get('admin', [UserController::class, 'show']);

Route::get('gamerule', function () {
    return view('gamerule');
});

Route::get('/register', [UserController::class, 'showRegisterForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::prefix('game')->name('game.')->group(function () {
    Route::put('save-session', [GameController::class, 'sessoinHandler'])->name('save-session');
});
