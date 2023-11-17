@extends('teacher.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>All Lesson</h4>
    <div class="card">
        <h5 class="card-header">Available Lesson Information</h5>
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
                        <th>Lesson Name</th>
                        <th>Course Name</th>
                        <th>Lesson Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $count=1; @endphp
                    @foreach ($courses as $course)
                    @php
                    $course_id = $course->id;
                    $lessons = App\Models\Lesson::where('course_id', $course_id)->latest()->get();
                    @endphp
                    @foreach($lessons as $lesson)
                    @if(count($lessons) <= 0 )
                    <tr><td>Sorry You have No Lessons!</td></tr>
                    @else
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $lesson->lesson_name }}</td>
                        <td>{{ $lesson->course_name }}</td>
                        <td>
                            <img src="{{asset($lesson->lesson_img)}}" style="height: 75px;" alt=""></br>
                            <a href="{{route('tr.editlesson.image',$lesson->id)}}" class="btn text-success" >Change Image</a>
                        </td>
                        <td>
                            <a href="{{route('tr.editlesson',$lesson->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('tr.deletelesson', $lesson->id)}}" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    
                    @endforeach
                    
                </tbody>
            </table>
        </div>   
    </div>
</div>
@endsection