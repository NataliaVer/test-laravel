@extends('layout')

@section('title')Календар@endsection

@section('heade_script')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
@endsection

@section('main_content')
    <!-- <h1>Календар</h1> -->
    <div class="container">
      <div id="calendar"></div>
    </div>
@endsection

@section('script_calendar')

<script type="text/javascript">
     
        $(document).ready(function () {

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#calendar').fullCalendar({
                monthNames: ['Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень'],
                monthNamesShort: ['Січ','Лют','Бер','Кв','Тр','Чер','Лип','Сер','Вер','Жов','Лис','Гр'],
                dayNames: ['Неділля','Понеділок','Вівторок','Середа','Четвер',"П'ятниця",'Субота'],
                dayNamesShort: ['Нд','Пн','Вт','Ср','Чт','Пт','Сб'],
                editable:true,
                header:{
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: 'calendar',
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt('Event Title: ');

                    if(title) {
                        var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
                        var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');
                        var description = title;
                        $.ajax({
                            url: "/calendar/action",
                            type: "POST",
                            data: {
                                title: title,
                                description: description,
                                start: start,
                                end: end,
                                type: 'add'
                            },
                            success: function(data) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Подію створено успішно");
                            }
                        })
                    }
                },
                editable: true,
                eventResize: function(event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                    var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                    var title = event.title;
                    var description = event.description;
                    var id = event.id;
                    $.ajax({
                        url: "/calendar/action",
                        type: "POST",
                        data: {
                            title: title,
                            description: description,
                            start: start,
                            end: end,
                            id: id,
                            type: 'update'
                        },
                        success: function(response) {
                            calendar.fullCalendar('refetchEvents');
                            alert("Подію оновлено успішно");
                        }
                    })
                },
                eventDrop: function(event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                    var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                    var title = event.title;
                    var description = event.description;
                    var id = event.id;
                    $.ajax({
                        url: "/calendar/action",
                        type: "POST",
                        data: {
                            title: title,
                            description: description,
                            start: start,
                            end: end,
                            id: id,
                            type: 'update'
                        },
                        success: function(response) {
                            calendar.fullCalendar('refetchEvents');
                            alert("Подію оновлено успішно");
                        }
                    })
                },
                eventClick: function(event) {
                    if(confirm("Ви впевнені що хочете видалити подію?")) {
                        var id = event.id;
                        $.ajax({
                            url: "/calendar/action",
                            type: "POST",
                            data: {
                                id: id,
                                type: "delete"
                            },
                            success: function(response) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Подію видалено успішно");
                            }
                        })
                    }
                }
            });

        });
    </script>

@endsection