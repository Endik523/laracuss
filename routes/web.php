<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('login', function () {
    return view('pages.auth.login');
})->name('auth.login.show');

Route::get('sign-up', function () {
    return view('pages.auth.sign-up');
})->name('auth.sign-up.show');

Route::get('discussions', function () {
    return view('pages.discussions.index');
})->name('discussions.index');

Route::get('discussions/lorem', function () {
    return view('pages.discussions.show');
})->name('discussions.show');
