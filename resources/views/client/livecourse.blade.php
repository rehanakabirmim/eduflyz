@extends('client.layout.template-2')
@section('content')
<body>

    <!-- NAVBAR
    ================================================== -->
    <header class="py-5 bg-portgore" >
        <div class="px-5 px-lg-8 w-100">
            <div class="d-md-flex align-items-center">

                <!-- Lesson Title -->
                <div class="mx-auto mb-5 mb-md-0">
                    <h3 class="mb-0 line-clamp-2 text-white">{{$course->course_name}}</h3>
                </div>

            </div>
        </div>
    </header>

 <!-- Alert for form
    ================================================== -->
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
    </div>

        <!-- COURSE
    ================================================== -->
    <div class="container">



        <!-- COURSE INFO TAB
        ================================================== -->
        <div class="align-items-center">
        <ul id="pills-tab" class="nav course-tab-v1 border-bottom h4 my-8 pt-1" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-overview-tab" data-bs-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="true">Stream</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-curriculum-tab" data-bs-toggle="pill" href="#pills-curriculum" role="tab" aria-controls="pills-curriculum" aria-selected="false">Assignment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-instructor-tab" data-bs-toggle="pill" href="#pills-instructor" role="tab" aria-controls="pills-instructor" aria-selected="false">MCQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill" href="#pills-reviews" role="tab" aria-controls="pills-reviews" aria-selected="false">Reviews</a>
            </li>
        </ul>
        </div>

        <div class="tab-content pb-3" id="pills-tabContent">
            <!-- Post tab -->
            <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
                <form action="{{route('store.stream')}}" method="post">
                        @csrf
                        <input type="hidden" name="course_id" value="{{$course->id}}">
                        <div class="form-group mb-6">
                            <textarea class="form-control placeholder-1" id="content" name="content" rows="5" placeholder="Wrtie Post Here"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm mw-md-300p">POST</button>
                </form>

                <h3 class="py-5">Recents Post</h3>
                <ul class="list-unstyled pt-2">
                    @foreach($streams as $stream)
                        @php
                        $user_name = App\Models\User::where('id', $stream->user_id)->value('name');
                        $user_img = App\Models\User::where('id', $stream->user_id)->value('img');
                        @endphp
                    <li class="media d-flex">
                        <div class="avatar avatar-xxl me-3 me-md-6 flex-shrink-0">
                            <img src="{{asset($user_img)}}" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="media-body flex-grow-1">
                            <div class="d-md-flex align-items-center mb-5">
                                <div class="me-auto mb-4 mb-md-0">
                                    <h5 class="mb-0">{{$user_name}}</h5>
                                </div>
                            </div>

                            <a class="mb-6 line-height-md" href="{{$stream->content}}">{{$stream->content}}</a>
                        </div>
                    </li>
                    @endforeach
                </ul>


            </div>
            <!-- Assignment tab -->
            <div class="tab-pane fade" id="pills-curriculum" role="tabpanel" aria-labelledby="pills-curriculum-tab">
                <h3>Assignment</h3>
                @php
                    $c = 0;
                @endphp
                @if(count($assignments) <= 0)
                <p>Sorry! No Assignment is open now!</p>
                @endif
                @foreach($assignments as $assignment)
                @php
                    $c++;
                @endphp
                <div id="accordionCurriculum">
                    <div class="border rounded shadow mb-6 overflow-hidden">
                        <div class="d-flex align-items-center" id="{{'curriculumheading'.$c}}">
                            <h5 class="mb-0 w-100">
                                <button class="d-flex align-items-center p-5 min-height-80 text-dark fw-medium collapse-accordion-toggle line-height-one" type="button" data-bs-toggle="collapse" data-bs-target="{{'#Curriculumcollapse'.$c}}" aria-expanded="false" aria-controls="{{'Curriculumcollapse'.$c}}">
                                    <span class="me-4 text-dark d-flex">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>

                                    {{$assignment->assignment_name}}
                                </button>
                            </h5>
                            <div class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                <div class="badge btn-blue-soft me-5 font-size-sm fw-normal py-2">Due Date: {{$assignment->due_date}}</div>
                            </div>
                        </div>
                        @php
                        foreach($assignments_list as $assignment_list){
                            if($assignment->id == $assignment_list->assignment_id){
                                $match = 1;
                            }
                        }
                        @endphp
                        <div id="{{'Curriculumcollapse'.$c}}" class="collapse" aria-labelledby="{{'curriculumheading'.$c}}" data-parent="#accordionCurriculum">
                            <div class="border-top px-5 py-4 min-height-70 d-md-flex align-items-center">
                                <div class="d-flex align-items-center me-auto mb-4 mb-md-0">

                                    @if(isset($match))
                                    <div class="ms-4">
                                        You Already Submitted The Assignment.
                                    </div>
                                    @elseif($assignment->due_date <= date('Y-m-d'))
                                    <p>Sorry Due Date is over!</p>
                                    @else
                                    <div class="ms-4">
                                        <form action="{{route('submit.assignment')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="assignment_id" value="{{$assignment->id}}">
                                            <input type="hidden" name="course_id" value="{{$course->id}}">
                                            <div class="row mb-3">
                                            <label for="assignment_file">Upload Assignment (pdf only)</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" id="assignment_file" name="assignment_file" />
                                                </div>
                                            </div>
                                            <div >
                                            <div class="col-sm-10">
                                                <input type="submit" class="btn btn-primary btn-sm" value="Submit Assignment">
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

            <!-- MCQ tab -->
            <div class="tab-pane fade" id="pills-instructor" role="tabpanel" aria-labelledby="pills-instructor-tab">
                <h3 class="mb-6">Take MCQ Test Here</h3>
                @php
                    $c = 0;
                @endphp
                @if(count($exams) <= 0)
                <p>Sorry! No Exam is open now!</p>
                @endif
                @foreach($exams as $exam)
                @php
                    $c++;
                @endphp
                <div id="accordionCurriculum">
                    <div class="border rounded shadow mb-6 overflow-hidden">
                        <div class="d-flex align-items-center" id="{{'curriculumheading'.$c}}">
                            <h5 class="mb-0 w-100">
                                <button class="d-flex align-items-center p-5 min-height-80 text-dark fw-medium collapse-accordion-toggle line-height-one" type="button" data-bs-toggle="collapse" data-bs-target="{{'#Curriculumcollapse'.$c}}" aria-expanded="false" aria-controls="{{'Curriculumcollapse'.$c}}">
                                    <span class="me-4 text-dark d-flex">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>

                                    {{$exam->exam_name}}
                                </button>
                            </h5>
                            <div class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                <!-- <div class="badge btn-blue-soft me-5 font-size-sm fw-normal py-2">Due Date: </div> -->
                            </div>
                        </div>
                        @php
                        foreach($eattempts_list as $eattempt_list){
                            if($exam->exam_id == $eattempt_list->exam_id){
                                $matchfound = 1;
                            }
                        }
                        @endphp
                        <div id="{{'Curriculumcollapse'.$c}}" class="collapse" aria-labelledby="{{'curriculumheading'.$c}}" data-parent="#accordionCurriculum">
                            <div class="border-top px-5 py-4 min-height-70 d-md-flex align-items-center">
                                <div class="d-flex me-auto mb-4 mb-md-0">
                                    @if(isset($matchfound))
                                    @php
                                    $user_id = Illuminate\Support\Facades\Auth::id();
                                    $attempt = App\Models\ExamAttempt::where('user_id', $user_id)->where('exam_id', $exam->exam_id)->latest('attempt_id')->get()->first();
                                    @endphp
                                    @if(isset($attempt))
                                    <div class="ms-4">
                                        <p>You have given {{ $attempt->correct_ans }} correct answer of {{ $attempt->total_question }} questions!</p>
                                        <p>You Last Score: {{$attempt->score}}%</p>
                                    </div>
                                    @endif
                                    @else
                                    <div class="ms-4">
                                        <p>Total Question: {{$exam->question_count}}</br>
                                            <a href="{{route('exama', [$exam->exam_id, $exam->slug])}}" class="btn btn-primary btn-sm">Start Exam</a>
                                        </p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

            <!-- reviews tab -->

            <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                <h3 class="mb-6">Student feedback</h3>
                <div class="row align-items-center mb-8">
                    <div class="col-md-auto mb-5 mb-md-0">
                        <div class="border rounded shadow d-flex align-items-center justify-content-center px-9 py-8">
                            <div class="m-2 text-center">
                                @php
                                $r = 0;
                                $c=1;
                                foreach($reviews as $review){
                                    $r= ($r + $review->rating)/$c;
                                    $c++;
                                }
                                $r_show = sprintf("%.2f", $r);
                                @endphp
                                <h1 class="display-2 mb-0 fw-medium mb-n1">{{$r_show}}</h1>
                                <h5 class="mb-0">Course rating ({{$c-1}})</h5>
                                <div class="star-rating">
                                    <div class="rating" style="width:'{{$r*20}}%';"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <ul class="list-unstyled pt-2">
                    @foreach($reviews as $review)
                        @php
                        $user_name = App\Models\User::where('id', $review->user_id)->value('name');
                        $user_img = App\Models\User::where('id', $review->user_id)->value('img');
                        @endphp
                    <li class="media d-flex">
                        <div class="avatar avatar-xxl me-3 me-md-6 flex-shrink-0">
                            <img src="{{asset($user_img)}}" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="media-body flex-grow-1">
                            <div class="d-md-flex align-items-center mb-5">
                                <div class="me-auto mb-4 mb-md-0">
                                    <h5 class="mb-0">{{$user_name}}</h5>
                                    <p class="font-size-sm font-italic">{{$review->title}}</p>
                                </div>
                                <div class="star-rating">
                                    <div class="rating" style="width:'{{$review->rating*20}}%';"></div>

                                </div>
                            </div>
                            <p class="mb-6 line-height-md">{{$review->content}}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <div class="border shadow rounded p-6 p-md-9">
                    <h3 class="mb-2">Add Reviews & Rate</h3>
                    <div class="">What is it like to Course?</div>

                    <form action="{{route('store.review')}}" method="post">
                        @csrf
                        <input type="hidden" name="course_id" value="{{$course->id}}">
                        <div class="clearfix">
                            <fieldset class="slect-rating mb-3">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label class = "full" for="star5" title="Awesome - 5 stars"></label>

                                <input type="radio" id="star4" name="rating" value="4" />
                                <label class = "full" for="star4" title="Pretty good - 4 stars"></label>

                                <input type="radio" id="star3" name="rating" value="3" />
                                <label class = "full" for="star3" title="Meh - 3 stars"></label>

                                <input type="radio" id="star2" name="rating" value="2" />
                                <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>

                                <input type="radio" id="star1" name="rating" value="1" />
                                <label class = "full" for="star1" title="Sucks big time - 1 star"></label>

                            </fieldset>
                        </div>

                        <div class="form-group mb-6">
                            <label for="title">Review Title</label>
                            <input type="text" class="form-control placeholder-1" id="title" name="title" placeholder="Courses">
                        </div>

                        <div class="form-group mb-6">
                            <label for="content">Review Content</label>
                            <textarea class="form-control placeholder-1" id="content" name="content" rows="6" placeholder="Content"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mw-md-300p">SUBMIT REVIEW</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
@endsection
