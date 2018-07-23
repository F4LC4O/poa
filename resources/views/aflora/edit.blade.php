@extends('layouts/sidebar')
@section('titulo') Dados do projeto @endsection

@include('aflora/menus')

@section('content')

{!! Form::open(['route' => ['aflora.update', $projeto->id], 'method' => 'put', 'autocomplete' => 'off']) !!}
@include('flash-message')
<div class="row">
<div class="offset-md-3 col-md-6">
    <div class="card">
    <div class="card-header">
        <h3 class="title">Dados do projeto</h3>
    </div>
    <div class="card-body"> 
        <div class="row">
        <div class="col-md-12">
            <label>Nome:</label>
            <div class="form-group">
            {!! Form::text('nome', $projeto->nome, ['id' => 'nome', 'class' => ($errors->has('nome') ? 'is-invalid ' : ''). 'form-control']) !!}   
            @foreach ($errors->get('nome') as $message)                                
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @endforeach
            </div>
        </div>            
        </div>
        <div class="row">
        <div class="col-md-3">
            <label>Sigla:</label>
            <div class="form-group">
            {!! Form::text('sigla', $projeto->sigla, ['id' => 'sigla', 'class' => ($errors->has('sigla') ? 'is-invalid ' : ''). 'form-control']) !!}   
            @foreach ($errors->get('sigla') as $message)                                
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @endforeach
            </div>
        </div>
        <div class="col-md-3 formLeft">
            <label>Centro de custo:</label>
            <div class="form-group">
            {!! Form::text('centroCusto', $projeto->centro_custo, ['id' => 'centroCusto', 'class' => ($errors->has('centroCusto') ? 'is-invalid ' : ''). 'form-control']) !!}   
            @foreach ($errors->get('centroCusto') as $message)                                
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @endforeach
            </div>
        </div>
        <div class="col-md-5 formLeft">
            <label>Sureg:</label>
            <div class="form-group">
                {!! Form::select('sureg', $suregs, $projeto->sureg, ['class' => 'form-control', 'placeholder' => '-- Sureg --']) !!}
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-4">
            <label>Data de início:</label>
            <div class="form-group">
            {!! Form::text('dataInicio', $projeto->data_inicio, ['id' => 'dataInicio', 'class' => ($errors->has('dataInicio') ? 'is-invalid ' : ''). 'form-control data']) !!}
            @foreach ($errors->get('dataInicio') as $message)                                
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @endforeach
            </div>
        </div>
        <div class="col-md-4 formLeft">
            <label>Data de conclusão:</label>
            <div class="form-group">
            {!! Form::text('dataConclusao', $projeto->data_conclusao, ['id' => 'dataConclusao', 'class' => ($errors->has('dataconclusao') ? 'is-invalid ' : ''). 'form-control data']) !!}
            @foreach ($errors->get('dataConclusao') as $message)                                
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @endforeach
            </div>
        </div>
        </div>
    </div>
    </div>
</div>    
</div>
<div class="row">
<div class="offset-md-3 col-md-6">
    <a href="{{ route('aflora.index') }}" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Voltar</a>
    {!! Form::button('<i class="fa fa-save"></i> Salvar', ['type' => 'submit', 'class' => 'btn btn-success btn-sm']) !!}
</div>
</div>
{!! Form::close() !!}

@endsection

@section('scripts')

<script src="{{ asset('js/jquery-1.12.4.js') }}"></script>

<!-- Datepicker -->    
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('js/datepicker-pt-BR.js') }}"></script>

<!-- Máscaras -->
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>

<script type="text/javascript">
        $('.data').datepicker();
        $.datepicker.setDefaults({
            showAnim: "clip",
            changeMonth: true,
            changeYear: true,
            yearRange: "1950:2018"
        });

        $(document).ready(function() {
            // ---- Masks -----
            $(".data").mask('00/00/0000');
        });
</script>

@stop