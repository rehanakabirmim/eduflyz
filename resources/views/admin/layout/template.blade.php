<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{asset("backend/asset/")}}/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Eduflyz | Your Learning Partner</title>

    <meta name="description" content="" />


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('backend/assets/img/favicon.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('backend/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('backend/assets/js/config.js')}}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{Route('home')}}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                        <img src="{{asset('client/img/eduflyz-logo.png')}}" alt="" style="height: 50px">

                        </span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="{{route('admin.dashboard')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Course Category-->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Course Category</span>
                    </li>

                        <li class="menu-item">
                            <a href="{{route('addcourse.category')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>Add Course Category</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{route('allcourse.category')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>All Course Category</div>
                            </a>
                        </li>



                    <!-- Certificate-->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Course Certificate</span>
                    </li>

                        <li class="menu-item">
                            <a href="{{route('create.course.certificate')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>Create Course Certificate</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{route('all.course.certificate')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>All Course Certificate</div>
                            </a>
                        </li>




                    <!-- Recorded Course -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Recorded Course</span>
                    </li>

                        <li class="menu-item">
                            <a href="{{route('addcourse')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>Add Recorded Course</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('recordcourse')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>All Recorded Course</div>
                            </a>
                        </li>

                    <!-- Live Course -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Live Course</span>
                    </li>

                        <li class="menu-item">
                            <a href="{{route('addlcourse')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>Add Live Course</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('livecourse')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>All Live Course</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('add.assignment')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>Add Assignment</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('all.assignment')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>All Assignment</div>
                            </a>
                        </li>

                    <!-- Lesson -->

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Lesson</span>
                    </li>

                        <li class="menu-item">
                            <a href="{{route('addlesson')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>Add Lesson</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('alllesson')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>All Lesson</div>
                            </a>
                        </li>

                    <!-- Mcq Exam -->

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">MCQ Exam</span>
                    </li>

                        <li class="menu-item">
                            <a href="{{route('addexam')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>Add MCQ Exam</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('allexam')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div>All MCQ Exam</div>
                            </a>
                        </li>

                    <!-- Teacher -->

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Teacher</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('addteacher')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div>Add Teacher</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('allteacher')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div>All Teacher</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{route('teacher.request')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div>Teacher Requests</div>
                        </a>
                    </li>

                    <!-- orders -->

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Orders</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('allorder')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div>All Order</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('coupon')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div>Coupon Code</div>
                        </a>
                    </li>

                    <!-- testimonials -->

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Testimonial</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('add.testimonial')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div>Add Testimonial</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('all.testimonial')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div>All Testimonial</div>
                        </a>
                    </li>

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        @php
                                        $user_id = Illuminate\Support\Facades\Auth::id();
                                        $user_img = App\Models\User::where('id', $user_id)->value('img');
                                        $user_name = App\Models\User::where('id', $user_id)->value('name');
                                        @endphp
                                        <img src="{{asset($user_img)}}" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">

                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{asset($user_img)}}" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{$user_name}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('user.profile')}}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                            <button type="submit" class="btn">
                                            <i class="bx bx-power-off me-2"></i> Log Out
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('backend/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('backend/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('backend/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('backend/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('backend/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
