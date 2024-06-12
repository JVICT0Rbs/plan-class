<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('cadastro');
});

Route::post('/register', [LoginController::class, 'save'])
    ->name('register');


Route::get('/dashboard', function () {
    return view('dashboard');
});
