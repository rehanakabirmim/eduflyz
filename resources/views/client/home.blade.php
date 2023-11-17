    @extends('client.layout.template-2')
    @section('content')
    <!-- HERO
    ================================================== -->
    <section>
        <img src="{{ asset('client/img/hero.jpg') }}" alt="" style="width: 100%;">
    </section>


    <!-- Recorded Courses
    ================================================== -->
    <section class="pt-5 pb-9 py-md-7">
        <div class="container">
            <div class="text-center mb-5 mb-md-8">
                <h1 class="mb-1">Recorded Courses</h1>
                <p class="font-size-lg text-capitalize">Discover your perfect program in our courses.</p>
            </div>

            <div class="row row-cols-md-2 row-cols-xl-3 mb-2">
                @foreach ($rcourses as $rcourse)
                <div class="col-md pb-4 pb-md-7">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                <a href="{{route('single.course', [$rcourse->id,$rcourse->slug])}}" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                    <!-- Icon -->
                                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                        <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                    </svg>

                                </a>
                            </div>

                            <a href="{{route('single.course', [$rcourse->id,$rcourse->slug])}}" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg" src="{{ asset($rcourse->course_img) }}" alt="...">
                            </a>

                            <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                <span class="text-white text-uppercase fw-bold font-size-xs">Recorded Course</span>
                            </span>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                            <a href="instructors-single.html" class="d-block">
                                <div class="avatar sk-fade-right avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                    @php
                                    $user_img = App\Models\User::where('id', $rcourse->teacher_id)->value('img');
                                    @endphp
                                    <img src="{{ asset($user_img) }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>

                            <!-- Preheading -->
                            <a href="{{route('single.course', [$rcourse->id,$rcourse->slug])}}">
                                <span class="mb-1 d-inline-block text-gray-800">{{$rcourse->rcategory_name}}</span></a>

                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="{{route('single.course', [$rcourse->id,$rcourse->slug])}}" class="d-block stretched-link">
                                    <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">{{$rcourse->course_name}}</h4></a>

                                <!-- <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                    <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                        <div class="rating" style="width:50%;"></div>
                                    </div>

                                    <div class="font-size-sm">
                                        <span>5.45 (5.8k+ reviews)</span>
                                    </div>
                                </div> -->

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
                                                    <div class="font-size-sm">{{$rcourse->lesson_count}} lessons</div>
                                                </div>
                                            </li>
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                            <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">{{$rcourse->course_duration}} Minutes</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-auto px-2 text-right">
                                        <!-- <del class="font-size-sm">$959</del> -->
                                        <ins class="h4 mb-0 d-block mb-lg-n1">৳{{$rcourse->price}}</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{route('allcourse')}}" class="btn btn-primary btn-sm">
                    View All Courses
                </a>
            </div>
        </div>
    </section>

    <!-- Live Courses
    ================================================== -->
    <section class="pt-5 pb-2 py-md-7">
        <div class="container">
            <div class="text-center mb-5 mb-md-8">
                <h1 class="mb-1">Live Courses</h1>
                <p class="font-size-lg text-capitalize">Discover your perfect program in our courses.</p>
            </div>

            <div class="row row-cols-md-2 row-cols-xl-3 mb-2">
                @foreach ($lcourses as $lcourse)
                <div class="col-md pb-4 pb-md-7">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                <a href="{{route('single.course', [$lcourse->id,$lcourse->slug])}}" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                    <!-- Icon -->
                                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                        <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                    </svg>

                                </a>
                            </div>

                            <a href="{{route('single.course', [$lcourse->id,$lcourse->slug])}}" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg" src="{{ asset($lcourse->course_img) }}" alt="...">
                            </a>

                            <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                <span class="text-white text-uppercase fw-bold font-size-xs">Live Course</span>
                            </span>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                            <a href="instructors-single.html" class="d-block">
                                <div class="avatar sk-fade-right avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                    @php
                                    $user_img = App\Models\User::where('id', $lcourse->teacher_id)->value('img');
                                    @endphp
                                    <img src="{{ asset($user_img) }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>

                            <!-- Preheading -->
                            <a href="{{route('single.course', [$lcourse->id,$lcourse->slug])}}">
                                <span class="mb-1 d-inline-block text-gray-800">{{$lcourse->lcategory_name}}</span></a>

                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="{{route('single.course', [$lcourse->id,$lcourse->slug])}}" class="d-block stretched-link">
                                    <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">{{$lcourse->course_name}}</h4></a>

                                <!-- <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                    <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                        <div class="rating" style="width:50%;"></div>
                                    </div>

                                    <div class="font-size-sm">
                                        <span>5.45 (5.8k+ reviews)</span>
                                    </div>
                                </div> -->

                                <div class="row mx-n2 align-items-end">
                                    <div class="col px-2">
                                        <ul class="nav mx-n3">
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <!-- <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                        </svg>

                                                    </div> -->
                                                    <!-- <div class="font-size-sm">{{$lcourse->lesson_count}} lessons</div>
                                                </div> -->
                                            </li>
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                            <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">{{$lcourse->course_duration}} Months</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-auto px-2 text-right">
                                        <!-- <del class="font-size-sm">$959</del> -->
                                        <ins class="h4 mb-0 d-block mb-lg-n1">৳{{$lcourse->price}}</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{route('allcourse')}}" class="btn btn-primary btn-sm">
                    View All Courses
                </a>
            </div>
        </div>
    </section>


    <!-- INSTRUCTORS
    ================================================== -->
    <section class="pt-5 pt-md-11" data-jarallax data-speed=".8" style="background-image: url('lient/assets/img/covers/cover-3.jpg');" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto text-center" data-aos="fade-up">
                    <h1>Our Teachers</h1>
                    <p class="font-size-lg text-capitalize">Our expert teacher with industry experience!</p>
                </div>
                <div class="col-12">
                    <div class="mx-n4" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                        @foreach($teachers as $teacher)
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5" style="padding-right:15px;padding-left:15px;">
                            <!-- Card -->
                            <div class="card border shadow p-2 sk-fade">
                                <!-- Image -->
                                <div class="card-zoom position-relative">
                                    <a href="#" class="card-img sk-thumbnail img-ratio-3 d-block">
                                        <img style="height:150px;width:150px;" class="rounded shadow-light-lg" src="{{ asset($teacher->img) }}" alt="...">
                                    </a>
                                </div>

                                <!-- Footer -->
                                <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                    <!-- Preheading -->
                                    <!-- <a href="#"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a> -->

                                    <!-- Heading -->
                                    <div class="position-relative">
                                        <h5 class="text-center">{{$teacher->name}}</h5>

                                        <div class="row mx-n2 align-items-end">
                                            <div class="col px-2">
                                                <h6 class="text-center">{{$teacher->username}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial
    ================================================== -->
    <section class="pt-8 pb-10 pt-md-11 pb-md-12">
        <div class="container">
            <div class="row">
                <div class="text-center mb-5 mb-md-8">
                    <h1 class="mb-1">Testimonial</h1>
                    <p class="font-size-lg text-capitalize">What our students say!</p>
                </div>
                <div class="col-12">
                    <div class="mx-n4" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                        @foreach($testimonials as $testimonial)
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5" style="padding-right:15px;padding-left:15px;">
                            <!-- Card -->
                            <div class="testimonial-item text-center">
                                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset($testimonial->tm_img) }}" style="width: 80px; height: 80px;">
                                <h5 class="mb-0">{{$testimonial->name}}</h5>
                                <p>{{$testimonial->title}}</p>
                                <div class="testimonial-text bg-light text-center p-4">
                                <p class="mb-0">{{$testimonial->comment}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>                
            </div>
        </div>
    </section>
@endsection

