<?php

namespace App\Http\Controllers\reqlab;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\reqlab\ReqRequisicao;
use App\Models\reqlab\ReqMaterial;
use App\Models\reqlab\ReqPetrografia;
use App\Models\reqlab\ReqGeoquimica;
use App\Models\reqlab\ReqFinalidade;
use App\Models\reqlab\ReqAmostra;
use App\Models\reqlab\ReqLitotipo;

class ReqlabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requisicoes =  ReqRequisicao::orderBy('created_at', 'asc')->paginate(10); //ou ReqRequisicao::all();
        return view('reqlab/index', compact('requisicoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials = ReqMaterial::all();
        $petrografias = ReqPetrografia::all();
        $geoquimicas = ReqGeoquimica::all();
        $finalidades = ReqFinalidade::all();
        $litotipos = ReqLitotipo::all();
        return view('reqlab/cadastrar',  compact('materials', 'petrografias', 'geoquimicas', 'finalidades', 'litotipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //dd($request);
        
        $requisicao = new ReqRequisicao;
        $requisicao->nome_projeto = $request->nome_projeto;
        $requisicao->centro_custo = $request->centro_custo;
        $requisicao->fk_material = $request->fk_material;
        $requisicao->fk_petrografia = $request->fk_petrografia;
        $requisicao->fk_geoquimica = $request->fk_geoquimica;
        $requisicao->fk_finalidade = $request->fk_finalidade;
        
        //seta a quantidade de amostras.
        if(isset($request->numero)){
            $quant_amostras = count($request->numero);
        } else {
            $quant_amostras = 0;
        }
        //echo $quant_amostras;
        for($i=0; $i < $quant_amostras; $i++){
            $amostra = new ReqAmostra;
            $amostra->numero = $request->numero[$i];
            $amostra->numero_campo = $request->numero_campo[$i];
            $amostra->data_coleta = $request->data_coleta[$i];
            $amostra->latitude = $request->latitude[$i];
            $amostra->longitude = $request->longitude[$i];
            $amostra->numero_laboratorio = $request->numero_laboratorio[$i];
            $amostra->numero_lote = $request->numero_lote[$i];
            $amostra->data_lote = $request->data_lote[$i];
            $amostra->fk_litotipo = $request->litotipo[$i];
            //dd($amostra);
            $array_amostras[] = $amostra; //coloca a amostra gerada em um array
        }

        //validação aqui...
        $inseriu = false;
        $inseriu = $requisicao->save();
        $req_id = $requisicao->id;
        for($i=0; $i < $quant_amostras; $i++){
            $array_amostras[$i]->fk_requisicao = $req_id;
            $inseriu = $inseriu and $array_amostras[$i]->save();
        }
        

        if($inseriu)
        {
            return view('reqlab/index');
        } else{
            return "falha";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $req = ReqRequisicao::find($id);
        
        $amo = ReqAmostra::where('fk_requisicao', $id)->get();
        return view('reqlab/mostrar', compact('req', 'amo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
