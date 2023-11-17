@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>All MCQ Set</h4>
    <div class="card">
    <h5 class="card-header">Available MCQ Set</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        <div class="table-responsive">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Exam Name</th>
                        <th>Slug</th>
                        <th>Course Name</th>
                        <th>Status</th>
                        <th>Add Mcq</th>
                        <th>Result</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $count = 1; @endphp
                    @foreach ($exams as $exam)
                    @php
                    $course_name= App\Models\Course::where('id', $exam->course_id)->value('course_name');
                    @endphp
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $exam->exam_name }}</td>
                        <td>{{ $exam->slug }}</td>
                        <td>
                            {{$course_name}}
                        </td>
                        <td>{{ $exam->status }}</td>
                        <td>
                            <a href="{{route('addmcq',[$exam->exam_id, $exam->slug])}}" class="btn btn-success">Add/View MCQ</a>
                        </td>
                        <td>
                        <a href="{{route('mcqresult',$exam->exam_id)}}" class="btn btn-info">View Result</a>
                        </td>
                        <td>
                            <a href="{{route('editexam',$exam->exam_id)}}" class="btn btn-primary mb-2">Edit</a>
                            <a href="{{route('deleteexam', $exam->exam_id)}}" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
</div>
@endsection