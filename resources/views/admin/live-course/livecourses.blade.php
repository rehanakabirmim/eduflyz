@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>All Live Course</h4>
    <div class="card">
        <h5 class="card-header">Live Courses</h5>
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
                        <th>Course Name</th>
                        <th>Category Name</th>
                        <th>Teacher Name</th>
                        <th>Course Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $count = 1; @endphp
                    @foreach ($courses as $course)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->category_name }}</td>
                        <td>
                            {{ $course->teacher_name }}
                        </td>
                        <td>
                            <img src="{{asset($course->course_img)}}" style="height: 100px;" alt=""></br>
                            <a href="{{route('editcourse.image',$course->id)}}" class="btn text-success">Change Image</a>
                        </td>
                        <td>
                            <a href="{{route('editcourse',$course->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('deletecourse', $course->id)}}" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
</div>
@endsection