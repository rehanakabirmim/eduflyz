@extends('client.layout.template-2')
@section('content')
<div class="container">
    <h1 class="text-center mb-5">Your Result</h1>
    <h3 class="mb-5">You have given {{ $attempt->correct_ans }} correct answer of {{ $attempt->total_question }} questions!</h3>
    <h3 class="mb-5">Your Score: {{ $attempt->score }}%</h3>
</div>
@endsection