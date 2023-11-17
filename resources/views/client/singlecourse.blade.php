@extends('client.layout.template-2')
@section('content')
    <!-- PAGE HEADER
    ================================================== -->
    <div class="position-relative pt-8 pt-xl-11">
        <div class="position-absolute top-0 right-0 left-0 overlay overlay-custom-left d-none d-xl-block">
            <img class="img-fluid" src="{{asset('client/assets/img/covers/cover-19.jpg')}}" alt="..." style="height:250px">
        </div>
    </div>

    <!-- COURSE
    ================================================== -->
    <div class="container">
        <div class="row mb-8">
            <div class="col-lg-8 mb-6 mb-lg-0">
                <div class="course-single-white">
                    <h1 class="me-xl-14 text-white">
                        {{$scourse->course_name}}
                    </h1>
                    <p class="me-xl-13 mb-5 text-white">{{$scourse->course_summary}}</p>

                    <a href="#" class="badge badge-lg badge-rounded-circle badge-secondary font-size-base badge-float badge-float-inside top-0 text-white">
                        <i class="far fa-heart"></i>
                    </a>
                </div>

                <!-- COURSE META
                ================================================== -->
                <div class="d-md-flex align-items-center mb-5 course-single-white">
                    <div class="border rounded-circle d-inline-block mb-4 mb-md-0 me-md-6 me-lg-4 me-xl-6 bg-white">
                        <div class="p-2">
                        @php
                            $teacher_img = App\Models\User::where('id', $scourse->teacher_id)->value('img');
                            $teacher_name = App\Models\User::where('id', $scourse->teacher_id)->value('name');
                            $teacher_title = App\Models\User::where('id', $scourse->teacher_id)->value('username');
                            $teacher_id = App\Models\User::where('id', $scourse->teacher_id)->value('id');
                            $teacher_des = App\Models\User::where('id', $scourse->teacher_id)->value('description');
                        @endphp
                            <img src="{{asset($teacher_img)}}" alt="..." class="rounded-circle" width="68" height="68">
                        </div>
                    </div>
                </div>

                <!-- COURSE INFO TAB
                ================================================== -->
                <ul id="pills-tab" class="nav course-tab-v1 border-bottom h4 my-8 pt-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-overview-tab" data-bs-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="true">Overview</a>
                    </li>
                    @if($scourse->course_type == 'recorded')
                    <li class="nav-item">
                        <a class="nav-link" id="pills-curriculum-tab" data-bs-toggle="pill" href="#pills-curriculum" role="tab" aria-controls="pills-curriculum" aria-selected="false">Curriculum</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" id="pills-instructor-tab" data-bs-toggle="pill" href="#pills-instructor" role="tab" aria-controls="pills-instructor" aria-selected="false">Instructor</a>
                    </li>





                    <li class="nav-item">
                        <a class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill" href="#pills-reviews" role="tab" aria-controls="pills-reviews" aria-selected="false">Reviews</a>
                    </li>


                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <!-- Overview -->
                    <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
                        <h3 class="">Course Description</h3>
                        <p class="mb-6 line-height-md">{!! $scourse->course_description !!}</p>

                        <h3 class="mb-5">What you'll learn</h3>
                        <div class="row  mb-8">
                            <div class="col-md">
                                <ul class="list-style-v1 list-unstyled">
                                    {!! $scourse->course_learnop !!}
                                </ul>
                            </div>
                        </div>

                        <h3 class="mb-5">Requirements</h3>
                        <ul class="list-style-v2 list-unstyled">
                            {!! $scourse->course_requirment !!}
                        </ul>
                    </div>

                    <!-- Curriculum -->
                    <div class="tab-pane fade" id="pills-curriculum" role="tabpanel" aria-labelledby="pills-curriculum-tab">
                        <div id="accordionCurriculum">
                            <div class="border rounded shadow mb-6 overflow-hidden">
                                <div class="d-flex align-items-center" id="curriculumheadingOne">
                                    <h5 class="mb-0 w-100">
                                        <button class="d-flex align-items-center p-5 min-height-80 text-dark fw-medium collapse-accordion-toggle line-height-one" type="button" data-bs-toggle="collapse" data-bs-target="#CurriculumcollapseOne" aria-expanded="true" aria-controls="CurriculumcollapseOne">
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

                                            Introduction
                                        </button>
                                    </h5>
                                </div>
                               @foreach($lessons as $lesson)
                                <div id="CurriculumcollapseOne" class="collapse show" aria-labelledby="curriculumheadingOne" data-parent="#accordionCurriculum">
                                    <div class="border-top px-5 py-4 min-height-70 d-md-flex align-items-center">
                                        <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                            <div class="text-secondary d-flex">
                                                <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z" fill="currentColor"/>
                                                    <path d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z" fill="currentColor"/>
                                                    <path d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z" fill="currentColor"/>
                                                    <path d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z" fill="currentColor"/>
                                                    <path d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z" fill="currentColor"/>
                                                </svg>

                                            </div>

                                            <div class="ms-4">
                                                {{$lesson->lesson_name}}
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                            <div class="badge btn-blue-soft me-5 font-size-sm fw-normal py-2">{{$lesson->lesson_duration}} min</div>
                                            <a href="#" class="text-secondary d-flex">
                                                <!-- Icon -->
                                                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.625 7.34375H7.3423V4.13164C7.3423 2.715 8.53391 1.5625 9.99855 1.5625C11.4632 1.5625 12.6548 2.715 12.6548 4.13164V5.625H14.2173V4.13164C14.2173 1.85344 12.3248 0 9.99855 0C7.67234 0 5.7798 1.85344 5.7798 4.13164V7.34375H4.375C3.08266 7.34375 2.03125 8.39516 2.03125 9.6875V17.6562C2.03125 18.9486 3.08266 20 4.375 20H15.625C16.9173 20 17.9688 18.9486 17.9688 17.6562V9.6875C17.9688 8.39516 16.9173 7.34375 15.625 7.34375ZM16.4062 17.6562C16.4062 18.087 16.0558 18.4375 15.625 18.4375H4.375C3.94422 18.4375 3.59375 18.087 3.59375 17.6562V9.6875C3.59375 9.25672 3.94422 8.90625 4.375 8.90625H15.625C16.0558 8.90625 16.4062 9.25672 16.4062 9.6875V17.6562Z" fill="currentColor"/>
                                                    <path d="M10 11.1719C9.20176 11.1719 8.55469 11.8189 8.55469 12.6172C8.55469 13.1269 8.81875 13.5746 9.2173 13.832V15.5469C9.2173 15.9783 9.56707 16.3281 9.99855 16.3281C10.43 16.3281 10.7798 15.9783 10.7798 15.5469V13.8338C11.18 13.5768 11.4453 13.1281 11.4453 12.6172C11.4453 11.8189 10.7982 11.1719 10 11.1719Z" fill="currentColor"/>
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>


                    <!-- Instructor -->
                    <div class="tab-pane fade" id="pills-instructor" role="tabpanel" aria-labelledby="pills-instructor-tab">
                        <h3 class="mb-6">About the instructor</h3>

                        <div class="d-flex align-items-center mb-6">
                            <div class="d-inline-block rounded-circle border me-6 p-2">
                                <div class="avatar avatar-size-120">
                                    <img src="{{asset($teacher_img)}}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="mb-0">{{$teacher_name}}</h4>
                                <span>{{$teacher_title}}</span>
                            </div>
                        </div>


                        <p class="mb-6 line-height-md">{{$teacher_des}}</p>
                    </div>

                    <!-- reviews -->
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
                                            <div class="rating" style="width: <?= $r*20 ?>%;"></div>
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
                                <input type="hidden" name="course_id" value="{{$scourse->id}}">
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


                                @php
                                    $user_id = '';
                                @endphp

                               @auth

                                    @if ($course_id = App\Models\Order::where('user_id', Auth::user()->id)->get())

                                        <button type="submit" class="btn btn-primary btn-block mw-md-300p">SUBMIT REVIEW</button>

                                    @endif
                                @endauth





                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">

                <!-- SIDEBAR FILTER
                ================================================== -->
                <div class="d-block d-block rounded border p-2 shadow mb-6 bg-white">
                    <a href="{{$scourse->intro_link}}" class="d-block sk-thumbnail rounded mb-1" data-fancybox>
                        <div class="h-60p w-60p rounded-circle bg-white size-20-all d-inline-flex align-items-center justify-content-center position-absolute center z-index-1">
                            <!-- Icon -->
                            <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z" fill="currentColor"/>
                            </svg>

                        </div>
                        <img class="rounded shadow-light-lg" src="{{asset($scourse->course_img)}}" alt="...">
                    </a>

                    <div class="pt-5 pb-4 px-5 px-lg-3 px-xl-5">
                        <div class="d-flex align-items-center mb-2">
                            <ins class="h2 mb-0">৳ {{$scourse->price}}</ins>
                        </div>
                        @php
                        if(isset(Auth()->user()->id)){
                            $current_user_id = Auth()->user()->id;
                            $current_user_role = auth()->user()->role;
                        }else{
                            $current_user_id = 0;
                            $current_user_role = 1;
                        }
                        @endphp
                        @if (($purchased != null && $course_type == 'recorded') || ($teacher_id === $current_user_id && $course_type == 'recorded') || ($current_user_role == 'admin' && $course_type == 'recorded'))
                        <a href="{{route('recorded.course', [$scourse->id, $scourse->slug])}}">
                            <button class="btn btn-primary btn-block mb-3">VIEW COURSE</button>
                        </a>
                        @elseif (($purchased != null && $course_type == 'live') || ($teacher_id === $current_user_id && $course_type == 'live') || ($current_user_role == 'admin' && $course_type == 'live'))
                        <a href="{{route('live.course', [$scourse->id, $scourse->slug])}}">
                            <button class="btn btn-primary btn-block mb-3">VIEW COURSE</button>
                        </a>
                        @else
                        <form action="{{route('addcart')}}" method="post">
                        @csrf
                            <input type="hidden" name="course_id" value="{{$scourse->id}}">
                            <input type="hidden" name="price" value="{{$scourse->price}}">
                            <input class="btn btn-primary btn-block mb-3" type="submit" value="ENROLL NOW">
                        </form>
                        @endif

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center py-3">
                                <div class="text-secondary d-flex icon-uxs">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                        <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                    </svg>

                                </div>
                                <h6 class="mb-0 ms-3 me-auto">Duration</h6>
                                    @if($course_type == 'live')
                                    <span>{{$scourse->course_duration}} Months</span>
                                    @else
                                    <span>{{$scourse->course_duration}} Minutes</span>
                                    @endif
                            </li>
                            <li class="list-group-item d-flex align-items-center py-3">
                                <div class="text-secondary d-flex icon-uxs">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7262 1.94825C13.4059 0.396725 10.401 0.315126 8.00002 1.73839C5.59897 0.315126 2.59406 0.396725 0.273859 1.94825C0.102729 2.06241 -3.54271e-05 2.25456 6.30651e-07 2.46027V14.6553C-0.000323889 14.8826 0.124616 15.0914 0.324917 15.1987C0.525109 15.3058 0.768066 15.294 0.9569 15.168C2.98471 13.8111 5.63063 13.8111 7.65844 15.168C7.66645 15.1735 7.67568 15.1747 7.68368 15.1796C7.69169 15.1846 7.7003 15.1932 7.70953 15.1987C7.73102 15.2079 7.75302 15.2159 7.77538 15.2227C7.79773 15.2329 7.82077 15.2415 7.84428 15.2486C7.87828 15.2564 7.91286 15.2616 7.94766 15.264C7.96551 15.264 7.98213 15.2714 7.99998 15.2714C8.00492 15.2714 8.00982 15.2714 8.01538 15.2714C8.03604 15.2699 8.05655 15.2672 8.07693 15.2634C8.10808 15.2602 8.13895 15.2547 8.16923 15.2467C8.19018 15.2399 8.21074 15.2319 8.23078 15.2227C8.24986 15.2147 8.27016 15.2104 8.28862 15.2006C8.29724 15.1956 8.30402 15.1883 8.31264 15.1827C8.32125 15.1772 8.3311 15.1753 8.33971 15.1698C10.3675 13.8129 13.0134 13.8129 15.0413 15.1698C15.3233 15.3595 15.7057 15.2846 15.8953 15.0026C15.9643 14.9 16.0008 14.779 16 14.6554V2.46027C16 2.25456 15.8973 2.06241 15.7262 1.94825ZM7.38462 13.6036C5.43516 12.6896 3.18022 12.6896 1.23076 13.6036V2.79993C3.12732 1.67313 5.48806 1.67313 7.38462 2.79993V13.6036ZM14.7692 13.6036C12.8198 12.6896 10.5648 12.6896 8.61538 13.6036V2.79993C10.5119 1.67313 12.8727 1.67313 14.7692 2.79993V13.6036Z" fill="currentColor"/>
                                    </svg>

                                </div>
                                <h6 class="mb-0 ms-3 me-auto">Lectures</h6>

                                <span>{{$scourse->lesson_count}}</span>

                            </li>
                            <li class="list-group-item d-flex align-items-center py-3">
                                <div class="text-secondary d-flex icon-uxs">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.4286 7.42841H6.20457C5.89469 6.21086 4.65646 5.47506 3.43888 5.78494C2.63143 5.99045 2.00093 6.62095 1.79541 7.42841H0.571439C0.255837 7.42841 0 7.68424 0 7.99985C0 8.31545 0.255837 8.57125 0.571439 8.57125H1.79545C2.10532 9.7888 3.34356 10.5246 4.56114 10.2147C5.36859 10.0092 5.99909 9.37871 6.20461 8.57125H15.4286C15.7442 8.57125 16 8.31542 16 7.99981C16 7.68421 15.7442 7.42841 15.4286 7.42841ZM4.00001 9.14269C3.36884 9.14269 2.85716 8.63102 2.85716 7.99985C2.85716 7.36868 3.36884 6.857 4.00001 6.857C4.63118 6.857 5.14285 7.36868 5.14285 7.99985C5.14285 8.63102 4.63118 9.14269 4.00001 9.14269Z" fill="currentColor"/>
                                        <path d="M15.4286 1.71405H13.6331C13.3233 0.496508 12.085 -0.239295 10.8675 0.0705817C10.06 0.276095 9.4295 0.906597 9.22399 1.71405H0.571439C0.255837 1.71405 0 1.96989 0 2.28549C0 2.60109 0.255837 2.85693 0.571439 2.85693H9.22399C9.53387 4.07447 10.7721 4.81028 11.9897 4.5004C12.7971 4.29489 13.4276 3.66438 13.6331 2.85693H15.4286C15.7442 2.85693 16 2.60109 16 2.28549C16 1.96989 15.7442 1.71405 15.4286 1.71405ZM11.4286 3.42834C10.7974 3.42834 10.2857 2.91666 10.2857 2.28549C10.2857 1.65432 10.7974 1.14265 11.4286 1.14265C12.0598 1.14265 12.5714 1.65432 12.5714 2.28549C12.5714 2.91666 12.0598 3.42834 11.4286 3.42834Z" fill="currentColor"/>
                                        <path d="M15.4286 13.1428H12.4903C12.1804 11.9252 10.9422 11.1894 9.72458 11.4993C8.91713 11.7048 8.28662 12.3353 8.08111 13.1428H0.571439C0.255837 13.1428 0 13.3986 0 13.7142C0 14.0297 0.255837 14.2856 0.571439 14.2856H8.08114C8.39102 15.5032 9.62926 16.239 10.8468 15.9291C11.6543 15.7236 12.2848 15.0931 12.4903 14.2856H15.4286C15.7442 14.2856 16 14.0298 16 13.7142C16 13.3986 15.7442 13.1428 15.4286 13.1428ZM10.2857 14.8571C9.65454 14.8571 9.14286 14.3454 9.14286 13.7142C9.14286 13.083 9.65454 12.5714 10.2857 12.5714C10.9169 12.5714 11.4286 13.083 11.4286 13.7142C11.4286 14.3454 10.9169 14.8571 10.2857 14.8571Z" fill="currentColor"/>
                                    </svg>

                                </div>
                                <h6 class="mb-0 ms-3 me-auto">Skill level</h6>
                                <span>beginner</span>
                            </li>

                            <li class="list-group-item d-flex align-items-center py-4">
                                <a href="#" class="mx-auto text-teal fw-medium d-flex align-items-center mt-2">
                                    <!-- Icon -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.0283 6.25C14.3059 6.25 12.9033 4.84833 12.9033 3.125C12.9033 1.40167 14.3059 0 16.0283 0C17.7509 0 19.1533 1.40167 19.1533 3.125C19.1533 4.84833 17.7509 6.25 16.0283 6.25ZM16.0283 1.25C14.995 1.25 14.1533 2.09076 14.1533 3.125C14.1533 4.15924 14.995 5 16.0283 5C17.0616 5 17.9033 4.15924 17.9033 3.125C17.9033 2.09076 17.0616 1.25 16.0283 1.25Z" fill="currentColor"/>
                                        <path d="M16.0283 20C14.3059 20 12.9033 18.5983 12.9033 16.875C12.9033 15.1517 14.3059 13.75 16.0283 13.75C17.7509 13.75 19.1533 15.1517 19.1533 16.875C19.1533 18.5983 17.7509 20 16.0283 20ZM16.0283 15C14.995 15 14.1533 15.8408 14.1533 16.875C14.1533 17.9092 14.995 18.75 16.0283 18.75C17.0616 18.75 17.9033 17.9092 17.9033 16.875C17.9033 15.8408 17.0616 15 16.0283 15Z" fill="currentColor"/>
                                        <path d="M3.94531 13.125C2.22275 13.125 0.820312 11.7233 0.820312 10C0.820312 8.27667 2.22275 6.875 3.94531 6.875C5.66788 6.875 7.07031 8.27667 7.07031 10C7.07031 11.7233 5.66788 13.125 3.94531 13.125ZM3.94531 8.125C2.91199 8.125 2.07031 8.96576 2.07031 10C2.07031 11.0342 2.91199 11.875 3.94531 11.875C4.97864 11.875 5.82031 11.0342 5.82031 10C5.82031 8.96576 4.97864 8.125 3.94531 8.125Z" fill="currentColor"/>
                                        <path d="M6.12066 9.39154C5.90307 9.39154 5.69143 9.27817 5.57729 9.0766C5.40639 8.77661 5.51061 8.39484 5.8106 8.22409L13.5431 3.81568C13.8422 3.64325 14.2247 3.74823 14.3947 4.04914C14.5656 4.34912 14.4614 4.73075 14.1614 4.90164L6.42888 9.30991C6.33138 9.36484 6.22564 9.39154 6.12066 9.39154Z" fill="currentColor"/>
                                        <path d="M13.8524 16.2665C13.7475 16.2665 13.6416 16.2398 13.5441 16.1841L5.81151 11.7757C5.51152 11.6049 5.40745 11.2231 5.5782 10.9232C5.74818 10.6224 6.12996 10.5182 6.42994 10.6899L14.1623 15.0981C14.4623 15.269 14.5665 15.6506 14.3958 15.9506C14.2807 16.1531 14.0691 16.2665 13.8524 16.2665Z" fill="currentColor"/>
                                    </svg>

                                    <span class="ms-3">Share this course</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Related Course
        ================================================== -->
        <div class="text-center mb-5 mb-md-8">
            <h1>Related Courses</h1>
            <p class="font-size-lg text-capitalize">Discover your perfect program in our courses.</p>
        </div>

        <div class="mx-n4 mb-12" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
        @foreach($courses as $course)
            <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5" style="padding-right:15px;padding-left:15px;">
            <!-- Card -->
                <div class="card border shadow-dark-hover p-2 sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                        <a href="{{route('single.course', [$scourse->id,$scourse->slug])}}" class="card-img sk-thumbnail img-ratio-3 d-block">
                            <img class="rounded shadow-light-lg" src="{{asset($course->course_img)}}" alt="...">
                        </a>

                        <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                            <ins class="h5 mb-0 text-white">৳  {{$course->price}}</ins>
                        </span>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                        <!-- Preheading -->
                        <a href="{{route('single.course', [$scourse->id,$scourse->slug])}}">
                            <span class="mb-1 d-inline-block text-gray-800">{{$course->category_name}}</span></a>

                        <!-- Heading -->
                        <div class="position-relative">
                            <a href="{{route('single.course', [$scourse->id,$scourse->slug])}}" class="d-block stretched-link">
                                <h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2">{{$course->course_name}}</h5></a>

                            <div class="row mx-n2 align-items-end">
                                <div class="col px-2">
                                    <ul class="nav mx-n3">
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">{{$course->lesson_count}} lessons</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-auto px-2 text-right">
                                    <div class="star-rating mb-2 mb-lg-0">
                                        <div class="rating" style="<?= $r*20 ?>%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
