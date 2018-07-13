<!DOCTYPE html>
<html>
    <head>        
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Intra - CPRM">
        <meta name="author" content="SUREG-PA">    

        <!-- Mobile Specific Meta
        ================================================== -->
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' />


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('titulo')</title>        
        
        <!-- CSS
        ================================================== -->       
        <link rel="stylesheet" href="{{ asset('css/bootstrap-4.0.0.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Fonts and icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- Full Calendar -->
        <link rel='stylesheet' href="{{ asset('fullcalendar/fullcalendar.css') }}" />
        <!-- Datatable -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 

    </head>
    <body>
        <nav style="margin-bottom:10px" class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Intranet CPRM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ (Request::is('/') ? 'active' : '') }}">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ (Request::is('videoconferencia*') ? 'active' : '') }}">
                    <a class="nav-link" href="/videoconferencia">Videoconferência</a>
                </li>
                <li class="nav-item {{ (Request::is('aflora*') ? 'active' : '') }}">
                    <a class="nav-link" href="/aflora">Aflora</a>
                </li>
                <li class="nav-item {{ (Request::is('analisepetro*') ? 'active' : '') }}">
                    <a class="nav-link" href="/analisepetro">Análise Petrográfica</a>
                </li>
            </ul>
        </div>
        </nav>
        @yield('sidebar_content')

        <!--   Core JS Files   -->
        <script src="{{ asset('js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('js/core/popper.min.js') }}"></script>
        <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>

        @yield('scripts')

        <script>
            
        </script>
        
    </body>

</html>