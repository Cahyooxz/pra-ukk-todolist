@extends('layouts.app', ['title' => 'Task'])
@section('content')
    <div class="min-vh-50">
        <div class="d-flex justify-content-end mb-2">
            <a href="{{ route('todolist.create') }}" class="btn rounded2 py-1 btn-success fw-semibold" type="submit">
                <i class="fa-solid fa-plus me-1"></i>Create Task
            </a>
        </div>
        <div class="accordion" id="taskAccordion">
            <!-- Active Tasks Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseActive" aria-expanded="true" aria-controls="collapseActive">
                        Active Task <span class="bg-number-task rounded-circle ms-2"><small>5</small></span>
                    </button>
                </h2>
                @livewire('task-active')
            </div>
            <!-- Overdue Tasks Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOverdue" aria-expanded="false" aria-controls="collapseOverdue">
                        Overdue <span class="bg-number-task rounded-circle ms-2"><small>5</small></span>
                    </button>
                </h2>
                <div id="collapseOverdue" class="accordion-collapse collapse" data-bs-parent="#taskAccordion">
                    <div class="accordion-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="40%">Task</th>
                                    <th width="8%" class="text-muted fw-semibold">Priority</th>
                                    <th width="30%" class="text-muted fw-semibold text-center">Deadline</th>
                                    <th width="10%" class="text-muted fw-semibold text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Task Terlambat 1</td>
                                    <td>
                                        <div class="high-alert">
                                            <p class="p-0 m-0">High</p>
                                        </div>
                                    </td>
                                    <td class="text-center text-danger">{{ SiteHelpers::date_indo('2025-05-02') }}
                                        (5 days late)</td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <div class="dropdown position-static">
                                                <button
                                                    class="btn btn-sm btn-outline-danger dropdown-toggle d-flex align-items-center gap-2"
                                                    type="button" data-bs-toggle="dropdown">
                                                    <i class="fas fa-exclamation-circle overdue"></i>
                                                    <span>Overdue</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a onclick="changeStatus(1, 0)"
                                                            class="dropdown-item d-flex align-items-center gap-2"
                                                            href="#" data-status="pending">
                                                            <i class="fas fa-circle-notch pending"></i>
                                                            <span>Pending</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a onclick="changeStatus(1, 1)"
                                                            class="dropdown-item d-flex align-items-center gap-2"
                                                            href="#" data-status="in-progress">
                                                            <i class="fas fa-spinner in-progress"></i>
                                                            <span>In Progress</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a onclick="changeStatus(1, 2)"
                                                            class="dropdown-item d-flex align-items-center gap-2"
                                                            href="#" data-status="completed">
                                                            <i class="fas fa-check-circle completed"></i>
                                                            <span>Completed</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-warning text-white" style="font-size: small"
                                                href="{{ route('todolist.edit', 1) }}"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a class="btn btn-danger text-white" style="font-size: small"
                                                data-confirm-delete="true"><i class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Tambahkan lebih banyak task overdue di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Completed Tasks Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseCompleted" aria-expanded="false" aria-controls="collapseCompleted">
                        Completed <span class="bg-number-task rounded-circle ms-2"><small>3</small></span>
                    </button>
                </h2>
                <div id="collapseCompleted" class="accordion-collapse collapse" data-bs-parent="#taskAccordion">
                    <div class="accordion-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="40%">Task</th>
                                    <th width="8%" class="text-muted fw-semibold">Priority</th>
                                    <th width="30%" class="text-muted fw-semibold text-center">Completed Date</th>
                                    <th width="10%" class="text-muted fw-semibold text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Task Selesai 1</td>
                                    <td>
                                        <div class="normal-alert">
                                            <p class="p-0 m-0">Normal</p>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ SiteHelpers::date_indo('2025-02-02') }}</td>
                                    <td class="text-center">
                                        <span class="badge bg-success">
                                            <i class="fas fa-check-circle me-1"></i> Completed
                                        </span>
                                    </td>
                                </tr>
                                <!-- Tambahkan lebih banyak task selesai di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="statusModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('todolist.index') }}" method="post">
                        <input type="hidden" id="task_id" name="task_id">
                        <input type="hidden" id="status_code" name="status_code">
                        <div class="modal-body">
                            <p>Are you sure you want to change the status to <span id="selectedStatus"></span>?</p>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <div class="col-12 d-flex justify-content-end gap-2 p-0">
                            <button class="btn rounded2 fw-semibold py-2 btn-blue" data-bs-dismiss="modal" role="button"
                                aria-disabled="true">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-arrow-turn-down fa-rotate-90 fs-6 me-2 flex-shrink-0"></i>
                                    <span>Cancel</span>
                                </div>
                            </button>
                            <button class="btn rounded2 fw-semibold py-2 btn-success" type="submit"><i
                                    class="fa-solid fa-floppy-disk fs-6 me-2"></i>Yes, Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        .pending {
            color: #ffc107;
        }

        .in-progress {
            color: #0d6efd;
        }

        .completed {
            color: #198754;
        }

        .overdue {
            color: #dc3545;
        }
    </style>
@endpush
@push('scripts')
    <script>
        function changeStatus(id, status) {
            $("#statusModal").appendTo("body").modal('show');
            $("#task_id").val(id);
            $("#status_code").val(status);
            var status_name = '';
            switch (status) {
                case 0:
                    status_name = "Pending"
                    break;
                case 1:
                    status_name = "In Progres"
                    break;
                case 2:
                    status_name = "Completed"
                    break;
            }
            $('#selectedStatus').html(status_name)
        }
    </script>
@endpush
