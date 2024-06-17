<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Turma extends Model
{
    protected $table = 'turmas';

    protected $fillable = [
        'numero_turma',
        'nome_turma',
        'id_curso',
        'id_professor',
    ];

    public function curso(): BelongsTo
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }

    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professor::class, 'id_professor');
    }
}