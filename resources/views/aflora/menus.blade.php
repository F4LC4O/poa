@section('menus')
    <li class="nav-item {{ (Request::is('aflora*edit') ? 'active' : '') }}">
        <a class="nav-link pl-0 text-nowrap" href="#"><i class="fa fa-list fa-fw"></i> <span class="font-weight-bold">Dados</span></a>
    </li>
    <li class="nav-item {{ (Request::is('*campo*') ? 'active' : '') }}">
        <a class="nav-link pl-0 text-nowrap" href="/aflora/campo"><i class="fa fa-list fa-fw"></i> <span class="font-weight-bold">Planilha de campo</span></a>
    </li>
    <li class="nav-item {{ (Request::is('*litologia*') ? 'active' : '') }}">
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