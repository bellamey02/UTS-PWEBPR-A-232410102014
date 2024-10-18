<?php

use Illuminate\Support\Facades\Route;

// Rute untuk halaman Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Rute untuk halaman Register
Route::get('/register', function () {
    return view('register');
})->name('register');

// Rute untuk halaman Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');