@extends('layouts.app')

@section('title', 'Formation | Bem executive school')

@section('content')
<br>
<section class="pb-lg-8">
    <div class="container">
        <!-- Section de formation -->
        <div class="row">
            <div class="col-xl-12  col-md-12 col-12">
                <div class="bg-primary py-6 px-6 px-xl-0 rounded-4">
                    <div class="row align-items-center">
                        <div class="offset-xl-1 col-xl-4 col-md-4 col-4">
                            <h2 class="h1 text-white mb-3">Formations Pour Organisation</h2>
                        </div>
                        <div class="col-xl-6 col-md-6 col-12">
                            <div class="text-center d-none d-md-block">
                                <img src="../../assets/formation.png" alt="learning" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12  col-md-12 col-12">
                <br>
                <h2>Renforcez Votre Organisation avec des Formations d'Excellence</h2>
                <p>
                    Chez BEM EXECUTIVE EDUCATION, nous concevons des solutions de formation spécifiquement adaptées aux
                    besoins des entreprises. Que vous optiez pour nos programmes standards ou que vous choisissiez une
                    solution entièrement personnalisée, nos formations sont conçues pour transformer vos équipes et
                    améliorer la performance organisationnelle.</p>
                <br>
                <h2> Nos Type de formation :</h2><br>
            </div>

            <div class="col-xl-6 col-md-6 col-12">
                <div class="card card-lift h-100 text-center text-lg-start">
                    <div class="p-2">
                        <a href="{{ route('formationcat') }}"><img src="../../assets/images/formationorg/form.jpg" alt=""
                                class="img-fluid rounded-3 w-100"></a>
                    </div>
                    <div class="card-body pt-2">
                        <h3><a class="text-inherit" href="{{ route('formationcat') }}">Formation catalogue
                            </a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <div class="card card-lift h-100 text-center text-lg-start">
                    <div class="p-2">
                        <a href="{{ route('formationprogramme') }}"><img src="../../assets/images/formationorg/handsome-young-businessman.jpg" alt=""
                                class="img-fluid rounded-3 w-100"></a>
                    </div>
                    <div class="card-body pt-2">
                        <h3><a class="text-inherit" href="{{ route('formationprogramme') }}">Programme sur-mesure</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Partenaires -->
    <div class="col-xl-12  col-md-12 col-12">
        <div class="bg-white py-8">
            <div class="container mt-lg-6">
                <div class="row mb-6 justify-content-center">
                    <div class="col-lg-12 col-md-12 col-12 text-left">
                        <span class="text-primary mb-0 d-block text-uppercase fw-semibold ls-xl">Partenaires</span>
                    </div>
                </div>
                <div class="table-responsive-lg">
                    <div class="row flex-nowrap">
                    @foreach($partenaires as $partenaire)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="mb-4 text-center">


                                            @if($partenaire->image)
                                        <img src="{{ Storage::url($partenaire->image) }}"   alt="logo" height="70px">
                                        @else
                                        <img src="../assets/images/default-placeholder.jpg" 
                                            alt="logo" height="70px">
                                        @endif
                                    </div>
                                    
                                </div>

                                @endforeach
                                
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- Formulaire de contact -->
<div class=" container  rounded-4 ">
   <div class="text-left ">
        <span class="fw-semibold display-4">Contact</span>
        <h3 class=" mt-3 mb-0 text-black">Prêt à franchir un nouveau cap dans votre carrière ?</h3>
        <br>
    </div>
    <div class="row">
    <div class=" col-md-6">
    <div class="row gy-4 gy-lg-0">
                    <br>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h4">Bureau d'Abidjan & de Douala</h3>
                                <p class="text-gray-500">Contact : <a href="mailto:contact@bemexecutive.education">contact@bemexecutive.education</a></p>
                                <p class="mb-1 fw-medium">(+225) 07 69 81 62 00</p>
                                <p class="fw-medium mb-0">(+225) 07 69 81 62 00</p>
                            </div>
                        </div>
                    </div><br>
                    <div class="col-md-12"><br>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h4">Bureau de Dakar</h3>
                                <p class="text-gray-500">Contact : <a href="mailto:contact@bemexecutive.education">contact@bemexecutive.education</a></p>
                                <p class="mb-1 fw-medium">(+221) 78 608 23 97</p>
                                <p class="fw-medium mb-0">(+221) 78 608 23 97</p>
                            </div>
                        </div>
                    </div><br>
                    <div class="col-md-12"><br>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h4">Bureau de Paris</h3>
                                <p class="text-gray-500">Contact : <a href="mailto:contact@bemexecutive.education">contact@bemexecutive.education</a></p>
                                <p class="mb-1 fw-medium">(+33) 00 0000 0000</p>
                                <p class="fw-medium mb-0">(+33) 00 0000 0000</p>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <div class="card col-md-6">
        <div class="card-body p-6">
            <form>
                <div class="row">
                    <!-- Nom de l'entreprise -->
                    <div class="col-6 mb-3">
                        <label for="companyName" class="form-label">
                            Nom de l’entreprise
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="companyName" placeholder="Entrez le nom de votre entreprise" required>
                    </div>

                    <!-- Nom et Prénoms -->
                    <div class="col-6 mb-3">
                        <label for="fullName" class="form-label">
                            Nom et Prénoms
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="fullName" placeholder="Entrez votre nom et prénom" required>
                    </div>

                    <!-- Votre Poste -->
                    <div class="col-6 mb-3">
                        <label for="jobTitle" class="form-label">
                            Votre Poste
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="jobTitle" placeholder="Entrez votre poste" required>
                    </div>

                    <!-- Numéro de téléphone -->
                    <div class="col-6 mb-3">
                        <label for="phoneNumber" class="form-label">
                            Numéro de téléphone
                            <span class="text-danger">*</span>
                        </label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Entrez votre numéro de téléphone" required>
                    </div>

                    <!-- Adresse E-mail -->
                    <div class="col-12 mb-3">
                        <label for="email" class="form-label">
                            Adresse E-mail
                            <span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail" required>
                    </div>

                    <!-- Besoin en Formation -->
                    <div class="col-12 mb-3">
                        <label for="trainingNeeds" class="form-label">
                            Votre Besoin en Formation
                            <span class="text-danger">*</span>
                        </label>
                        <textarea class="form-control" id="trainingNeeds" rows="4" placeholder="Décrivez vos besoins en formation" required></textarea>
                    </div>

                    <!-- Bouton de soumission -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Envoyer la demande</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<br>
</div>
</div>

@endsection 