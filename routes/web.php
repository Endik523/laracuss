<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('login', function () {
    return view('pages.auth.login');
});
Route::get('sign-up', function () {
    return view('pages.auth.sign-up');
});
Route::get('discussions', function () {
    return view('pages.discussions.index');
});
Route::get('discussions/lorem', function () {
    return view('pages.discussions.show');
});
