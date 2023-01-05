<style>
    #calendar {
        max-width: 100%;
        margin: 20px auto;
    }
</style>
<!-- Modal -->
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
            allDaySlot: false,
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
                var booking_start = info.startStr;
                var booking_end = info.endStr;
                $('#bookingModal').modal('toggle');
                document.getElementById('booking_start').innerHTML = booking_start;
                document.getElementById('booking_end').innerHTML = booking_end;
                var ty_car1 = document.getElementById('type_car1');
                var driver_book = document.getElementById('driver_book');

                /* if (ty_car1.checked == true) {
                    console.log(ty_car1.value);
                    fill_driver.style.display = "none";
                } */
                $('#type_car1').click(function() {
                    var fill_driver = document.getElementById('fill_driver');
                    fill_driver.style.display = "none";
                });
                $('#type_car2').click(function() {
                    var fill_driver = document.getElementById('fill_driver');
                    fill_driver.style.display = "";
                });
                $('#saveBooking').click(function() {
                    var booking_start = info.startStr;
                    var booking_end = info.endStr;
                    var name = $('#name').val();
                    var type_car = "";
                    if (ty_car1.checked == true) {
                        type_car = ty_car1.value;
                    } else {
                        type_car = $('#type_car2').val();
                    }
                    console.log(type_car);
                });
                /* Swal.fire({
                    icon: 'question',
                    text: 'selected ' + info.startStr + ' to ' + info.endStr
                }); */
            }
        });

        calendar.render();
    });
</script>

<div class="modal fade" id="bookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="bookingModalLabel">กรอกรายละเอียดการจองรถ</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">วันเดินทางไป</label>
                        <label class="form-control-plaintext" id="booking_start" name="booking_start"></label>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">วันเดินทางกลับ</label>
                        <label class="form-control-plaintext" id="booking_end" name="booking_end"></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="ชื่อผู้จอง">
                    </div>
                    <div class=" col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type_car" id="type_car1"
                                value="2">
                            <label class="form-check-label" for="type_car1">รถภายนอกบริษัท</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type_car" id="type_car2"
                                value="1">
                            <label class="form-check-label" for="type_car2">รถภายในบริษัท</label>
                        </div>
                    </div>
                    <div class="col-md-6" id="fill_driver">
                        <select class="form-select" name="driver_book" id="driver_book"
                            aria-label="Default select example">
                            <option selected>--เลือกคนขับรถ--</option>
                            <option value="1">One</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" name="booking_carid" id="booking_carid"
                            aria-label="Default select example">
                            <option selected>--เลือกรถที่ใช้ในการเดินทาง--</option>
                            <option value="1">One</option>
                        </select>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                <button type="button" name="saveBooking" id="saveBooking" class="btn btn-primary">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <br />
    <h3 style="font-size: 30px" class="fw-bold" align="center">
        เลือกวันเวลาที่ต้องการทำการจอง
    </h3>
    <br />
    <div id='calendar'></div>
</div>
