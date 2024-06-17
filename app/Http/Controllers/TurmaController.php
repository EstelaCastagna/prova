<?php

// app/Http/Controllers/TurmaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Curso;
use App\Models\Professor;

class TurmaController extends Controller
{
    
    public function create()
    {
        $cursos = Curso::all();
        $professores = Professor::all();
        return view('form_cadastro_turma', compact('cursos', 'professores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_turma' => 'required',
            'nome_turma' => 'required',
            'id_curso' => 'required',
            'id_professor' => 'required',
        ]);

        Turma::create($request->all());

        return redirect()->route('form_cadastro_turma')->with('success', 'Turma criada com sucesso!');
    }

    public function show($id)
    {
        $turma = Turma::find($id);
        return view('form_cadastro_turma', compact('turma'));
    }

    public function edit($id)
    {
        $turma = Turma::find($id);
        $cursos = Curso::all();
        $professores = Professor::all();
        return view('form_cadastro_turma', compact('turma', 'cursos', 'professores'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'numero_turma' => 'required',
            'nome_turma' => 'required',
            'id_curso' => 'required',
            'id_professor' => 'required',
        ]);

        $turma = Turma::find($id);
        $turma->update($request->all());

        return redirect()->route('form_cadastro_turma')->with('success', 'Turma atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $turma = Turma::find($id);
        $turma->delete();

        return redirect()->route('form_cadastro_turma')->with('success', 'Turma deletada com sucesso!');
    }
}