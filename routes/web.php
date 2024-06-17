<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
Route::get('/cadastroTurma', function () {
    return view('form_cadastro_turma');
})->name('turma');
Route::get('/cadastroAluno', function () {
    return view('form_cadastro_aluno');
})->name('aluno');
Route::get('/cadastroProfessor', function () {
    return view('form_cadastro_professor');
})->name('professor');
Route::get('/login', function () {
    return view('login');
})->name('login');

// routes/web.php


Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/turma', [TurmaController::class, 'store'])->name('turma.store');

    Route::get('/turma/{id}/edit', [TurmaController::class, 'edit'])->name('turma.edit');
    Route::put('/turma/{id}', [TurmaController::class, 'update'])->name('turma.update');
});