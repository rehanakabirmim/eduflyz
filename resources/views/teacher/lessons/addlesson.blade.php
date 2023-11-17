@extends('teacher.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Lesson</h4>

  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add New Lesson</h5>
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
        <form action="{{ route('tr.store.lesson') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="lesson_name">Lesson Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="lesson_name" name="lesson_name" placeholder="Web Development" />
            </div>
          </div>
          <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="course">Select Course</label>
                <div class="col-sm-10">
                    <select class="form-select" id="course_id" name="course_id" aria-label="Default select example">
                        <!-- <option selected>Category Name</option> -->
                        @foreach ($courses as $course)
                        <option value="{{$course->id}}">{{$course->course_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="slug">Slug</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="slug" name="slug" placeholder="web development" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="lesson_img">Upload Lesson Image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="lesson_img" name="lesson_img" />
                </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="lesson_link">Lesson Link</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="lesson_link" name="lesson_link" placeholder="web development" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="lesson_duration">Lesson Duration</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="lesson_duration" name="lesson_duration" placeholder="web development" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="lesson_serial">Lesson Serial</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="lesson_serial" name="lesson_serial" placeholder="web development" />
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Add Lesson</button>
            </div>
          </div>
        </form>
      </div>

     
    </div>
  </div>
</div>
@endsection