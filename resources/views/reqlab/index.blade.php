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
    </table>

    <a href={{route('reqlab.create')}}>Cadastrar</a>
@endsection