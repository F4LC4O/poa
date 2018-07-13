<?php

namespace App\Http\Controllers\reqlab;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\reqlab\ReqRequisicao;
use App\Models\reqlab\ReqMaterial;
use App\Models\reqlab\ReqPetrografia;
use App\Models\reqlab\ReqGeoquimica;
use App\Models\reqlab\ReqFinalidade;

class ReqlabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('reqlab/index');
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
        return view('reqlab/cadastrar',  compact('materials', 'petrografias', 'geoquimicas', 'finalidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ReqRequisicao $requisicao)
    {
        $dados = $request->all();
        $inseriu = $requisicao->create($dados);

        if($inseriu){
            return "sucesso";
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
        //
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
