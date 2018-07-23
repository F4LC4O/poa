<?php

namespace App\Http\Controllers\Aflora;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aflora\ProjetoAflora;

use Illuminate\Support\Facades\Validator;
use DateTime;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projetos = ProjetoAflora::get();
        
        return view('aflora.index', compact('projetos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suregs = ProjetoAflora::get();
        return view('aflora.create', compact('suregs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome'          => 'required',
            'dataInicio'    => 'nullable|date_format:d/m/Y',
            'dataConclusao' => 'nullable|date_format:d/m/Y',
        ], [
            'nome.required'             => 'Digite o nome do projeto.',
            'dataInicio.date_format'    => 'Data inválida.',
            'dataConclusao.date_format' => 'Data inválida.',
        ]);
        if (!$validator->fails()) {
            // Transformar formato das datas para 'dia/mês/ano'
            $dataInicio = $request->dataInicio;
            if ($dataInicio != null) {
                $dataInicio = DateTime::createFromFormat('j/m/Y', $dataInicio)->format('Y-m-d');
            }
            $dataConclusao = $request->dataConclusao;
            if ($dataConclusao != null) {
                $dataConclusao = DateTime::createFromFormat('j/m/Y', $dataConclusao)->format('Y-m-d');
            }
            // Criar projeto
            $projeto = ProjetoAflora::create([
                'nome'              => $request->nome,
                'sigla'             => $request->sigla,
                'centro_custo'      => $request->centroCusto,     
                'sureg_id'          => $request->sureg,
                'data_inicio'       => $dataInicio,
                'data_conclusao'    => $dataConclusao,                
            ]);
            return redirect()->route('aflora.edit', ['id' => $projeto->id])->with('success','Projeto cadastrado com sucesso!');
        } else {
            return back()->withErrors($validator)
                         ->withInput();
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
        $projeto = ProjetoAflora::find($id);
        $suregs = ProjetoAflora::get();
        
        if ($projeto != null) {
            $projeto->data_inicio = date_format(date_create($projeto->data_inicio), 'd-m-Y');
            $projeto->data_conclusao = date_format(date_create($projeto->data_conclusao), 'd-m-Y');
            return view('aflora.edit', compact('projeto', 'suregs'));
        } else {
            return redirect()->route('aflora.index');
        }
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
