@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Assignment</h4>

  <div class="col-xxl">
    <div class="card mb-4">
      <h5 class="card-header">All Assignment</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Assignment Name</th>
                        <th>Course ID</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($assignments as $assignment)
                    <tr>
                        <td>{{ $assignment->id }}</td>
                        <td>{{ $assignment->assignment_name }}</td>
                        <td>{{ $assignment->course_id }}</td>
                        <td>{{ $assignment->due_date }}</td>
                        <td>
                            {{ $assignment->status }}
                        </td>
                        <td>
                            <a href="{{route('edit.assignment',$assignment->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('del.assignment', $assignment->id)}}" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>
@endsection