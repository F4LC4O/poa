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
        weekends: false, // will hide Saturdays and Sundays
        header: { 
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
         }, // buttons for switching between views

        navLinks: true, // can click day/week names to navigate views
        eventLimit: true, // allow "more" link when too many events
        events: [
    //carrega os dados recebidos do controlador HomeController.php, em videoconferencia
           {{   foreach ($array as $row) :}}
                {
                    id: $row ['id'],
                    assunto: $row ['assunto'],
                    inicio: $row ['inicio']
                },
            {{  endforeach; }}
            /*
            {
            title: 'All Day Event',
            start: '2018-06-20'
            },
            {
            title: 'Long Event',
            start: '2018-06-21',
            end: '2018-06-21'
            },
            {
            id: 999,
            title: 'Repeating Event',
            start: '2018-06-21T16:00:00'
            },
            {
            id: 999,
            title: 'Repeating Event',
            start: '2018-06-22T16:00:00'
            },
            {
            title: 'Conference',
            start: '2018-06-25',
            end: '2018-06-25'
            },
            {
            title: 'Meeting',
            start: '2018-06-26T10:30:00',
            end: '2018-06-26T12:30:00'
            },
            {
            title: 'Lunch',
            start: '2018-06-27T12:00:00'
            },
            {
            title: 'Meeting',
            start: '2018-06-27T14:30:00'
            },
            {
            title: 'Happy Hour',
            start: '2018-06-27T17:30:00'
            },
            {
            title: 'Dinner',
            start: '2018-06-28T20:00:00'
            },
            {
            title: 'Birthday Party',
            start: '2018-06-28T07:00:00'
            },
            {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2018-06-28'
            }
            */
        ]
    });
</script>

@endsection