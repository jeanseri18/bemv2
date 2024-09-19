@extends('layouts.app')

@section('title', 'Formation sur mesure | Bem executive school')

@section('content')
<section class="py-lg-8 py-6 bg-gray-100">
                <div class="container my-lg-8">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-md-12 col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="mb-5 mb-lg-0">
                                        <h2 class="display-4 fw-bold mb-3">
                                        Programme sur
                                            <u class="text-warning"><span class="text-primary"> mesure</span></u>
                                        </h2>
                                        <p class="mb-5 lead">
                                            
                                        Des solutions personnalisées pour répondre aux défis spécifiques de
                                        votre entreprise et renforcer vos avantages concurrentiels.                                      
                                      </p>
                                        <a href="#!" class="btn btn-outline-secondary">Commencez</a>
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

        <p>
            <br>
            <br>
            Les programmes sur-mesure de BEM EXECUTIVE EDUCATION sont conçus pour s'adapter aux besoins uniques de
            chaque organisation. En collaboration étroite avec vos équipes dirigeantes, nous analysons vos objectifs et
            vos défis spécifiques pour développer des formations qui répondent précisément à vos attentes.
        </p>

        @include('layouts.contact')


</section>
@endsection