@extends('layouts.app', ['title' => 'Create Task'])
@section('content')
    <form action="" novalidate>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="title" class="mb-2 fw-bold" style="font-size: small">Task Title</label>
                    <input type="text" name="title" id="title" class="form-control required"
                        placeholder="Enter task title" required value="{{ old('title') }}">
                    <div class="invalid-feedback">
                        Task title is required
                    </div>
                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="form-group">
                    <label for="description" class="mb-2 fw-bold" style="font-size: small">Task Description</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Enter task description here" required>{{ old('description') }}</textarea>
                    <div class="invalid-feedback">
                        Task description is required
                    </div>
                </div>
            </div>
            <div class="col-6 mt-2">
                <div class="form-group">
                    <label for="deadline" class="mb-2 fw-bold" style="font-size: small">Deadline</label>
                    <input name="deadline" type="datetime-local" id="deadline" class="form-control"
                        placeholder="Select deadline date" value="{{ old('deadline') }}" required>
                    <div class="invalid-feedback">
                        Deadline is required
                    </div>
                </div>
            </div>
            <div class="col-6 mt-2">
                <div class="form-group">
                    <label for="priority" class="mb-2 fw-bold" style="font-size: small">Task Priority</label>
                    <select name="priority" id="priority" class="form-select py-2" required>
                        <option value="">Select task priority</option>
                        <option value="0">Low</option>
                        <option value="1">Normal</option>
                        <option value="2">High</option>
                    </select>
                    <div class="invalid-feedback">
                        Task priority is required
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-4 p-0">
                <div class="col-12 d-flex justify-content-end gap-2 p-0">
                    <a href="{{ route('todolist.index') }}" class="btn rounded2 fw-semibold py-2 btn-blue" tabindex="-1"
                        role="button" aria-disabled="true">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-arrow-turn-down fa-rotate-90 fs-6 me-2 flex-shrink-0"></i>
                            <span>Close</span>
                        </div>
                    </a>
                    <button class="btn rounded2 fw-semibold py-2 btn-success" type="submit"><i
                            class="fa-solid fa-floppy-disk fs-6 me-2"></i>Save</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            // Dapatkan semua input yang required
            const requiredInputs = document.querySelectorAll(
                'input[required], textarea[required], select[required]');
            let isValid = true;
            let firstInvalidElement = null;

            // Reset semua validasi terlebih dahulu
            requiredInputs.forEach(input => {
                input.classList.remove('is-invalid');
            });

            // Validasi setiap input
            requiredInputs.forEach(input => {
                let isInputValid = true;

                if (input.type === 'checkbox' || input.type === 'radio') {
                    // Validasi khusus untuk checkbox/radio
                    const checked = document.querySelector(`input[name="${input.name}"]:checked`);
                    isInputValid = !!checked;
                } else if (input.tagName === 'SELECT') {
                    // Validasi untuk select - pastikan ada value yang dipilih
                    isInputValid = input.value !== "";
                } else {
                    // Validasi untuk input/textarea biasa
                    isInputValid = input.value.trim() !== "";
                }

                // Jika tidak valid, tandai dan catat elemen pertama yang invalid
                if (!isInputValid) {
                    isValid = false;
                    input.classList.add('is-invalid');
                    if (!firstInvalidElement) {
                        firstInvalidElement = input;
                    }
                }
            });

            // Jika tidak valid, hentikan submit
            if (!isValid) {
                e.preventDefault();
                e.stopPropagation();
                if (firstInvalidElement) {
                    firstInvalidElement.focus();
                }
            }
        });

        // Validasi real-time saat user mengisi
        document.querySelectorAll('input, textarea, select').forEach(input => {
            // Handler untuk input/change
            const handleValidation = () => {
                if ((input.tagName === 'SELECT' || input.type === 'date') ?
                    input.value !== "" :
                    input.value.trim() !== "") {
                    input.classList.remove('is-invalid');
                }
            };

            // Pasang event listener berdasarkan jenis input
            if (input.tagName === 'SELECT' || input.type === 'date') {
                input.addEventListener('change', handleValidation);
            } else {
                input.addEventListener('input', handleValidation);
            }
        });
    </script>
@endpush
