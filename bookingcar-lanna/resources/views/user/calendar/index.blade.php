<style>
    #calendar {
        max-width: 100%;
        margin: 20px auto;
    }
</style>
<div class="container-fluid">
    <div id='calendar'></div>
</div>
<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.0.2/index.global.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        /* var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                start: 'dayGridMonth,timeGridWeek,timeGridDay',
                center: 'title',
                end: 'prevYear,prev,next,nextYear'
            },
        }); */
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'Asia/bangkok',
            locale: 'th',
            initialView: 'timeGridWeek',
            titleFormat: { // will produce something like "Tuesday, September 18, 2018"
                month: 'long',
                year: 'numeric',
                day: 'numeric',
                hour12: 'false',
                weekday: 'long'
            },
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: 'timeGridDay,timeGridWeek'
            },
            views: {
                timeGridFourDay: {
                    type: 'timeGrid',
                    duration: {
                        days: 7
                    },
                    buttonText: '7 day'
                }
            },
            /* events: 'https://fullcalendar.io/api/demo-feeds/events.json' */
        });
        calendar.render();
    });
</script>
