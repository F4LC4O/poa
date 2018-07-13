<?php

namespace App\models\reqlab;

use Illuminate\Database\Eloquent\Model;

class ReqRequisicao extends Model
{
    protected $connection = 'mysql_petro';
    protected $fillable = [
        'nome_projeto',
        'centro_custo',
        'fk_material',
        'fk_petrografia',
        'fk_geoquimica',
        'fk_finalidade'
    ];

    public function materials(){
        return $this->hasOne('App\Models\ReqMaterial');
    }

    public function petrografias(){
        return $this->hasOne('App\Models\ReqPetrografia');
    }

    public function geoquimicas(){
        return $this->hasOne('App\Models\ReqGeoquimica');
    }

    public function finalidades(){
        return $this->hasOne('App\Models\ReqFinalidade');
    }
}
