<!-- resources/views/turmas/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Turma</h1>
    <form method="POST" action="{{ route('turmas.update', $turma->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="numero_turma">Número da Turma:</label>
            <input type="text" id="numero_turma" name="numero_turma" value="{{ $turma->numero_turma }}" required>
        </div>
        <div>
            <label for="nome_turma">Nome da Turma:</label>
            <input type="text" id="nome_turma" name="nome_turma" value="{{ $turma->nome_turma }}" required>
        </div>
        <div>
            <label for="id_curso">Curso:</label>
            <select id="id_curso" name="id_curso" required>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ $turma->id_curso == $curso->id ? 'selected' : '' }}>{{ $curso->nome }}</option>
                @endforeach
            </select>
        </div>
        <div>