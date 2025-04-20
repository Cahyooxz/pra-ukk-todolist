<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todolist | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    @vite(['resources/css/app.css', 'public/css/style.css'])
</head>

<body>
    <div class="container-fluid bg-body-secondary">
        <div class="row">
            <div class="d-none d-sm-block col-sm-2 min-vh-100">
            </div>
            @include('layouts.sidebar')
            <div class="col-sm-12 min-vh-100 col-md-10">
                <div class="card border-0 shadow-sm mt-4 px-3">
                    <div class="d-flex justify-content-between mt-3">
                        <small style="font-size: x-small" class="fw-bold" id="waktu">
                        </small>
                    </div>
                    <p class="fw-bold title mt-2">{{ $title }}</p>
                </div>
                <div class="card border-0 shadow-sm mt-3 min-vh-50 mb-5">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const formatTanggal = (date) => {
            const hari = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const bulan = ['January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ];

            return `${hari[date.getDay()]}, ${date.getDate()} ${bulan[date.getMonth()]} ${date.getFullYear()}`;
        };

        const formatWaktu = (date) => {
            const jam = date.getHours().toString().padStart(2, '0');
            const menit = date.getMinutes().toString().padStart(2, '0');

            return `${jam}:${menit}`;
        };

        const updateWaktu = () => {
            const sekarang = new Date();
            const waktuElement = document.getElementById('waktu');

            waktuElement.innerHTML = `${formatTanggal(sekarang)} | ${formatWaktu(sekarang)}`;

            requestAnimationFrame(updateWaktu);
        };
        document.addEventListener('DOMContentLoaded', () => {
            updateWaktu();
        });
    </script>
    @vite(['resources/js/app.js'])
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/dist/index.global.js') }}"></script>
    {{-- <script src="{{ asset('fullcalendar/packages/bootstrap5/index.global.js') }}"></script> --}}
    @stack('scripts')
    @include('sweetalert::alert')
</body>

</html>
