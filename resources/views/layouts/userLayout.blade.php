<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{__('comon.title_project')}}</title>
    <meta name="description" content="مدير المهام task management">
    <meta name="keywords" content="مدير المهام task management">
    <!-- Favicons -->
    <link href="{{asset('assets/img/logo-app.png')}}" rel="icon">
    <link href="{{asset('assets/img/logo-app.png')}}" rel="apple-touch-icon">
    <!-- Favicons -->
    <!-- Vendor CSS Files -->
    <!-- SweetAlert CSS -->
    <!-- SweetAlert JS -->
    <link href="{{ asset('assets/css/flaction.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free-6.4.2-web/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free-6.4.2-web/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free-6.4.2-web/css/solid.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>
<!-- ======= Header ======= -->

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <div class="circle-logo">
                <img src="{{asset('assets/img/logo-app.png')}}" alt="مخلخ">
            </div>
            <span class="d-none d-lg-block">Task Management</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
</header><!-- End Header -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('task.list')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('task.index')}}">
{{--                <span class="icon flaticon-notepad-1"></span>--}}
                <i class="icon flaticon-notepad-1"></i>
                <span>Manage Tasks</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-newspaper"></i>
                <span>All Tasks</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('task.today')}}">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Today Tasks</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
               this.closest('form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Log out</span>
                </a>
            </li><!-- End Blank Page Nav -->
        </form>
    </ul>

</aside>
<!-- End Sidebar-->


<main id="main" class="main">

    @yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!--  Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.all.js') }}"></script>

</body>
</html>
