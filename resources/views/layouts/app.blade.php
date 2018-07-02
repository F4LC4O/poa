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

    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Intranet CPRM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/videoconferencia">Videoconferência</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/analisepetro">Análise Petrográfica</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> 

        @yield('content')
        
        @yield('scripts')
        
    </body>
</html>