<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('backend/assets/img/favicon.png')}}" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Lora:wght@400;700&amp;family=Montserrat:wght@400;500;600;700&amp;family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('client/assets/fonts/fontawesome/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/libs/flickity-fade/flickity-fade.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/libs/flickity/dist/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/libs/highlightjs/styles/vs2015.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/libs/jarallax/dist/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/libs/quill/dist/quill.core.css') }}" />

    <!-- <script src="{{ asset('client/assets/jquery.3.7.0.js') }}"></script> -->
    <!-- Map -->
    <!-- <link href='../../../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/theme.min.css') }}">

    <title>EduFlyz - Your Learning Partner!</title>

</head>
<body>

    <!-- NAVBAR
    ================================================== -->
    <header class="navbar navbar-expand-xl navbar-light  py-4" >
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand me-0" href="{{route('home')}}">
                <img src="{{ asset('client/img/eduflyz-logo.png') }}" class="navbar-brand-img" style="height:50px" alt="...">
            </a>

            <!-- Collapse -->
            <div class="collapse navbar-collapse z-index-lg" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler outline-0 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Icon -->
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                        <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                    </svg>

                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings" href="{{route('home')}}" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings" href="{{route('allcourse')}}" aria-haspopup="true" aria-expanded="false">
                            All Course
                        </a>
                    </li>
                    @auth
                    @if(auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings" href="{{route('admin.dashboard')}}" aria-haspopup="true" aria-expanded="false">
                            Dashboard
                        </a>
                    </li>
                    @endif
                    @if(auth()->user()->role == 'teacher')
                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings" href="{{route('admin.dashboard')}}" aria-haspopup="true" aria-expanded="false">
                            Dashboard
                        </a>
                    </li>
                    @endif
                    @if(auth()->user()->role == 'user')
                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings" href="{{route('mycourses')}}" aria-haspopup="true" aria-expanded="false">
                            My Courses
                        </a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings" href="{{route('user.profile')}}" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                    </li>
                    @endauth
                    
                </ul>
            </div>

            <!-- Search, Account & Cart -->
            <ul class="navbar-nav flex-row ms-auto ms-xl-0 me-n2 me-md-n4 align-items-center">
                <li class="nav-item border-0 px-0">
                    <!-- Button trigger cart modal -->
                    <a href="{{route('cart')}}" class="nav-link d-flex px-3 px-md-4 position-relative text-secondary icon-xs">
                        <!-- Icon -->
                        <svg width="13" height="15" viewBox="0 0 13 15" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.2422 3.51562H10.4567C10.2239 1.53873 8.53839 0 6.5 0C4.46161 0 2.7761 1.53873 2.54334 3.51562H0.757812C0.434199 3.51562 0.171875 3.77795 0.171875 4.10156V14.4141C0.171875 14.7377 0.434199 15 0.757812 15H12.2422C12.5658 15 12.8281 14.7377 12.8281 14.4141V4.10156C12.8281 3.77795 12.5658 3.51562 12.2422 3.51562ZM6.5 1.17188C7.89113 1.17188 9.04939 2.18716 9.27321 3.51562H3.72679C3.95062 2.18716 5.10887 1.17188 6.5 1.17188ZM11.6562 13.8281H1.34375V4.6875H2.51562V6.44531C2.51562 6.76893 2.77795 7.03125 3.10156 7.03125C3.42518 7.03125 3.6875 6.76893 3.6875 6.44531V4.6875H9.3125V6.44531C9.3125 6.76893 9.57482 7.03125 9.89844 7.03125C10.2221 7.03125 10.4844 6.76893 10.4844 6.44531V4.6875H11.6562V13.8281Z" fill="currentColor"/>
                        </svg>

                    </a>
                </li>
                @guest 
                <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Login</a>
                </li>
                @endguest
                @auth 
                <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf                                            
                            <input type="submit" class="btn btn-sm btn-primary" value="Log Out" />
                            
                        </form>
                    </li>
                @endauth
            </ul>

            <!-- Toggler -->
            <button class="navbar-toggler ms-4 ms-md-5 shadow-none bg-teal text-white icon-xs p-0 outline-0 h-40p w-40p d-flex d-xl-none place-flex-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Icon -->
                <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                    <rect width="25" height="1" fill="currentColor"/>
                    <rect y="8" width="15" height="1" fill="currentColor"/>
                    <rect y="16" width="20" height="1" fill="currentColor"/>
                </svg>

            </button>
        </div>
    </header>

    @yield('content')

    <!-- FOOTER
    ================================================== -->
    <footer class="pt-8 pt-md-11 bg-darken bg-black">
        <div class="container">
            <div class="row" id="accordionFooter">
                <div class="col-12 col-md-4 col-lg-4">

                    <!-- Brand -->
                    <img src="{{ asset('client/img/eduflyz-logo.png') }}" alt="..." class="footer-brand img-fluid mb-4 h-60p">

                    <!-- Text -->
                    <p class="text-white mb-4 font-size-sm-alone">
                        32, Nobinbaag, Gopalgonj
                    </p>

                    <div class="mb-4">
                        <a href="tel:1234567890" class="text-white font-size-sm-alone">123 456 7890</a>
                    </div>

                    <div class="mb-4">
                        <a href="mailto:support@eduflyz.com" class="text-white font-size-sm-alone">support@eduflyz.com</a>
                    </div>

                    <!-- Social -->
                    <ul class="list-unstyled list-inline list-social mb-4 mb-md-0 mx-n2">
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-decoration-none w-36 h-36 bg-white-hover-10 rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-decoration-none w-36 h-36 bg-white-hover-10 rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-decoration-none w-36 h-36 bg-white-hover-10 rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 col-lg-2">
                    <div class="mb-5 mb-xl-0 footer-accordion">

                        <!-- Heading -->
                        <div id="widgetOne">
                            <h5 class="mb-5 text-white">
                                Sitemap
                            </h5>
                        </div>

                        <div id="widgetcollapseOne" class="collapse show" aria-labelledby="widgetOne" data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-white font-size-sm-alone mb-6 mb-md-8 mb-lg-0">
                                <li class="mb-3">
                                    <a href="{{route('login')}}" class="text-reset">
                                        Login
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{route('register')}}" class="text-reset">
                                        Register
                                    </a>
                                </li>

                                <li class="mb-3">
                                    <a href="{{route('teacher.apply')}}" class="text-reset">
                                        Become A Teacher
                                    </a>
                                </li>
                        
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="col-12 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
                    <div class="mb-5 mb-xl-0 ms-xl-6 footer-accordion">

                        <!-- Heading -->
                        <div id="widgetThree">
                            <h5 class="mb-5 text-white">
                                    Top Categories
                            </h5>
                        </div>

                        <div id="widgetcollapseThree" class="collapse" aria-labelledby="widgetThree" data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-white font-size-sm-alone mb-0">
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        Web Design
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-2 d-xl-flex">
                    <div class="mb-5 mb-xl-0 ms-xl-auto footer-accordion">

                        <!-- Heading -->
                        <div id="widgetFour">
                            <h5 class="mb-5 text-white">
                                Secure Payments
                            </h5>
                        </div>

                        <div>
                            <!-- List -->
                            <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-0">
                                <li class="mb-3">
                                    <img src="{{asset('client/img/bkash.jpg')}}" style="height:50px" />
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-md-5">
                    <div class="pb-5 pt-6 py-md-4 text-xl-start align-items-center">
                        <p class="text-white text-center">Copyright © 2023 EduFlyz. All Right Reserved.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="{{ asset('client/assets/libs/jquery/dist/jquery.min.js') }}"></script> -->
    <script src="{{ asset('client/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('client/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/countup.js/dist/countUp.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/flickity/dist/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/flickity-fade/flickity-fade.js') }}"></script>
    <script src="{{ asset('client/assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/jarallax/dist/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/jarallax/dist/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/parallax-js/dist/parallax.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('client/assets/libs/typed.js/lib/typed.min.js') }}"></script>

    <!-- Map -->
    <!-- <script src='../../../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script> -->

    <!-- Theme JS -->
    <script src="{{ asset('client/assets/js/theme.min.js') }}"></script>

    <script src="{{ asset('client/assets/js/app.js') }}"></script>

    


</body>

</html>
