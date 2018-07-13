@extends('layouts/layout')
@section('sidebar_content')

<div class="container-fluid">
  <div class="row d-flex flex-nowrap wrapper">
    <div class="leftbar col-md-2 p-0">
    <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
        <div class="collapse navbar-collapse">
          <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
            @yield('menus')
          </ul>
        </div>
    </nav>
    </div>
    <div class="col-md-10">
        @yield('content')
    </div>
  </div>
</div>

@endsection