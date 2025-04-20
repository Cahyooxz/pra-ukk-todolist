@extends('layouts.app', ['title' => 'Calendar'])
@section('content')
    <style>
        a {
            color: #111;
        }

        .fc .fc-daygrid-day-frame {
            border-radius: 12px !important;
        }

        .fc-daygrid-day-frame .fc-scrollgrid-sync-inner {
            border-radius: 12px !important
        }

        .fc-button-primary {
            background-color: #188adb !important;
            border: none !important;
        }

        .fc .fc-daygrid-day.fc-day-today {
            background-color: #d3edff48 !important;
        }

        .fc-timegrid-col.fc-day-today {
            background-color: #d3edff48 !important;
        }
    </style>
    </style>
    <div id="loading"
        style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(255,255,255,0.7); z-index:1050;">
        <div class="d-flex justify-content-center align-items-center h-100 w-100">
            <div class="spinner-border text-primary" role="status">
            </div>
        </div>
    </div>
    <div id="calendar"></div>
    <div class="modal fade" id="eventDetailModal" tabindex="-1" role="dialog" aria-labelledby="eventDetailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header nav-custom d-flex align-items-center pb-3 bg-danger"
                    style="color: #fff !important">
                    <h5 class="modal-title" id="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex gap-2 align-items-center justify-content-end text-muted">
                        {{-- <i class="fa-regular fa-calendar-days"></i>
                        <div class="fw-bold" id="eventDeadline"></div> --}}
                    </div>
                    <div class="mt-2" id="eventDescription"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <strong>Information:</strong>
        <div class="d-flex flex-column mt-2">
            <div class="d-flex align-items-center me-3">
                <span class="low-alert d-inline-block rounded-2" style="width: 40px; height: 18px;"></span>
                <span class="ms-2">Low</span>
            </div>
            <div class="d-flex align-items-center me-3">
                <span class="normal-alert d-inline-block rounded-2" style="width: 40px; height: 18px;"></span>
                <span class="ms-2">Normal</span>
            </div>
            <div class="d-flex align-items-center me-3">
                <span class="high-alert d-inline-block rounded-2" style="width: 40px; height: 18px;"></span>
                <span class="ms-2">High</span>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                // timeZone: 'Asia/Jakarta',
                // locale: 'id',
                headerToolbar: {
                    left: 'today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth prev,next'
                },
                // buttonText: {
                //     today: 'Hari ini',
                //     month: 'Bulan',
                //     week: 'Minggu',
                //     day: 'Hari',
                //     list: 'Agenda',
                // },
                // weekText: "Mg",
                // allDayText: "Sehari penuh",
                // moreLinkText: "lebih",
                // noEventsText: "Tidak ada kegiatan untuk ditampilkan",
                initialView: 'dayGridMonth',
                events: [{
                        id: 1,
                        title: 'Ngerjain Matematika',
                        start: '2025-04-19T09:00',
                        className: [
                            1 == 3 ? 'high-alert text-white cursor-pointer mb-1' :
                            (1 == 2 ? 'normal-alert text-white cursor-pointer mb-1' :
                                (1 == 1 ? 'low-alert text-white cursor-pointer mb-1' : ''))
                        ],
                    },
                    {
                        id: 2,
                        title: 'Ngerjain Matematika',
                        start: '2025-04-19T09:00',
                        className: [
                            2 == 3 ? 'high-alert text-white cursor-pointer mb-1' :
                            (2 == 2 ? 'normal-alert text-white cursor-pointer mb-1' :
                                (2 == 1 ? 'low-alert text-white cursor-pointer mb-1' : ''))
                        ],
                    },
                    {
                        id: 3,
                        title: 'Ngerjain Matematika',
                        start: '2025-04-19T09:00',
                        className: [
                            3 == 3 ? 'high-alert text-white cursor-pointer mb-1' :
                            (3 == 2 ? 'normal-alert text-white cursor-pointer mb-1' :
                                (3 == 1 ? 'low-alert text-white cursor-pointer mb-1' : ''))
                        ],
                    },
                ],
                navLinks: true,
                selectable: true,
                eventClick: function(info) {
                    var kegiatan = info.event;
                    var id = kegiatan.id;
                    var title = kegiatan.title;
                    var url = 'calendar/modal';
                    detailTodo(id, title, url);
                }
            });
            calendar.render();
        });
    </script>
    <script>
        function detailTodo(id, title, url) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                data: {
                    'id': id,
                },
                type: 'get',
                beforeSend: function() {
                    $("#loading").show();
                },
                success: function(result) {
                    $('#eventDetailModal').modal('show');
                    $('#eventDetailModal').appendTo("body");
                    $("#modal-title").html(result.title);
                    $("#eventDescription").html(result.description);
                },
                complete: function() {
                    $("#loading").hide();
                }
            });
        }
    </script>
@endpush
