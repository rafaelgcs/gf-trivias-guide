<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TriviaController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProgressController;

// Public Trivia Browser & Wiki Routes (NO LOGIN REQUIRED)
Route::get('/', [TriviaController::class, 'index'])->name('trivias.index');
Route::get('/trivia/{id}', [TriviaController::class, 'show'])->name('trivias.show');

// Public Guides Routes (NO LOGIN REQUIRED TO READ)
Route::get('/guias', [GuideController::class, 'index'])->name('guides.index');
Route::get('/guias/{slug}', [GuideController::class, 'show'])->name('guides.show');

// Credits Route
Route::view('/creditos', 'credits')->name('credits');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/perfil', [AuthController::class, 'profile'])->name('profile');
    
    // Community publishing & commenting
    Route::get('/guias-novo/criar', [GuideController::class, 'create'])->name('guides.create');
    Route::post('/guias', [GuideController::class, 'store'])->name('guides.store');
    Route::post('/comentarios', [CommentController::class, 'store'])->name('comments.store');
});

// Toggle Progress API (Supports both Guest LocalStorage & Auth User DB)
Route::post('/api/progress/toggle', [ProgressController::class, 'toggle'])->name('progress.toggle');
