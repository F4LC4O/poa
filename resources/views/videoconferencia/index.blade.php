@extends('layouts/app')
@section('titulo') Videoconferências @endsection

@section('content')

<div class="container">
    <div id='calendar'></div>
</div>

@endsection

@section('scripts')

<script src="{{ asset('fullcalendar/lib/jquery.min.js') }}"></script>
<script src="{{ asset('fullcalendar/lib/moment.min.js') }}"></script>
<script src="{{ asset('fullcalendar/fullcalendar.js') }}"></script>
<script src="{{ asset('fullcalendar/locale/pt-br.js') }}"></script>

<script type="text/javascript">
    $('#calendar').fullCalendar({
    weekends: false // will hide Saturdays and Sundays
    });
</script>

@endsection