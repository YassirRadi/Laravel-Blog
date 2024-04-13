<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, "index"])->name('home');

Route::get('/register', [UserController::class, "register"]);

Route::get('/login', [UserController::class, "login"]);

Route::post('/register/create', [UserController::class, "create"])->name('createUser');

Route::post('/login/create', [UserController::class, "store"])->name('loginUser');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
});

// $slug = Str::slug(article, '-');

Route::get('/articles', function () {
    return view('details');
});

Route::fallback(function () {
    return view('404');
});
