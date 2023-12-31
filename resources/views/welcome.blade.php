<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Autoinformation</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.jpg') }}" rel="icon">
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

            <a href="index.html" class="logo">
                <h2>AutoInformation</h2>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>Authentication</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            @guest
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#login">Login</a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#register">Register</a></li>
                            @else
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#logout">Logout</a></li>
                            @endguest
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
                        data-typed-items="Auto Information, Inspirer,Automated Schedule, Task Manager, Converter"></span>
                </h1>
                <p>Inspirer, Automated Schedule, Task Manager, Converter</p>

                <ul class="list-unstyled list-social">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div><!-- End Hero -->

    @auth
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
                                <li data-filter=".filter-quote" class="filter-active">Quote</li>
                                <li data-filter=".filter-schedule">Schedule</li>
                                <li data-filter=".filter-task">Task</li>
                                <li data-filter=".filter-converter">Converter</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <div class="col-lg-6 col-md-4 portfolio-item filter-quote">
                            <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Qutoes</h4>
                                <p>Click to get quotes</p>
                                <form action="{{ route('quote.index') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="quote" value="quote">
                                    <button id="quotes" type="submit"
                                        class="border-0 bg-white portfolio-lightbox preview-link" title="Qutoes"><i
                                            class="bx bx-right-arrow-circle"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 portfolio-item filter-schedule">
                            <img src="{{ asset('assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Automated Schedule</h4>
                                <p>Click to get new schedule</p>
                                <form action="{{ route('schedule.random') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="schedule"
                                        value="Please generate a sample schedule of classes for a high school (SMA) in Indonesia. The subjects to include are Mathematics, Civic Education (PKN), Economics, Biology, English, Indonesian Language, Social Sciences, History, Religion, Chemistry, Physics, and Physical Education (Olahraga). The schedule should cover Monday to Friday, and each day should have a different variation of the schedule. I would like the schedule to be well-organized, with consistent class durations and breaks in between classes">
                                    <button id="newschedule" type="submit"
                                        class="border-0 bg-white portfolio-lightbox preview-link" title="Qutoes"><i
                                            class="bx bx-right-arrow-circle"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 portfolio-item filter-task">
                            <img src="{{ asset('assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Task Manager</h4>
                                <p>Click to get new daily task</p>
                                <form action="{{ route('task.random') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="task"
                                        value="Provide me with an ideal daily task schedule for a teacher working from 6 AM to 4 PM">
                                    <button id="task" type="submit"
                                        class="border-0 bg-white portfolio-lightbox preview-link" title="Qutoes"><i
                                            class="bx bx-right-arrow-circle"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 portfolio-item filter-converter">
                            <img src="{{ asset('assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Converter</h4>
                                <p>Click to convert word to pdf</p>
                                <form action="{{ route('convert.file') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="convert" class="" required>
                                    <button id="convert" type="submit"
                                        class="border-0 bg-white portfolio-lightbox preview-link" title="Qutoes"><i
                                            class="bx bx-right-arrow-circle"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- Response --}}
                    <div class="row">
                        <div class="col-lg-12 col-md-4">
                            @if (isset($quote))
                                <textarea id="textarea" class="textarea form-control" readonly>Response: {{ $quote }}</textarea>
                            @elseif(isset($schedule))
                                <textarea id="textarea" class="textarea form-control" readonly>Response: {{ $schedule }}</textarea>
                            @elseif(isset($task))
                                <textarea id="textarea" class="textarea form-control" readonly>Response: {{ $task }}</textarea>
                            @endif
                        </div>
                    </div>
                    {{-- end Response --}}

                </div>
            </div>
            {{-- end Tools --}}
        </main>
    @endauth

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
    @include('auth.modal')
    {{-- end modal --}}

    @include('sweetalert::alert')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- Link JS --}}
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- AJAX --}}
    {{-- <script src="{{ asset('assets/vendor/bootstrap/js/ajaxcompilations.js') }}"></script> --}}

    {{-- Script --}}
    <script></script>

</body>

</html>
