@extends('teacher.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Dashboard</h4>
    <div class="card">
        <h5 class="card-header">Welcome to Teacher Dashboard!</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif  
    </div>
</div>
@endsection