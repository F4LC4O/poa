@extends('layouts/reqlayout')

@section('conteudo')

    <h1>Listagem de requisições</h1>
    <p>Aqui vai a listagem...</p>

    <table border=1>
        <tr>
            <th>Nome do projeto</th>
            <th>Centro de custo</th>
            <th>Material</th>
            <th>Petrografia</th>
            <th>Geoquímica</th>
            <th>Finalidade</th>
        </tr>
        @foreach($requisicoes as $req)
            <tr>
                <td>
                    <a href = {{route('reqlab.show', ['id' => $req->id])}}>
                       {{$req->nome_projeto}}
                    </a>
                </td>
                <td>{{$req->centro_custo}}</td>
                <td>{{$req->materials->nome_material}}</td>
                <td>{{$req->petrografias->nome_petrografia}}</td>
                <td>{{$req->geoquimicas->nome_geoquimica}}</td>
                <td>{{$req->finalidades->nome_finalidade}}</td>
            </tr>
        @endforeach
    </table>

    <a href={{route('reqlab.create')}}>Cadastrar</a>
@endsection