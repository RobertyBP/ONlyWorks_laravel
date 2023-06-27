<?php

use App\Http\Controllers\TrabalhosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);

Route::get('/create', [TrabalhosController:: class, 'create'])->name('create')->middleware(['auth']);

Route::post('http://localhost/Only_Works/public/index.php/cadTrab', 
[TrabalhosController:: class, 'store'])->name('cadTrab')->middleware(['auth']);

Route::get('/exibir', [TrabalhosController:: class, 'exibirTrabalhos'])->name('exibir')->middleware(['auth']);



