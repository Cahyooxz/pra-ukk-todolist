<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todolist</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/css/style.css'])
    <div class="container-fluid">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-10">
                <div class="d-flex justify-content-between mt-4">
                    <small style="font-size: x-small" class="fw-bold" id="waktu">
                    </small>
                </div>
                <p class="fw-bold title mt-3">{{ $title }}</p>
                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            const optionsDate = {
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric'
            };
            const optionsTime = {
                hour: '2-digit', 
                minute: '2-digit'
            };
            
            // Ambil waktu lokal dari perangkat
            const currentDate = new Date();
            
            // Format tanggal
            const formattedDate = currentDate.toLocaleDateString('id-ID', optionsDate);
            
            // Format waktu
            const formattedTime = currentDate.toLocaleTimeString('id-ID', optionsTime).slice(0, 5);  // Mengambil hanya jam dan menit
            
            // Gabungkan tanggal dan waktu dengan pemisah '|'
            const finalDateTime = `${formattedDate} | ${formattedTime}`;
            
            // Set waktu dinamis ke elemen dengan id 'dynamic-time'
            document.getElementById('waktu').innerHTML = finalDateTime;
        };
    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
@include('sweetalert::alert')
</html>