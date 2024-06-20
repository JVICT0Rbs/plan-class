<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
 Route::get('/dashboard', [BookController::class, 'index']);


