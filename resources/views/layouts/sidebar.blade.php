<div class="d-none d-sm-block col-sm-2 min-vh-100 sidebar-rounded position-fixed" style="background-color: rgb(132, 196, 242)!important;">
    <div class="d-flex justify-content-center px-2 mt-3">
        <div class="img mt-4">
            <img src="{{ asset('img/logo.png') }}" alt="Sidebar Logo" style="width: 80px;height:80px">
        </div>
    </div>
    <div class="px-3 mt-5">
        <div class="d-flex flex-column gap-2">
            <a href="{{ route('todolist.dashboard') }}" class="{{ Request::segment('1') == '' ? 'bg-primary text-white' : 'bg-white text-primary' }} rounded text-decoration-none">
                <div class="d-flex align-items-center gap-3 p-2 fw-bold">
                    <i class="fa-solid fa-house-user"></i>
                    <p class="fs-7 p-0 m-0">Dashboard</p>
                </div>
            </a>
            <a href="{{ route('todolist.index') }}" class="{{ Request::segment('1') == 'todolist' ? 'bg-primary text-white' : 'bg-white text-primary' }} rounded text-decoration-none">
                <div class="d-flex align-items-center gap-3 p-2 fw-bold">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <p class="fs-7 p-0 m-0">List Task</p>
                </div>
            </a>
            <a href="{{ route('calendar.index') }}" class="{{ Request::segment('1') == 'calendar' ? 'bg-primary text-white' : 'bg-white text-primary' }} rounded text-decoration-none">
                <div class="d-flex align-items-center gap-3 p-2 fw-bold">
                    <i class="fa-solid fa-calendar-days"></i>
                    <p class="fs-7 p-0 m-0">Calendar</p>
                </div>
            </a>
        </div>
    </div>
</div>  