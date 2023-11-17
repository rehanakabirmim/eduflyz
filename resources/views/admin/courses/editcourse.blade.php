@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Edit Course</h4>
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Course</h5>
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
                <form action="{{route('updatecourse')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="course_id" id="course_id" value="{{$courseinfo->id}}">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="course_name">Course Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="course_name" name="course_name" value="{{$courseinfo->course_name}}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="category">Select Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="teacher">Select teacher</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="teacher_id" name="teacher_id" aria-label="Default select example">
                                @foreach ($teachers as $teacher)
                                <option value="{{$teacher->id}}" @if($courseinfo->teacher_id==$teacher->id) selected @endif>{{$teacher->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="price">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" name="price" value="{{$courseinfo->price}}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="course-summary">Course Summary</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="course_summary" id="course_summary" cols="30" rows="2">{{$courseinfo->course_summary}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="course-details">Course Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="course_description" id="course_description" cols="30" rows="5">{{$courseinfo->course_description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="course_learnop">What will you learn</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="course_learnop" id="course_learnop" cols="30" rows="5">{{$courseinfo->course_learnop}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="course_requirment">Course Requirments</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="course_requirment" id="course_requirment" cols="30" rows="5">{{$courseinfo->course_requirment}}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="intro_link">Intro Link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="intro_link" name="intro_link" value="{{$courseinfo->intro_link}}" />
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Course</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
