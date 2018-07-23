<?php

namespace App\Models\reqlab;

use Illuminate\Database\Eloquent\Model;

class ReqAmostra extends Model
{
    public function requisicaos(){
        return $this->belongsTo('App\Models\reqlab\ReqRequisicao', 'fk_requisicao');
    }

    public function litotipos(){
        return $this->belongsTo('App\Models\reqlab\ReqLitotipo', 'fk_litotipo');
    }
}
