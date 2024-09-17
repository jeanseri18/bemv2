<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />

    <!-- Darkmode JS -->
    <script src="{{ asset('assets/js/vendors/darkMode.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/libs/tiny-slider/dist/tiny-slider.css') }}" />
    <title>@yield('title', 'Homepage | Geeks - Bootstrap 5 Template')</title>
</head>

<body class="bg-white">
    <!-- Page Content -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container px-0">
        <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('assets/Logo-BEM-Executive 1.png') }}" alt="Geeks" /></a>
        <div class="ms-auto d-flex align-items-center order-lg-3">
            <div class="d-flex gap-2 align-items-center">
                <a href="{{ route('contact-us') }}" class="btn btn-dark d-none d-md-block">Contactez nous</a>
            </div>
        </div>
        <div>
            <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar mt-0"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-default">
            <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                <li><a href="{{ route('about') }}" class="dropdown-item">A propos</a></li>
                <li><a href="{{ route('formation') }}" class="dropdown-item">Formations</a></li>
                <li><a href="{{ route('partner') }}" class="dropdown-item">Entreprise partenaire</a></li>
                <li><a href="{{ route('events') }}" class="dropdown-item">Agenda et event</a></li>
            </ul>
        </div>
    </div>
</nav>


    <main>
        <!-- Hero Section -->
        @yield('content')
        <!-- Trusted -->
    </main>
<!-- Footer -->
<!-- Footer -->
<footer class="footer bg-dark-stable py-8">
    <div class="container">
        <div class="row gy-6 gy-xl-0 pb-8">
            <div class="col-xl-3 col-lg-12 col-md-6 col-12">
                <div class="d-flex flex-column gap-4">
                    <div>
                        <img src="{{ asset('assets/Logo-BEM-Executive 1.png') }}" alt="Geeks logo" />
                    </div>
                    <p class="mb-0">Fondée sur la solide réputation de BEM Management School, l’Executive Education de BEM s’affirme comme le pilier de la formation exécutive en Afrique.</p>
                  
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="d-flex flex-column gap-4">
                    <span class="text-white-stable">Nos Formations</span>
                    <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                        <li><a href="#" class="nav-link">Formation continue</a></li>
                        <li><a href="#" class="nav-link">Formation executive</a></li>
                        <li><a href="#" class="nav-link">Formation pour organisation</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="d-flex flex-column gap-3">
                    <span class="text-white-stable">Pages</span>
                    <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                        <li><a href="{{ route('about') }}" class="nav-link">A propos</a></li>
                        <li><a href="{{ route('partner') }}" class="nav-link">Entreprise partenaire</a></li>
                        <li><a href="{{ route('events') }}" class="nav-link">Agenda et événement</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="d-flex flex-column gap-3">
                    <span class="text-white-stable">Suivez nous sur </span>
                    <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                        <li><a href="https://www.facebook.com" class="nav-link" target="_blank">Facebook</a></li>
                        <li><a href="https://www.linkedin.com" class="nav-link" target="_blank">LinkedIn</a></li>
                        <li><a href="https://www.instagram.com" class="nav-link" target="_blank">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-12">
                <div class="d-flex flex-column gap-5">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-white-stable">Contact</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>Email<a href="mailto:hello@skillbridge.com" class="fw-semibold">hello@skillbridge.com</a></li>
                            <li>Bureau d'Abidjan & de Douala: <a href="tel:+2250769816200" class="fw-semibold">(+225) 07 69 81 62 00</a></li>
                            <li>Bureau de Dakar:<a href="tel:+221786082397" class="fw-semibold">(+221) 78 608 23 97</a></li>
                            <li>Bureau de Paris: <a href="tel:(+33) 00 0000 0000" class="fw-semibold">(+33) 00 0000 0000</a></li>
                        </ul>
                    </div>
                    <div class="d-flex flex-row gap-2">
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark py-4">
            <div class="container text-center">
                <span class="text-white">© 2024 BEM EXECUTIVE EDUCATION. Tous droits réservés.</span>
            </div>
        </div>
    </div>
</footer>



    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tnsSlider.js') }}"></script>
</body>
</html>
