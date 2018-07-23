<?php

namespace App\models\reqlab;

use Illuminate\Database\Eloquent\Model;

class ReqRequisicao extends Model
{
    protected $fillable = [
        'nome_projeto',
        'centro_custo',
        'fk_material',
        'fk_petrografia',
        'fk_geoquimica',
        'fk_finalidade'
    ];

    public function materials(){
        return $this->belongsTo('App\Models\reqlab\ReqMaterial', 'fk_material');
    }

    public function petrografias(){
        return $this->belongsTo('App\Models\reqlab\ReqPetrografia', 'fk_petrografia');
    }

    public function geoquimicas(){
        return $this->belongsTo('App\Models\reqlab\ReqGeoquimica', 'fk_geoquimica');
    }

    public function finalidades(){
        return $this->belongsTo('App\Models\reqlab\ReqFinalidade', 'fk_finalidade');
    }
}
