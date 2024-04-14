<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, "index"])->name('home');

Route::get('/register', [UserController::class, "register"])->name('register');

Route::get('/login', [UserController::class, "login"])->name('login');

Route::post('/register/create', [UserController::class, "create"])->name('createUser');

Route::post('/login/create', [UserController::class, "store"])->name('loginUser');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/new-article', [ArticleController::class, "create"])->middleware('auth-check');

Route::get('/new-article/create', [ArticleController::class, "store"]);


// $slug = Str::slug(article, '-');

Route::get('/articles/{article}', [ArticleController::class, "show"]);

Route::fallback(function () {
    return view('404');
});
