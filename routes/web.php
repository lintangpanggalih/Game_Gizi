<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

route::get('/', [LandingController::class, 'index'])->name('landing.index');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
});

Route::get('/register', [UserController::class, 'showRegisterForm'])->name('landing.registration');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::group(['middleware' => 'game-stages'], function () {
    route::get('map', [LandingController::class, 'map'])->name('landing.map');
    route::get('card', [LandingController::class, 'card'])->name('landing.card');
    route::get('quiz', [LandingController::class, 'quiz'])->name('landing.quiz');
    route::get('word', [LandingController::class, 'word'])->name('landing.word');
    route::get('drag', [LandingController::class, 'drag'])->name('landing.drag');
    
    /** GAME */
    Route::prefix('game')->name('game.')->group(function () {
        Route::put('save-session', [GameController::class, 'sessionHandler'])->name('save-session');
        Route::put('save-result', [GameController::class, 'storeResult'])->name('save-result');
    });
});

/** ADMIN */
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/game-tokens', [AdminController::class, 'tokenList'])->name('token-list');
    Route::post('/game-tokens', [AdminController::class, 'generateToken'])->name('game-token.generate');
    Route::get('/game-tokens/{id}/qrcode', [AdminController::class, 'tokenQrcode'])->name('game-token.qrcode');
    Route::get('/moodboard/result/{user_id?}', [AdminController::class, 'moodboardResult'])->name('moodboard.result');
});
