@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>MCQ Result</h4>
    <div class="card">
    <h5 class="card-header">Available Result</h5>
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
                        <th>Total Question</th>
                        <th>Correct Ans</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $count=1; @endphp
                    @foreach ($mcq_results as $mcq_result)
                    @if(count($mcq_results) <= 0 )
                    <tr><td>Sorry No Result Yet!</td></tr>
                    @else
                    @php 
                        $student_name = App\Models\User::where('id', $mcq_result->user_id)->value('name');
                    @endphp
                    
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $student_name }}</td>
                        <td>{{ $mcq_result->total_question }}</td>
                        <td>
                            {{ $mcq_result->correct_ans }}
                        </td>
                        <td>{{ $mcq_result->score }}%</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
</div>
@endsection