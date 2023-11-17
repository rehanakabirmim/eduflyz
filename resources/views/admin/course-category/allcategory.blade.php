@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Course Category</h4>

  <div class="col-xxl">
    <div class="card mb-4">
      <h5 class="card-header">Available Category Information</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th>Course Count</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $count = 1; @endphp
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            {{ $category->course_count }}
                        </td>
                        <td>
                            <a href="{{route('editcourse.category',$category->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('delcourse.category', $category->id)}}" class="btn btn-warning">Delete</a>
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