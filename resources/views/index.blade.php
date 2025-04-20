@extends('layouts.app', ['title' => 'Dashboard'])
@section('content')
<div class="container-fluid bg-hi rounded-2">
    <div class="row">
        <div class="col-9">
            <div class="d-flex flex-column py-3">
                <p class="fw-bold text-white">Hi👋</p>
                <p class="fw-bold text-white">What activities did you do today?</p>
            </div>
        </div>
        <div class="col-3 d-flex justify-content-center">
            <img class="w-50" src="{{ asset('img/todo.png') }}" alt="">
        </div>
    </div>
</div>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 col-sm-3 ps-0 rounded-2">
            <div class="rounded-2 bg-done position-relative">
                <i class="fa-solid fa-circle-check text-white position-absolute" style="font-size: 70px;bottom:20px;left:8px"></i>
                <div class="d-flex flex-column py-3 px-2 ms-5 ps-5">
                    <p class="fw-bold text-white">3</p>
                    <p class="fw-bold text-white">Done</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-3 ps-0 rounded-2">
            <div class="rounded-2 bg-progress position-relative">
                <i class="fa-solid fa-spinner text-white position-absolute" style="font-size: 70px;bottom:20px;left:8px"></i>
                <div class="d-flex flex-column py-3 px-2 ms-5 ps-5">
                    <p class="fw-bold text-white">3</p>
                    <p class="fw-bold text-white">In Progress</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-3 ps-0 rounded-2">
            <div class="rounded-2 bg-pending position-relative">
                <i class="fa-solid fa-clock-rotate-left text-white position-absolute" style="font-size: 70px;bottom:20px;left:8px"></i>
                <div class="d-flex flex-column py-3 px-2 ms-5 ps-5">
                    <p class="fw-bold text-white">3</p>
                    <p class="fw-bold text-white">Pending</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-3 ps-0 pe-0 rounded-2">
            <div class="rounded-2 bg-overdue position-relative">
                <i class="fa-solid fa-hourglass text-white position-absolute" style="font-size: 70px;bottom:20px;left:8px"></i>
                <div class="d-flex flex-column py-3 px-2 ms-5 ps-5">
                    <p class="fw-bold text-white">3</p>
                    <p class="fw-bold text-white">Overdue</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection