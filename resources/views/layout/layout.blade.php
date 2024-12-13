<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Tours" />
        <meta name="author" content="potenzaglobalsolutions.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tours</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend/images/logo_ngang.png') }}" />
        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500&amp;family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap"
            rel="stylesheet">
        <!-- CSS Global Compulsory (Do not remove)-->
        <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap/bootstrap.min.css') }}" />
        <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
        <link rel="stylesheet" href="{{ asset('frontend/css/owl-carousel/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/datetimepicker/datetimepicker.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/select2/select2.css') }}" />
        <!-- Template Style -->
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/blog-section/main.css') }}" />
    </head>
</head>

<body>
    <header class="header header-sticky default">
        <nav class="navbar navbar-static-top navbar-expand-lg">
            <div class="container main-header position-relative">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
                <a class="navbar-brand w-25 h-30" href="{{ route('home') }}">
                    <img class="img-fluid w-50 h-30" src="{{ asset('frontend/images/logo_ngang.png') }}" alt="logo">
                </a>
                <div class="navbar-collapse collapse justify-content-end justify-content-lg-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('tours') }}">Tours</a> </li>
                        <li class="nav-item"><a href="{{ route('home') }}#testimonials-section" class="nav-link">Testimonials</a></li>
                        <li class="nav-item"><a href="{{ route('home') }}#blog-section" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{ route('home') }}#contact-section" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            <div class="add-listing">
                <div class="nav-item header-search">
                    <form action="{{ route('tours.search') }}" method="GET" class="d-flex">
                        <input type="text" name="search" value="{{ request()->query('search') }}" class="form-control me-2" placeholder="Search tours..." style="height: calc(2.25rem + 2px);" />
                        <button type="submit" class="btn btn-outline-primary d-flex justify-content-center align-items-center" style="height: calc(2.25rem + 2px);"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>

            </div>
        </nav>
    </header>
    <main>
        <main>
            @yield('content')
        </main>
    </main>
    <footer class="footer">
        <div class="min-footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <a class="footer-logo" href="{{ route('home') }}">
                            <img class="img-fluid" src="{{ asset('frontend/images/logo.png') }}" alt="logo">
                        </a>
                        <p class="mt-4 mb-0">Let's explore, experience and share your passion for travel with us.
                        </p>
                        <div class="social-icon mt-4 mt-lg-5">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-5 mt-lg-0">
                        <div class="footer-link">
                            <h6 class="footer-title fw-600">Contact us</h6>
                            <div class="footer-contact-info">
                                <ul class="list-unstyled mb-0">
                                    <li><img class="img-fluid" src="{{ asset('frontend/images/address.png') }}" alt="#"><span class="address">27 - 29 Gia Ngu Street, Hoan Kiem, Ha Noi</span></li>
                                    <li><img class="img-fluid" src="{{ asset('frontend/images/phone.png') }}" alt="#"><span class="phone">398752810</span>
                                    </li>
                                    <li><img class="img-fluid" src="{{ asset('frontend/images/email.png') }}" alt="#"><span
                                            class="email">kimhang@gmail.com</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-5 mt-lg-0 position-relative">
                        <img class="img-fluid footer-map"
                            src="{{ asset('frontend/images/ninh_binh.jpg') }}" alt="logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center copyright">
                    <div class="col-12 col-md-6 text-center text-md-start">
                        <div class="copyright-menu footer-menu">
                            <ul class="mb-0 justify-content-center justify-content-md-start">
                                {{-- <li><a class="text-black" href="{{ route('') }}">Admin</a></li> --}}

                                <li><a class="text-black" href="#">Privacy Policy </a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <div id="back-to-top" class="back-to-top">
        <a href="#"><i class="fas fa-angle-up"></i></a>
    </div>
</body>

</html>
<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
<script src="{{ asset('frontend/js/popper/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js') }}"></script>
<!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
<script src="{{ asset('frontend/js/select2/select2.full.js') }}"></script>
<script src="{{ asset('frontend/js/datetimepicker/moment.min.js') }}"></script>
<script src="{{ asset('frontend/js/datetimepicker/datetimepicker.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/horizontal-timeline/horizontal-timeline.js') }}"></script>
<!-- Template Scripts (Do not remove)-->
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>