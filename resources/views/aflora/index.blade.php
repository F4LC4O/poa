@extends('layouts/app')
@section('titulo') Análises Petrográficas @endsection

@section('content')
    @include('flash-message')
    <table id="aflora" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
        <th>Nome do Projeto</th>
        <th class="no-sort">Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>Nome do Projeto</th>
        <th class="no-sort">Ações</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach ($projetos as $projeto)                    
        <tr>
            <td>{{ $projeto->nome }}</td>
            <a href="{{ route('projeto.edit', ['id' => $projeto->id]) }}" class="actions"><i class="fa fa-edit"></i></a>
            <a href="{{ url('/analisepetro/delete', ['id' => $projeto->id]) }}" onclick="return confirm('Tem certeza de que deseja excluir essa análise petrográfica?')" class="actions"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <div class="row">
        <div class="col-md-12 ml-3">
            <a href="{{ route('aflora.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Novo Projeto</a>
        </div>           
    </div>
@endsection

@section('scripts')

<script src="{{ asset('js/jquery-1.12.4.js') }}"></script>
<script src="{{ asset('js/datatables.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#aflora').DataTable( {
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