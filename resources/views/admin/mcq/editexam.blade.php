@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Edit Exam</h4>
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Exam</h5>
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
        <form action="{{ route('update.exam') }}" method="POST">
                @csrf
                <input type="hidden" name="exam_id" value="{{ $exam->exam_id }}">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="exam_name">Exam Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="exam_name" name="exam_name" value="{{ $exam->exam_name }}" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="slug">Slug</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $exam->slug }}" />
                  </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Exam</button>
                  </div>
                </div>
              </form>
      </div>
    </div>
  </div>
</div>
@endsection