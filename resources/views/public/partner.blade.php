@extends('layouts.app')

@section('title', 'Partenaire | bem executive')

@section('content')
<style>
.cards {
    margin: 10px;
    width: 30%;
    /* Ajustez cette valeur selon vos besoins */
}

.card-container {
    margin: 20px;
    /* Ajouter du padding pour l'intérieur des cartes */
    border: 1px solid white;
    /* Optionnel: ajouter une bordure pour mieux voir les cartes */
    border-radius: 8px;
    /* Optionnel: ajouter des coins arrondis */
}
</style>
<section class="bg-light"
    style="    background: linear-gradient(#1765AAA3,#1765AA9D), url('../../assets/community-act-care-kindness-cinematic-style 2-2-2.png') no-repeat right; background-size: auto; background-position: right;height:550px">

    <div class="container">
        <div><BR>
            <div class="row py-8s align-items-center gy-8">
                <div class="col-xl-7 col-lg-7 rounded-4" style="background:#FFFFFFA3;">
                    <div class="container"><br><br>
                        <span class="text-primary fw-semibold">Bienvenue à BEM EXECUTIVE EDUCATION</span>
                        <h1 class="display-3 my-3" style="color:black;">Construisons ensemble l'avenir du leadership
                        </h1>
                        <p class="mb-5" style="color:black;">

                            Nous collaborons avec des entreprises visionnaires pour développer des formations sur
                            mesure, adaptées aux défis contemporains des organisations. Devenez partenaire de BEM
                            EXECUTIVE EDUCATION et transformez vos équipes en leaders d'exception.</p><br><br>
                    </div>
                </div>
            </div>
</section>
<br><br>
<div class="container ">
    <div class="row mb-8 justify-content-center">
        <div class="col-lg-8 col-md-12 col-12 text-center">
            <!-- caption -->
            <span class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl"> Nos Partenariats Entreprises :
            </span>
            <h2 class="mb-2 display-4 fw-bold"> Un investissement stratégique</h2>
            <p class="lead mb-0">


               </p>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 card cards">
            <!-- features -->
            <div class="card-container">
                <!-- icon -->
                <div class="display-4 text-primary">
                    <i class="fe fe-settings"></i>
                </div>
                <!-- para -->
                <div class="mt-4">
                    <h3>Formations sur mesure</h3>
                    <p class="fs-4 mb-0">
                        Nos programmes de formation sont spécifiquement adaptés aux défis de votre organisation, qu'il
                        s'agisse de leadership, de gestion du changement, ou d'innovation.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12  card cards">
            <!-- features -->
            <div class="card-container">
                <!-- icon -->
                <div class="display-4 text-primary">
                    <i class="fe fe-user"></i>
                </div>
                <!-- para -->
                <div class="mt-4">
                    <h3>Renforcement des capacités</h3>
                    <p class="fs-4 mb-0">
                        Grâce à nos experts et à notre méthodologie éprouvée, nous aidons vos équipes à développer les
                        compétences nécessaires pour naviguer avec succès dans un environnement concurrentiel et en
                        constante évolution.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 card cards">
            <!-- features -->
            <div class="card-container">
                <!-- icon -->
                <div class="display-4 text-primary">
                    <i class="fe fe-award"></i>
                </div>
                <!-- para -->
                <div class="mt-4">
                    <h3>Partenariat stratégique</h3>
                    <p class="fs-4 mb-0">
                        Collaborez avec nous pour co-construire des solutions innovantes qui répondent aux besoins
                        spécifiques de votre secteur.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<section class="my-xl-7 py-5">
    <div class="container" data-cue="fadeIn" data-show="true"
        style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="text-center mb-7 pb-2">
                    <h2 class="mb-3">Découvrez Nos Partenaires Entreprises :</h2>
                    <p class="mb-0">
                    Chez BEM EXECUTIVE EDUCATION, nous comprenons les besoins des entreprises de haut niveau. Nos
                partenariats vous permettent d'accéder à des formations personnalisées et adaptées à vos objectifs
                stratégiques, tout en bénéficiant de notre expertise en développement du leadership et en transformation
                organisationnelle.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mb-7 pb-2 text-center justify-content-center g-0">
            <div class="col-lg-12 col-12">
                <div class="marquee" data-cue="slideInLeft" data-show="true"
                    style="animation-name: slideInLeft; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="track">
     @foreach($partenaires as $partenaire)
                        <a href="#" class="btn btn-light rounded-pill me-1 mb-3 btn-logo btn-lift">
                            <span> @if($partenaire->image)
                                        <img src="{{ Storage::url($partenaire->image) }}" alt="{{ $partenaire->titre }}" class="icon-xs">
                                        @else
                                        <img src="../assets/images/default-placeholder.jpg" class="icon-xs"
                                            alt="Image par défaut">
                                        @endif</span>
                            <span class="ms-1 d-none d-lg-inline-flex">{{ $partenaire->titre }}</span>

                        </a>

@endforeach
                    </div>
                </div>
            </div>

        </div>

        </div>

    </div>
</section>
<!--div class="col-xl-12  col-md-12 col-12">
    <div class="bg-white ">
        <div class="container mt-lg-6">
            <div class="row mb-6 justify-content-center">
                <div class="col-lg-12 col-md-12 col-12 text-left">
                    <h2 class=" mb-0 d-block  fw-semibold ls-xl"></h2>
                </div>
            </div>
            <div class="table-responsive-lg">
                <div class="row flex-nowrap">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/unnamed 1.png" alt="logo" height="70px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/MTN-Logo 1.png" alt="logo" height="70px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/Logo-NSIA-BANK 1.png" alt="logo" height="70px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/logo-coris-bank 1.png" alt="logo" height="70px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/images.png" alt="logo" height="70px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/the-pan-african-bank-ecobank-logo-11563959485cpume2ktri-removebg-preview 1.png"
                                alt="logo" height="70px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->


<!--section class=" bg-primary" style="color:white">
    <div class="container my-lg-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 ">
                 <br><br><br>
                <font class=" fw-bold " style="color:white;font-size:100px">
                <center>    L’EXCELLENCE DE NOS PARTENARIATS</center>
                </font>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 ">
                <p class="lead"><center>Nous sommes fiers de notre engagement envers l'excellence à travers nos partenariats.</center></p>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="border-top pt-4 mt-6 mb-5">
                    <center>
                    <h1 class="display-3 fw-bold mb-0" style="color:white">+10</h1>
                    <p class="text-uppercase">Événements Parrainés</p>
</center> </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="border-top pt-4 mt-6 mb-5">
                    <center>
                    <h1 class="display-3 fw-bold mb-0" style="color:white"> +150</h1>
                    <p class="text-uppercase">Entreprises Partenaires</p>
</center> </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="border-top pt-4 mt-6 mb-5">
                    <center>
                    <h1 class="display-3 fw-bold mb-0" style="color:white">+150</h1>
                    <p class="text-uppercase">Projets Collaboratifs Réalisés</p>
</center> </div>
            </div>
        </div>
    </div>
</section-->

<section class="py-xl-9 py-5 bg-gray-100">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5 col-md-6">
                     <div class="mb-7 mb-md-0 me-lg-7" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <div class="mb-4">
                           <h2 class="mb-3">Pourquoi devenir Partenaire ?</h2>
                           <p class="mb-0">

Nos entreprises partenaires bénéficient de multiples avantages qui renforcent leur compétitivité :</p>
                        </div>

                        <a href="#!" class="btn btn-outline-primary">Service client</a>
                        <span class="ms-3">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone text-primary" viewBox="0 0 16 16">
                              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                           </svg>
                        </span>
                        <span class="ms-2 text-primary">(000) 123-4567</span>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                   
                     <div class="py-4 border-bottom">
                        <h4 class="mb-3">  Accès privilégié à nos talents :</h4>
                        <p class="mb-0">
                       Identifiez et recrutez des professionnels formés à haut niveau pour répondre aux besoins de votre organisation.                        </p>
                     </div>
                     <div class="py-4 border-bottom">
                        <h4 class="mb-3"> Co-développement de solutions innovantes :</h4>
                        <p class="mb-0">
                        Participez à la création de programmes de formation adaptés aux réalités de votre industrie et aux enjeux stratégiques de votre entreprise.                        </p>
                     </div>
                     <div class="py-4 border-bottom">
                        <h4 class="mb-3"> Visibilité et réseau : </h4>
                        <p class="mb-0">
                       Profitez de notre réseau international de décideurs, d'experts et de leaders d'opinion pour renforcer votre influence et vos opportunités de croissance.                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
<div class=" py-8 container rounded-4">
    <div class="">
        <span class="fw-semibold display-2">Contact</span>
        <h2 class="h1 mt-3 mb-0 text-white"> Visibilité et réseau : </h2>

    </div>
    <div class="card">
        <div class="card-body p-6">
            <div>
                <h3 class="mb-4">En collaborant avec BEM EXECUTIVE EDUCATION, vous rejoignez un réseau de leaders qui façonnent l'avenir des affaires et du management. Ensemble, nous développons des solutions qui transforment non seulement vos équipes, mais aussi votre organisation dans son ensemble.
                    </h3>
                <form>
                    <div class="row">
                        <div class="col-xl-6 col-12">
                            <div class="mb-3">
                                <label for="contactName" class="form-label">
                                    Nom
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="" id="contactName" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="mb-3">
                                <label for="contactPhone" class="form-label">
                                    Téléphone
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="" id="contactPhone" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="mb-3">
                                <label for="contactWhatsNumber" class="form-label">
                                    Numéro Whatsapp
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="" id="contactWhatsNumber"
                                    required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="mb-3">
                                <label for="contactEmail" class="form-label">
                                    Email
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="email" class="form-control" placeholder="" id="contactEmail" required="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="contactsubject" class="form-label">Objet</label>
                                <input type="text" class="form-control" placeholder="" id="contactsubject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="contactMessage" class="form-label">Message</label>
                                <textarea rows="3" class="form-control" placeholder="" id="contactMessage"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Envoyer la demande</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br><br>


@endsection