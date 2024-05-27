<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\EmprestimosController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:api']], function ($router) {
    Route::get('/autores', [AutoresController::class, 'getAll']);
    Route::get('/autores/{id}', [AutoresController::class, 'getAutoresById']);
    Route::post('/autores', [AutoresController::class, 'create']);
    Route::put('/autores/{id}', [AutoresController::class, 'update']);
    Route::delete('/autores/{id}', [AutoresController::class, 'delete']);
    
    
    Route::get('/livros', [LivrosController::class, 'getAll']);
    Route::get('/livros/{id}', [LivrosController::class, 'getLivrosById']);
    Route::post('/livros', [LivrosController::class, 'create']);
    Route::put('/livros/{id}', [LivrosController::class, 'update']);
    Route::delete('/livros/{id}', [LivrosController::class, 'delete']);
    
    
    Route::get('/emprestimos', [EmprestimosController::class, 'getAll']);
    Route::get('/emprestimos/{id}', [EmprestimosController::class, 'getEmprestimosById']);
    Route::post('/emprestimos', [EmprestimosController::class, 'create']);
    Route::put('/emprestimos/{id}', [EmprestimosController::class, 'update']);
    Route::delete('/emprestimos/{id}', [EmprestimosController::class, 'delete']);
});

Route::group([], function ($router) {
    Route::post('login', [AuthenticationController::class, 'login']);
    Route::post('registrar', [UsuariosController::class, 'registrar']);
});