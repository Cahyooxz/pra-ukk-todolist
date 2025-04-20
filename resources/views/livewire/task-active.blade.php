<div>
    <div id="collapseActive" class="accordion-collapse collapse show" data-bs-parent="#taskAccordion">
        <div class="accordion-body p-0">
            <div class="d-flex justify-content-end mt-3 me-2 gap-2">
                <div class="col-2">
                    <select name="priority" id="priority" class="form-control" wire:model.live="priority">
                        <option value="">All Priorities</option>
                        <option value="0">Low</option>
                        <option value="1">Medium</option>
                        <option value="2">High</option>
                    </select>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" placeholder="Search tasks..." wire:model.live='search'>
                </div>
            </div>
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
                        <td>Judul Task</td>
                        <td>
                            <div class="low-alert">
                                <p class="p-0 m-0">Low</p>
                            </div>
                        </td>
                        <td class="text-center">{{ SiteHelpers::date_indo('2025-02-25') }}</td>
                        <td>
                            <div class="d-flex justify-content-end gap-2">
                                <div class="dropdown position-static">
                                    <button
                                        class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-2 py-1"
                                        type="button" data-bs-toggle="dropdown">
                                        <i class="fas fa-circle-notch pending"></i>
                                        <span style="padding: 0 10px">Pending</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a onclick="changeStatus(1,0)"
                                                class="dropdown-item d-flex align-items-center gap-2" href="#"
                                                data-status="pending">
                                                <i class="fas fa-circle-notch pending"></i>
                                                <span>Pending</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="changeStatus(1,1)"
                                                class="dropdown-item d-flex align-items-center gap-2" href="#"
                                                data-status="in-progress">
                                                <i class="fas fa-spinner in-progress"></i>
                                                <span>In Progress</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="changeStatus(1,2)"
                                                class="dropdown-item d-flex align-items-center gap-2" href="#"
                                                data-status="completed">
                                                <i class="fas fa-check-circle completed"></i>
                                                <span>Completed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn btn-warning text-white" style="font-size: small"
                                    href="{{ route('todolist.edit', 1) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-danger text-white" style="font-size: small"
                                    data-confirm-delete="true"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Judul Task</td>
                        <td>
                            <div class="low-alert">
                                <p class="p-0 m-0">Low</p>
                            </div>
                        </td>
                        <td class="text-center">{{ SiteHelpers::date_indo('2025-02-25') }}</td>
                        <td>
                            <div class="d-flex justify-content-end gap-2">
                                <div class="dropdown position-static">
                                    <button
                                        class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-2 py-1"
                                        type="button" data-bs-toggle="dropdown">
                                        <i class="fas fa-spinner in-progress"></i>
                                        <span>In Progress</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a onclick="changeStatus(1,0)"
                                                class="dropdown-item d-flex align-items-center gap-2" href="#"
                                                data-status="pending">
                                                <i class="fas fa-circle-notch pending"></i>
                                                <span>Pending</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="changeStatus(1,1)"
                                                class="dropdown-item d-flex align-items-center gap-2" href="#"
                                                data-status="in-progress">
                                                <i class="fas fa-spinner in-progress"></i>
                                                <span>In Progress</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="changeStatus(1,2)"
                                                class="dropdown-item d-flex align-items-center gap-2" href="#"
                                                data-status="completed">
                                                <i class="fas fa-check-circle completed"></i>
                                                <span>Completed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn btn-warning text-white" style="font-size: small"
                                    href="{{ route('todolist.edit', 1) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-danger text-white" style="font-size: small"
                                    data-confirm-delete="true"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Judul Task</td>
                        <td>
                            <div class="low-alert">
                                <p class="p-0 m-0">Low</p>
                            </div>
                        </td>
                        <td class="text-center">{{ SiteHelpers::date_indo('2025-02-25') }}</td>
                        <td>
                            <div class="d-flex justify-content-end gap-2">
                                <div class="dropdown position-static">
                                    <button
                                        class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-2 py-1"
                                        type="button" data-bs-toggle="dropdown">
                                        <i class="fas fa-check-circle completed"></i>
                                        <span>Completed</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a onclick="changeStatus(1,0)"
                                                class="dropdown-item d-flex align-items-center gap-2" href="#"
                                                data-status="pending">
                                                <i class="fas fa-circle-notch pending"></i>
                                                <span>Pending</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="changeStatus(1,1)"
                                                class="dropdown-item d-flex align-items-center gap-2" href="#"
                                                data-status="in-progress">
                                                <i class="fas fa-spinner in-progress"></i>
                                                <span>In Progress</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="changeStatus(1,2)"
                                                class="dropdown-item d-flex align-items-center gap-2" href="#"
                                                data-status="completed">
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
                    <tr>
                        <td colspan="4">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('img/empty_active.png') }}" alt=""
                                    style="width: 200px">
                                <p class="fw-bold d-inline" style="font-size: small">You don't have any tasks yet. Create one to get started!</p>
                            </div>
                        </td>
                    </tr>
                    <!-- Tambahkan lebih banyak task aktif di sini -->
                </tbody>
            </table>
            <div class="mt-3">
                $tasks->links()
            </div>
        </div>
    </div>
</div>
