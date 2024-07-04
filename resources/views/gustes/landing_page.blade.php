<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=1024"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__('comon.title_project')}}</title>
    <!-- Favicons -->
    <link href="{{asset('assets/img/logo-app.png')}}" rel="icon">
    <link href="{{asset('assets/img/logo-app.png')}}" rel="apple-touch-icon">
    <!-- Favicons -->
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free-6.4.2-web/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free-6.4.2-web/css/solid.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/landing-page-style.css')}}" rel="stylesheet">
</head>
<body>
<!-- <div class="header">
</div> -->

<div class="card-fixed">
    <div class="d-flex justify-content-between align-items-center ms-2">
        <h5 class=" fw-bold me-1">Task Management</h5>
        <h3 class=" fw-bold me-1">TM</h3>
        <img src="{{asset('assets/img/logo-app.png')}}" alt="logo">
    </div>
    <div class="d-flex justify-content-between align-items-center me-4 ">
        <div class="btn-box">
            <a href="{{route('login')}}" class="btn-light2">
                login
            </a>
        </div>
    </div>
</div>
<div class="hero-card">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{asset('assets/img/hero.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-info">
                    <h1>
                        Task Management application
                    </h1>
                    <p>
                        A Task Management app is a powerful tool that helps you organize your life.
                    </p>
                    <h1>
                        Try Now
                    </h1>

                    <div class="btn-box">
                        <a href="{{route('register')}}" class="btn-light2">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about app -->
<section class="about section">
    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>features of a task manager</h2>
    </div>
    <div class="container">

        <div class="row gy-2">

            <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                    </li>
                    <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span>
                    </li>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo</span>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

            </div>

        </div>

    </div>
</section>
<!-- End Section about -->

<footer>
    <div class="text-center  d-flex justify-content-center text-white mt-4 mb-3 p-1">
        <p class="mb-0 fw-bold">2024 © Mohammed Bin Abodan </p>
        <a href="https://github.com/Mohammed-Abodan-Jabri" target="_blank">
            <i class="bi bi-github"></i>
        </a>
    </div>
</footer>
</body>
</html>
