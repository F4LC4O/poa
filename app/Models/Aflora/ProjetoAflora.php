<?php

namespace App\Models\Aflora;

use Illuminate\Database\Eloquent\Model;

class ProjetoAflora extends Model
{
    protected $fillable = [
        'nome', 'sigla', 'centro_custo', 'sureg_id', 'data_inicio', 'data_conclusao',
    ];
}
