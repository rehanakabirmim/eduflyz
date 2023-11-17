@extends('teacher.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Submitted Assignment</h4>
    <div class="card">
    <h5 class="card-header">Available Assignment</h5>
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
                        <th>Student Name</th>
                        <th>Submitted File</th>
                        <th>Submission Time</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $count=1; @endphp
                    @foreach ($assignments as $assignment)
                    @if(count($assignments) <= 0 )
                    <tr><td>Sorry No Result Yet!</td></tr>
                    @else
                    @php 
                        $student_name = App\Models\User::where('id', $assignment->user_id)->value('name');
                    @endphp
                    
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $student_name }}</td>
                        <td><a href="{{ asset($assignment->submitted_file) }}" target="_blank">Download</a></td>
                        <td>{{ $assignment->created_at }}</td>
                        
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
</div>
@endsection