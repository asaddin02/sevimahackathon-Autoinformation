<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Autoinformation</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootsrap/css/custom.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    {{-- Header --}}
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo"><img src="{{ asset('assets/img/logo.png') }}" alt=""
                    class="img-fluid"></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>Authentication</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    {{-- end Header --}}
    <div id="hero" class="home">

        <div class="container">
            <div class="hero-content">
                <h1>I'm <span class="typed"
                        data-typed-items="Auto Information, Inspirer,Automated Schedule, Task Assigner, Converter"></span>
                </h1>
                <p>Inspirer, Automated Schedule, Task Assigner, Converter</p>

                <ul class="list-unstyled list-social">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div><!-- End Hero -->

    <main id="main">
        {{-- Tools --}}
        <div id="portfolio" class="paddsection">
            <div class="container">
                <div class="section-title text-center">
                    <h2>My Tools</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-6 col-md-4 portfolio-item filter-app">
                        <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Qutoes</h4>
                            <p>Click to get quotes</p>
                            <a href="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Qutoes"><i class="bx bx-right-arrow-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 portfolio-item filter-card">
                        <img src="{{ asset('assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="{{ asset('assets/img/portfolio/portfolio-4.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 portfolio-item filter-web">
                        <img src="{{ asset('assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="{{ asset('assets/img/portfolio/portfolio-5.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 portfolio-item filter-app">
                        <img src="{{ asset('assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="{{ asset('assets/img/portfolio/portfolio-6.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>

                {{-- Response --}}
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <textarea id="textarea" class="textarea form-control" readonly>Response:</textarea>
                    </div>
                </div>
                {{-- end Response --}}

            </div>
        </div>
        {{-- end Tools --}}
    </main>

    {{-- Footer --}}
    <div id="footer" class="text-center">
        <div class="container">
            <div class="socials-media text-center">

                <ul class="list-unstyled">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>

            </div>

            <p>&copy; Copyrights Folio. All rights reserved.</p>

            <div class="credits">
                Created <a href="https://bootstrapmade.com/">Prasada Arif Nurudin</a>
            </div>

        </div>
    </div>
    {{-- end Footer --}}

    {{-- modal --}}
    {{-- Modal Login --}}
    {{-- Modal Register --}}
    {{-- end modal --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- Link JS --}}
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Script --}}
    <script>
        $(document).ready(function() {
            var responseText = $('#response').text();
            $('#myTextarea').val(responseText);
        });
    </script>

</body>

</html>
