@extends('layouts/reqlayout')

@section('conteudo')

    <form method="post" action={{route('reqlab.store')}}>
        @csrf
        <label>Nome do projeto</label>
        <input type="text" name="nome_projeto" placeholder="Nome do projeto">
        <br>

        <label>Centro de custo</label>
        <input type="text" name="centro_custo" placeholder="Centro de custo">
        <br>

        <label>Material</label>
        <select name="fk_material">
            @foreach($materials as $mat)
                <option value="{{$mat->id}}">{{$mat->nome_material}}</option>
            @endforeach
        </select>
        <br>

        <label>Petrografia</label>
        <select name="fk_petrografia">
            @foreach($petrografias as $pet)
                <option value="{{$pet->id}}">{{$pet->nome_petrografia}}</option>
            @endforeach
        </select>
        <br>

        <label>Geoquímica</label>
        <select name="fk_geoquimica">
            @foreach($geoquimicas as $geo)
                <option value="{{$geo->id}}">{{$geo->nome_geoquimica}}</option>
            @endforeach
        </select>
        <br>

        <label>Finalidade</label>
        <select name="fk_finalidade">
            @foreach($finalidades as $fin)
                <option value="{{$fin->id}}">{{$fin->nome_finalidade}}</option>
            @endforeach
        </select>
        <br>

        <button>Enviar</button>
    </form>

@endsection