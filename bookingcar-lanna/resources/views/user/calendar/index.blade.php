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
    /* document.addEventListener('DOMContentLoaded', function() {
        /* var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                start: 'dayGridMonth,timeGridWeek,timeGridDay',
                center: 'title',
                end: 'prevYear,prev,next,nextYear'
            },
        });
        var calendarEl = document.getElementById('calendar');
        var date = new Date();
        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'Asia/bangkok',
            locale: 'th',
            initialView: 'timeGridWeek',
            titleFormat: {
                month: 'long',
                year: 'numeric',
                day: 'numeric',
                weekday: 'long',
                hour12: 'false',
            },
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: 'timeGridDay timeGridWeek dayGridMonth'
            },

            /* validRange: function(nowDate) {
                return {
                    start: nowDate
                };
            }, */

    /* views: {
                timeGridFourDay: {
                    type: 'timeGrid',
                    duration: {
                        days: 7
                    },
                    buttonText: '7 day'
                }
            },
            //events: 'https://fullcalendar.io/api/demo-feeds/events.json'
        });
        calendar.render();
    }); */

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            selectable: true,

            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'timeGridDay timeGridWeek dayGridMonth'
            },

            dateClick: function(info) {
                alert('clicked ' + info.dateStr);
            },
            select: function(info) {
                alert('selected ' + info.startStr + ' to ' + info.endStr);
            }
        });

        calendar.render();
    });
</script>
