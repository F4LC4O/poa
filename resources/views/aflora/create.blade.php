@extends('layouts/sidebar')
@section('titulo') Nova Análise @endsection

@section('menus')
    <li class="nav-item">
        <a class="nav-link pl-0 text-nowrap" href="#"><i class="fa fa-list fa-fw"></i> <span class="font-weight-bold">Planilha de campo</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pl-0" href="#"><i class="fa fa-gem fa-fw"></i> <span class="d-none d-md-inline">Litologia</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pl-0" href="#"><i class="fa fa-gem fa-fw"></i> <span class="d-none d-md-inline">Amostras</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pl-0" href="#"><i class="fa fa-list fa-fw"></i> <span class="d-none d-md-inline">Estrutural</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pl-0" href="#"><i class="fa fa-list fa-fw"></i> <span class="d-none d-md-inline">Econômica</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pl-0" href="#"><i class="fa fa-list fa-fw"></i> <span class="d-none d-md-inline">Petrografia</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pl-0" href="#"><i class="fa fa-list fa-fw"></i> <span class="d-none d-md-inline">Relação de Amostras</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pl-0" href="#"><i class="fa fa-list fa-fw"></i> <span class="d-none d-md-inline">Litoquímica</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pl-0" href="#"><i class="fa fa-list fa-fw"></i> <span class="d-none d-md-inline">Número de Laboratório</span></a>
    </li>
@endsection

@section('content')

{!! Form::open(['url' => 'analisepetro/store', 'autocomplete' => 'off']) !!}
<div class="content">
  <div class="row">
    <div class="offset-sm-2 col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="title">Novo Projeto</h3>
        </div>
        <div class="card-body"> 
          <div class="row">
            <div class="col-md-12">
              <label>Nome do projeto:</label>
              <div class="form-group">
                <input type="text" class="form-control" id="nome" name="nome">
              </div>
            </div>            
          </div>
          <div class="row">            
            <div class="col-md-3">
              <label>Centro de custo:</label>
              <div class="form-group">
                <input type="text" class="form-control" id="centroCusto" name="centroCusto">
              </div>
            </div>
            <div class="col-md-3 formLeft">
              <label>Amostra:</label>
              <div class="form-group">
                <input type="text" class="form-control" id="amostra" name="amostra">
              </div>
            </div>
            <div class="col-md-3 formLeft">
              <label>Data:</label>
              <div class="form-group">
                <input type="text" class="form-control" id="data" name="data">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <div class="row">
    <div class="offset-sm-2 col-md-8">
      <a href="{{ route('aflora.index') }}" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Voltar</a>
      <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Cadastrar</button>
    </div>
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
        $('#data').datepicker();
        $.datepicker.setDefaults({
            showAnim: "clip",
            changeMonth: true,
            changeYear: true,
            yearRange: "1950:2018"
        });

        $(document).ready(function() {
            // ---- Masks -----
            $("#data").mask('00/00/0000');
        });
</script>

@stop