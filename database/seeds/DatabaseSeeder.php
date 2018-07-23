<?php

use Illuminate\Database\Seeder;
use App\Models\reqlab\ReqLitotipo;
use App\Models\reqlab\ReqMaterial;
use App\Models\reqlab\ReqPetrografia;
use App\Models\reqlab\ReqGeoquimica;
use App\Models\reqlab\ReqFinalidade;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $arLitotipo = [
            'rocha gabroica',
            'andesito',
            'rocha vulcanoclástica',
            'metabasalto',
            'hidrotermalito',
            'metaultramáfica'
        ];
        sort($arLitotipo);
        foreach($arLitotipo as $l){
            ReqLitotipo::create(['nome_litotipo' => $l]);
        }

        $arMaterial = [
            'rocha fresca',
            'rocha alterada (armazenar em saco plástico)',
            'rocha moída',
            'material inconsolidado',
            'minerais',
            'solo',
            'concentrado de bateia',
            'sedimento de corrente',
            'testemunho',
            'grãos',
            'outro (especificar)',
        ];
        sort($arMaterial);
        foreach($arMaterial as $m){
            ReqMaterial::create(['nome_material' => $m]);
        }

        $arPetrografia = [
            'lâmina petrográfica simples',
            'lâmina petrográfica orientada',
            'lâmina petrográfica impregnada',
            'lâmina petrográfica impregnada com azul de Oracet',
            'lâmina petrográfica simples polida',
            'lâmina petrográfica impregnada polida',
            'seção polida de rocha',
            'montagem de minerais em seção polida',
            'chapa de rocha polida',
            'chapa bipolida para inclusão fluida',
            'serrar amostra',
            'quebrar amostra'
        ];
        sort($arPetrografia);
        foreach($arPetrografia as $p){
            ReqPetrografia::create(['nome_petrografia' => $p]);
        }

        $arGeoquimica = [
            'química de rocha total',
            'química de menores/traços',
            'análise mineralógica',
            'separação para geocronologia',
            'outro (especificar)'
        ];
        sort($arGeoquimica);
        foreach($arGeoquimica as $g){
            ReqGeoquimica::create(['nome_geoquimica' => $g]);
        }

        $arFinalidade = [
            'Identificação e armazenamento litoteca petrografia',
            'Identificação e armazenamento Rua Beck',
            'Identificação e armazenamento Caçapava do Sul',
            'Encaminhamento para lâmina delgada',
            'Encaminhamento para moagem geocronologia',
            'Encaminhamento para geoquímica',
        ];
        sort($arFinalidade);
        foreach($arFinalidade as $f){
            ReqFinalidade::create(['nome_finalidade' => $f]);
        }
    }
}
