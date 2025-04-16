@extends('layouts.app', ['title' => 'Task'])
@section('content')
<div class="table-responsive">
  <table class="table table-bordered rounded">
    <thead>
      <th>No.</th>
      <th>Task</th>
      <th>Priority</th>
      <th>Deadline</th>
      <th>Status</th>
    </thead>
    <tbody>
      <td>1.</td>
      <td>Judul Task</td>
      <td>
        <div class="rounded bg-danger">
          <p>Low</p>
        </div>
      </td>
      <td></td>
    </tbody>
  </table>
</div>
@endsection