@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Create Certificate</h4>

  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Create New Certificate</h5>
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


        @if(Session::has('notification'))
            <div class="alert alert-danger alert_danger" role="alert">
            <strong>Opps!</strong> {{Session::get('notification')}}
            </div>
        @endif

        <form action="{{ route('store.certificate') }}" method="POST">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="certificate_name">Certificate Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="certificate_name" name="certificate_name" placeholder="Certificate_name Name" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="course">Select Course</label>
              <div class="col-sm-10">
                <select class="form-select" id="course_id" name="course_id" aria-label="Default select example">
                    <!-- <option selected>Category Name</option> -->
                    @foreach ($courses as $course)
                    <option value="{{$course->id}}">{{$course->course_name}}</option>
                    @endforeach
                </select>
              </div>
            </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="user_name">Select Student</label>
              <div class="col-sm-10">
                <select class="form-select" id="user_name" name="user_id" aria-label="Default select example">
                    <option value="">Select Student</option>

                    <?php
                        use  App\Models\User;

                        foreach ($users as  $user) {
                            $student_name = User::where('id', $user->id)->value('name');
                            print_r($user);
                    ?>
                        <option value="{{$user->id}}">Student Id:{{$user->id}} / Student Name: {{$student_name}}</option>
                    <?php
                        }
                    ?>


                </select>
              </div>
            </div>

          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Create certificate</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
