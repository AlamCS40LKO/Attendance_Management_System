<head>
    <meta charset="utf-8" />
    <title>Dashboard | SAMS - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"    rel="stylesheet"/>

    {{-- <link rel="stylesheet" href="{{ asset('css/student/registrationform.css') }}"> --}}

    
    {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

    <!-- Plugins css -->
    <link href="{{('css/dashboard/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{('css/dashboard/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{asset('js/dashboard/head.js')}}"></script>

    <!-- Bootstrap css -->
    <link href="{{asset('css/dashboard/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{asset('css/dashboard/app.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{asset('css/dashboard/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>
 
 <!-- ========== Topbar Start ========== -->
 <div class="navbar-custom">
    <div class="topbar">
        <div class="topbar-menu d-flex align-items-center gap-1">

            <!-- Topbar Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="index.html" class="logo-light">
                    <img src="assets/images/logo-light.png" alt="logo" class="logo-lg">
                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo-dark">
                    <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg">
                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                </a>
            </div>

        

            <!-- Dropdown Menu -->
            <div class="dropdown d-none d-xl-block">
                    <a class="navbar-brand" href="{{url('/')}}">SAMS</a>
                </a>

            </div>
        </div>

        <ul class="topbar-menu d-flex align-items-center">
    

                                       
            <!-- Light/Darj Mode Toggle Button -->
            <li class="d-none d-sm-inline-block">
                <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                    <i class="ri-moon-line font-22"></i>
                </div>
            </li>

            <li class="d-none d-sm-inline-block">
                <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                    <a class="nav-link" href="{{route('student.signup')}}">Sign Up</a>
                </div>
            </li>

            <!-- User Dropdown -->
            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" href="{{ route('login') }}"aria-haspopup="false" aria-expanded="false">
                    Login
                </a>
                
             </a>
            </li>

        </ul>
    </div>
</div>
