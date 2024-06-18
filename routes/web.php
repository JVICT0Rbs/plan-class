<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/', [LoginController::class, 'login'])
    ->name('Login');


Route::get('/register', function () {
    return view('cadastro');
});

Route::post('/register', [CadastroController::class, 'save'])
    ->name('register');


Route::get('/dashboard', function () {
    return view('dashboard');
});


