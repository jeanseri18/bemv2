<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">
<head>
    <!-- Balises meta requises -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Codescandy">

    <!-- Icône de favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">

    <!-- JS pour le mode sombre -->
    <script src="{{ asset('assets/js/vendors/darkMode.js') }}"></script>

    <!-- CSS des bibliothèques -->
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">

    <!-- CSS du thème -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    <link rel="canonical" href="{{ route('register') }}">
    <title>Inscription | Geeks - Template Bootstrap 5</title>
</head>
<body>
    <!-- Contenu de la page -->
    <main>
        <section class="container d-flex flex-column vh-100">
            <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
                <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                    <!-- Carte -->
                    <div class="card shadow">
                        <!-- Corps de la carte -->
                        <div class="card-body p-6 d-flex flex-column gap-4">
                            <div>
                                <a href="#"><img src="{{ asset('assets/Logo-BEM-Executive 1.png') }}" class="mb-4" alt="logo-icon"></a>
                                <div class="d-flex flex-column gap-1">
                                    <h1 class="mb-0 fw-bold">Inscription</h1>
                                </div>
                            </div>
                            <!-- Affichage des erreurs -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- Formulaire -->
                            <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
                                @csrf
                                <!-- Nom -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nom</label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Votre nom" value="{{ old('name') }}" required="">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Adresse email" value="{{ old('email') }}" required="">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Mot de passe -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="**************" required="">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Confirmation du mot de passe -->
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirmez le mot de passe</label>
                                    <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="**************" required="">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <!-- Bouton -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="mt-4 text-center">
                                    <!-- Boutons des réseaux sociaux -->
                                    <!-- Ajoutez des boutons pour les réseaux sociaux si nécessaire -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Scripts -->
    <!-- JS des bibliothèques -->
    <script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- JS du thème -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    <script src="{{ asset('assets/js/vendors/validation.js') }}"></script>
</body>
</html>
