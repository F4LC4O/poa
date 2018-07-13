@extends('layouts/sidebar')
@section('titulo') Campo @endsection

@include('aflora/menus')

@section('content')
<table id="campo" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
        <th>Sigla do geólogo</th>
        <th>Geólogo</th>
        <th class="no-sort">Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>Sigla do geólogo</th>
        <th>Geólogo</th>
        <th class="no-sort">Ações</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach ($campos as $campo)                    
        <tr>
            <td>{{ $campo->sigla_geologo }}</td>
            <td>{{ $campo->nome_geologo }}</td>
            <td>
            <a href="{{ url('/aflora/campo/delete', ['id' => $projeto->id]) }}" onclick="return confirm('Tem certeza de que deseja excluir essa análise petrográfica?')" class="actions"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col-md-12 ml-3">
        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Novo Campo</a>
    </div>           
</div>

@endsection

@section('scripts')

<script src="{{ asset('js/jquery-1.12.4.js') }}"></script>
<script src="{{ asset('js/datatables.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#campo').DataTable( {
            "responsive": true,
            "order": [],
            "columnDefs": [ {
            "targets"  : 'no-sort',
            "orderable": false,
            }],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>
@stop