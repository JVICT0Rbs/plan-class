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


 Route::get('{{/dashboard/$books->id}}', function () {
    return view('dashboard');

 });

Route::get('/book/{id}',[BookController::class,'show']);

Route::get('dashboard/create', [BookController::class, 'create']);

Route::post('books/create', [BookController::class, 'store']);

Route::get('edit/{id}', [BookController::class, 'edit']);

Route::put('/books/{id}', [BookController::class, 'update']);

Route::delete('/delet/{id}', [BookController::class, 'destroy'])->name('delet.book');