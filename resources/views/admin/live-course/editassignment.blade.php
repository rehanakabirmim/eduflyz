@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Edit Assignment</h4>

  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Assignment</h5>
        <small class="text-muted float-end">Input Details</small>
      </div>
      <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="{{ route('update.assignment') }}" method="POST">
          @csrf
          <input type="hidden" name="assignment_id" value="{{$assignment->id}}">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="assignment_name">Assignment Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="assignment_name" name="assignment_name" value="{{$assignment->assignment_name}}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="course">Select Course</label>
              <div class="col-sm-10">
                <select class="form-select" id="course_id" name="course_id" aria-label="Default select example">
                    @foreach ($courses as $course)
                    <option value="{{$course->id}}">{{$course->course_name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="due_date">Due Date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="due_date" name="due_date" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="status">Status</label>
            <div class="col-sm-10">
            <select class="form-select" id="status" name="status" aria-label="Default select example">
                <option selected value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Update Assignment</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection