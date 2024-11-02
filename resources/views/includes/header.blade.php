<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$meta['title']}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{$meta['keywords']}}" name="keywords">
    <meta content="{{$meta['description']}}" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon/favicon.ico')}}" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset('libs/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('libs/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('libs/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="{{asset('img/icons/icon-1.png')}}" alt="Icon">
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                  <a class="text-body px-2" href="tel:+0123456789"><i class="fa fa-phone-alt text-primary me-2"></i><strong class="text-light">+012 345 6789</strong></a>
                    <a class="text-body px-2" href="mailto:info@example.com"><i class="fa fa-envelope-open text-primary me-2"></i><strong class="text-light">info@example.com</strong></a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="">Terms</a>
                    <a class="text-body px-2" href="">Privacy</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{URL::to('/')}}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="match-color m-0"><img class="me-3" src="{{ asset('img/icons/icon-1.png')}}" alt="Icon">PrismTecHub</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{URL::to('/')}}" class="nav-item nav-link{{ empty(Route::currentRouteName()) ? ' active':'' }}">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link{{ Route::currentRouteName() == 'about' ? ' active':'' }}">About</a>
                <a href="{{route('service')}}" class="nav-item nav-link{{ Route::currentRouteName() == 'service' ? ' active':'' }}">Services</a>
                <a href="{{route('testimonial')}}" class="nav-item nav-link{{ Route::currentRouteName() == 'testimonial' ? ' active':'' }}">Testimonial</a>
                
                <a href="{{route('contact')}}" class="nav-item nav-link{{ Route::currentRouteName() == 'contact' ? ' active':'' }}">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->