<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Codescandy">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/Logo-BEM-Executive 1.png') }}">
    <link href="{{ asset('assets/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <!-- darkmode js -->
    <script src="{{ asset('assets/js/vendors/darkMode.js') }}" defer></script>

    <!-- Libs CSS -->
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    <link rel="canonical" href="{{ url()->current() }}">
    <link href="{{ asset('assets/libs/dragula/dist/dragula.min.css') }}" rel="stylesheet">
    <title>@yield('title', 'Bem tableau de bord')</title>
    
    @stack('head')
</head>

<body>
    <div id="db-wrapper">
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="vh-100 simplebar-scrollable-y" data-simplebar="init">
                <div class="simplebar-content">
                    <!-- Brand logo -->
                    <a class="navbar-brand" href="{{ url('/dashboard') }}">
                        <img src="{{ asset('assets/Logo-BEM-Executive 1.png') }}" alt="Geeks">
                    </a>
                    <!-- Navbar nav -->
                    <ul class="navbar-nav flex-column" id="sideNavbar">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">
                                <i class="nav-icon fe fe-home me-2"></i>
                                Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blogs.index') }}">
                                <i class="nav-icon fe fe-book me-2"></i>
                                Blogs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('partenaires.index') }}">
                                <i class="nav-icon fe fe-users me-2"></i>
                                Partenaires
                            </a>
                        </li>
                        <!--li class="nav-item">
                            <a class="nav-link" href="{{ route('formations.index') }}">
                            <i class="nav-icon fe fe-award me-2"></i>
                            Formations
                            </a>
                        </li-->
                        <!-- Add more navigation items here -->
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page content -->
        <main id="page-content">
            <div class="header">
                <!-- Navbar -->
                <nav class="navbar-default navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#">
                        <i class="fe fe-menu"></i>
                    </a>
                    <!-- Navbar nav -->
                    <div class="ms-auto d-flex">
                        <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
                            <!-- User Dropdown -->
                            <li class="dropdown ms-2">
                                <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" class="rounded-circle">
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                    <div class="dropdown-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                                <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" class="rounded-circle">
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                                                <p class="mb-0">{{ auth()->user()->email }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                   <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{ url('/logout') }}"><i class="fe fe-power me-2"></i>Déconnexion</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <!-- Affichage des messages d'erreur et de succès -->
            <div class="container-fluid p-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    <!-- Modal -->
    @yield('modal')

    <!-- Scripts -->
    <script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/dragula/dist/dragula.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/vendors/customDragula.js') }}" defer></script>
    <script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/vendors/flatpickr.js') }}" defer></script>
    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/vendors/choice.js') }}" defer></script>

    @stack('scripts')
</body>
</html>
