<style>
    #calendar {
        max-width: 100%;
        margin: 20px auto;
    }
</style>
<div class="container-fluid">
    <br />
    <h3 style="font-size: 30px" class="fw-bold" align="center">
        เลือกวันเวลาที่ต้องการทำการจอง
    </h3>
    <br />
    <div id='calendar'></div>
</div>
<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.0.2/index.global.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            selectable: true,
            timeZone: 'Asia/bangkok',
            locale: 'th',
            initialView: 'timeGridWeek',
            titleFormat: {
                month: 'long',
                year: 'numeric',
                day: 'numeric',
                weekday: 'long',
                hour12: 'false',
                css: 'font-size:20px'
            },
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: 'timeGridDay timeGridWeek dayGridMonth'
            },

            validRange: function(nowDate) {
                return {
                    start: nowDate
                };
            },

            dateClick: function(info) {
                Swal.fire({
                    icon: 'question',
                    text: 'clicked ' + info.dateStr
                });
            },
            select: function(info) {
                Swal.fire({
                    icon:'question',
                    text:'selected ' + info.startStr + ' to ' + info.endStr
                });
            }
        });

        calendar.render();
    });
</script>
