<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

route::get('/', [LandingController::class, 'index']);

Route::group(['middleware' => 'auth'], function () {
    route::get('map', [LandingController::class, 'map'])->name('landing.map');
    route::get('card', [LandingController::class, 'card'])->name('landing.card');
    route::get('quiz', [LandingController::class, 'quiz'])->name('landing.quiz');
    route::get('word', [LandingController::class, 'word'])->name('landing.word');
    route::get('drag', [LandingController::class, 'drag'])->name('landing.drag');
    route::get('biodata', [LandingController::class, 'biodata'])->name('landing.biodata');
    route::get('cardrule', [LandingController::class, 'cardrule'])->name('landing.cardrule');
    route::get('wordrule', [LandingController::class, 'wordrule'])->name('landing.wordrule');
    route::get('dragrule', [LandingController::class, 'dragrule'])->name('landing.dragrule');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [UserController::class, 'showRegisterForm'])->name('landing.registration');
    Route::post('/register', [UserController::class, 'register'])->name('register');
});

Route::prefix('game')->name('game.')->group(function () {
    Route::put('save-session', [GameController::class, 'sessionHandler'])->name('save-session');
    Route::put('save-result', [GameController::class, 'storeResult'])->name('save-result');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
});
