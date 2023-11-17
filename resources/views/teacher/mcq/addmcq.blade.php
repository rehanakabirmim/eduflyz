@extends('teacher.layout.template')
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
        <form action="{{ route('tr.store.mcq') }}" method="POST">
          @csrf
          <input type="hidden" name="exam_id" value="{{$exam->exam_id}}">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="question">Question Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="question" name="question" placeholder="What is Web Development?" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="a">Option A</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="a" name="answers[0]" placeholder="Option" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="b">Option B</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="b" name="answers[1]" placeholder="Option" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="c">Option C</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="c" name="answers[2]" placeholder="Option" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="d">Option D</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="d" name="answers[3]" placeholder="Option" />
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
              <button type="submit" class="btn btn-primary">Add MCQ</button>
            </div>
          </div>
        </form>
      </div>

      <h5 class="card-header">MCQ List</h5>
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
                        <th>Question Name</th>
                        <th>Options</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @php $count = 1; @endphp
                    @foreach ($questions as $question)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $question->question }}</td>
                        <td>
                          @for($i = 0; $i< 4; $i++)
                          <li>
                            {{$question['answers'][$i]['answer']}}
                            @if( $question['answers'][$i]['is_correct'] == 1)
                            ✅
                            @endif
                          </li>
                          @endfor
                        </td>
                        <td>
                          <a href="{{route('tr.editmcq',$question->question_id)}}" class="btn btn-primary mb-2">Edit</a> </br>
                          <a href="{{route('tr.deletemcq', $question->question_id)}}" class="btn btn-warning">Delete</a>
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