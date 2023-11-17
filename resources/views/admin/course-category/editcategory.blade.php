@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Edit Course Category</h4>

  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <!-- Category Add -->
        <h5 class="mb-0">Edit Categoy</h5>
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
        <form action="{{ route('update.category') }}" method="POST">
          @csrf
          <input type="hidden" name="category_id" value="{{ $category->id }}">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="category_name">Category Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $category->category_name }}" />
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Update Category</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection