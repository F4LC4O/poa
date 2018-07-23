@extends('layouts/reqlayout')

@section('conteudo')

    <h1>Requisição número {{$req->id}}</h1>
     
    <table border=1>
        <tr>
            <th>Projeto</th>
            <td>{{$req->nome_projeto}}</td>
        </tr>
        <tr>
            <th>Centro de custo</th>
            <td>{{$req->centro_custo}}</td>
        </tr>
        <tr>
            <th>Material</th>
            <td>{{$req->materials->nome_material}}</td>
        </tr>
        <tr>
            <th>Petrografia</th>
            <td>{{$req->petrografias->nome_petrografia}}</td>
        </tr>
        <tr>
            <th>Geoquímica</th>
            <td>{{$req->geoquimicas->nome_geoquimica}}</td>
        </tr>
        <tr>
            <th>Finalidade</th>
            <td>{{$req->finalidades->nome_finalidade}}</td>
        </tr>
    </table>
    
    <h2>Amostras</h2>
    <table border=1>
        <tr>
            <th>Número</th>        
            <th>Número de campo</th>        
            <th>Data de coleta</th>        
            <th>Latitude</th>        
            <th>Longitude</th>        
            <th>Número de laboratório</th>        
            <th>Número do lote</th>        
            <th>Data do lote</th>        
            <th>Litotipo</th>        
        </tr>
        @foreach($amo as $a)
            <tr>    
                <td>{{$a->numero}}</td>
                <td>{{$a->numero_campo}}</td>
                <td>{{$a->data_coleta}}</td>
                <td>{{$a->latitude}}°</td>
                <td>{{$a->longitude}}°</td>
                <td>{{$a->numero_laboratorio}}</td>
                <td>{{$a->numero_lote}}</td>
                <td>{{$a->data_lote}}</td>
                <td>{{$a->litotipos->nome_litotipo}}</td>
            </tr>
        @endforeach
    </table>
    
@endsection