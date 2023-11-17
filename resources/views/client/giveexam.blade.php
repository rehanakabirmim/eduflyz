@extends('client.layout.template-2')
@section('content')
<div class="container">
<h1 class="text-center py-5">{{$exam->exam_name}}</h1>
<div class="py-5">
    <form action="{{route('submit.exam')}}" method="post" class="mb-5">
        @csrf
        <input type="hidden" name="exam_id" value="{{$exam->exam_id}}">
        @php $qcount = 0; @endphp
        @foreach ($questions as $question)
        <div class="mb-5">
            <h3>Q{{$qcount+1}}. {{ $question->question }}</h3>
            <input type="hidden" name="q[]" value="{{ $question->question_id }}">
            <!-- <input type="hidden" name="{{'ans_'.$qcount}}" id="{{'ans_'.$qcount}}"> -->
                @for($i = 0; $i< 4; $i++)
                <p>
                    <input type="radio" name="{{'ans_'.$qcount}}"  class="select_ans" 
                    value="{{ $question['answers'][$i]['answer_id'] }}" required>
                    {{$question['answers'][$i]['answer']}}
                </p>
                @endfor
        </div>
        @php $qcount++; @endphp
        @endforeach
        <input type="hidden" name="total_question" value="{{$qcount}}">
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

</div>


@endsection