@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Add MCQ</h4>
    <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add New Mcq Question</h5>
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
        <form action="{{ route('update.mcq') }}" method="POST">
          @csrf
          <input type="hidden" name="question_id" value="{{$question->question_id}}">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="question">Question Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="question" name="question" value="{{$question->question}}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="a">Option A</label>
            <div class="col-sm-10">
              <input type="hidden" name="answer_id[0]" value="{{$question['answers'][0]['answer_id']}}">
              <input type="text" class="form-control" id="a" name="answers[0]" value="{{$question['answers'][0]['answer']}}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="b">Option B</label>
            <div class="col-sm-10">
              <input type="hidden" name="answer_id[1]" value="{{$question['answers'][1]['answer_id']}}">
              <input type="text" class="form-control" id="b" name="answers[1]" value="{{$question['answers'][1]['answer']}}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="c">Option C</label>
            <div class="col-sm-10">
              <input type="hidden" name="answer_id[2]" value="{{$question['answers'][2]['answer_id']}}">
              <input type="text" class="form-control" id="c" name="answers[2]" value="{{$question['answers'][2]['answer']}}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="d">Option D</label>
            <div class="col-sm-10">
              <input type="hidden" name="answer_id[3]" value="{{$question['answers'][3]['answer_id']}}">
              <input type="text" class="form-control" id="d" name="answers[3]" value="{{$question['answers'][3]['answer']}}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="course">Correct Answer</label>
            <div class="col-sm-10">
              <select class="form-select" id="correct_ans" name="correct_ans" aria-label="Default select example">
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
              </select>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Update MCQ</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection