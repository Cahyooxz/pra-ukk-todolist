<div class="col-2 bg-primary min-vh-100 sidebar-rounded">
    <div class="d-flex justify-content-center px-2 mt-3">
        <div class="img mt-4">
            <img src="{{ asset('img/logo.svg') }}" alt="Sidebar Logo">
        </div>
    </div>
    <div class="px-3 mt-5">
        <div class="d-flex flex-column gap-2">
            <a href="{{ route('todolist.dashboard') }}" class="bg-white rounded text-decoration-none">
                <div class="d-flex align-items-center gap-3 text-primary p-2 fw-bold">
                    <i class="fa-solid fa-house-user"></i>
                    <p class="fs-7 p-0 m-0">Dashboard</p>
                </div>
            </a>
            <a href="{{ route('todolist.index') }}" class="bg-white rounded text-decoration-none">
                <div class="d-flex align-items-center gap-3 text-primary p-2 fw-bold">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <p class="fs-7 p-0 m-0">List Task</p>
                </div>
            </a>
            <a href="" class="bg-white rounded text-decoration-none">
                <div class="d-flex align-items-center gap-3 text-primary p-2 fw-bold">
                    <i class="fa-solid fa-calendar-days"></i>
                    <p class="fs-7 p-0 m-0">Calendar</p>
                </div>
            </a>
        </div>
    </div>
</div>  