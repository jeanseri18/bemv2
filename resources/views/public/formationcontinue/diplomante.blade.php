@extends('layouts.app')

@section('title', 'Formation diplomante | Bem executive school')

@section('content')
<section class="py-lg-8 py-6 bg-primary">
                <div class="container my-lg-8">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-md-12 col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="mb-5 mb-lg-0">
                                        <h2 class="display-4 fw-bold mb-3 text-white">
                                       Formation
                                            <u class="text-warning"><span class="text-white"> diplomante</span></u>
                                        </h2>
                                        <p class="mb-5 lead text-white">
                                        Donnez un Nouveau Souffle à Votre Carrière avec nos Diplômes de Prestige.
                                      </p>
                                        <a href="#!" class="btn btn-outline-white">Commencez</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                                    <div class="d-flex justify-content-center align-items-center position-relative rounded border-gray-100 border border-4 rounded-3 bg-cover" style="background-image: url(../../assets/images/formationorg/handsome-young-businessman.jpg); height: 300px">
                                        <a class="glightbox icon-shape rounded-circle btn-play icon-xl" href="#">
                                            <i class="fe fe-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


<section class="pb-lg-8 " >
    <div class="container  " style=" padding-left:70px /* 4px */;
    padding-right:70px;"><br>
        <h3>Nos différents types de formation</h3>

        <p>
            <br>
            <br>
            Chez BEM EXECUTIVE EDUCATION, nos formations diplômantes sont conçues pour vous préparer à relever les défis d’un environnement professionnel en constante évolution. Que vous soyez au début de votre carrière ou à un stade avancé, nos programmes diplômants vous offrent les outils nécessaires pour atteindre vos objectifs.
        </p>
<br>
        <div class="col-xl-12  col-md-12 col-12">
                <div class="row gy-4 gy-xl-0">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-lift bg-primary h-100 text-center text-lg-start">
                          
                            <div class="card-body" style=" padding-top:60px /* 4px */; py-4">
                                <h3><a class=" text-white" href="{{ url('https://bem.ci/formation/business-school/mba') }}">Master of Business Administration</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-lift bg-primary h-100 text-center text-lg-start">
                          
                            <div class="card-body "
                            style=" padding-top:60px /* 4px */;
    padding-bottom:60px;">
                                <h3><a class=" text-white" href="{{ url('https://bem.ci/formation/business-school/bachelor') }}">Bachelor – Développement des Compétences en Management</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-lift bg-primary h-100 text-center text-lg-start">
                        
                            <div class="card-body"  style=" padding-top:60px /* 4px */;
    padding-bottom:60px;"><br>
                                <h3><a class=" text-white" href="{{ url('https://bem.ci/formation/business-school/msc') }}">MSc – Master of Science</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

        @include('layouts.contact')


</section>
@endsection