@extends('layouts.app')

@section('title', 'Blog | Bem executive school')

@section('content')
<br><br>

<section class="pb-8">
    <div class="container">
        <h2>Actualité</h2>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <!-- Card -->
                <div class="card mb-4 shadow-lg card-lift">
                    <a href="blog-single.html">
                        <img src="../assets/images/blog/blogpost-3.jpg" class="card-img-top" alt="publication de blog">
                    </a>
                    <!-- Card body -->
                    <div class="card-body">
                        <a href="#" class="fs-5 fw-semibold d-block mb-3 text-danger">Tutoriel</a>
                        <h3>
                            <a href="blog-single.html" class="text-inherit">Comment devenir Développeur Stack moderne en 2020</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, accusamus in, tempor dictum nequrem ipsum...</p>
                        <!-- Media content -->
                        <div class="row align-items-center g-0 mt-4">
                            <div class="col-auto">
                                <img src="../assets/images/avatar/avatar-7.jpg" alt="avatar" class="rounded-circle avatar-sm me-2">
                            </div>
                            <div class="col lh-1">
                                <h5 class="mb-1">Reva Yokk</h5>
                                <p class="fs-6 mb-0">5 septembre 2020</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs-6 mb-0">20 min de lecture</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <!-- Card -->
                <div class="card mb-4 shadow-lg card-lift">
                    <a href="blog-single.html">
                        <img src="../assets/images/blog/blogpost-1.jpg" class="card-img-top" alt="publication de blog">
                    </a>
                    <!-- Card body -->
                    <div class="card-body">
                        <a href="#" class="fs-5 fw-semibold d-block mb-3 text-danger">Tutoriel</a>
                        <h3>
                            <a href="blog-single.html" class="text-inherit">Qu'est-ce qu'une fonction PHP ? Guide pour débutants</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, accusamus in, tempor dictum nequrem ipsum...</p>
                        <!-- Row  -->
                        <div class="row align-items-center g-0 mt-4">
                            <div class="col-auto">
                                <img src="../assets/images/avatar/avatar-8.jpg" alt="avatar" class="rounded-circle avatar-sm me-2">
                            </div>
                            <div class="col lh-1">
                                <h5 class="mb-1">Lisa Menon</h5>
                                <p class="fs-6 mb-0">6 septembre 2020</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs-6 mb-0">8 min de lecture</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <!-- Card -->
                <div class="card mb-4 shadow-lg card-lift">
                    <a href="blog-single.html">
                        <img src="../assets/images/blog/blogpost-4.jpg" class="card-img-top" alt="publication de blog">
                    </a>
                    <!-- Card body -->
                    <div class="card-body">
                        <a href="#" class="fs-5 fw-semibold d-block mb-3 text-danger">Tutoriel</a>
                        <h3>
                            <a href="blog-single.html" class="text-inherit">Qu'est-ce que la cybersécurité ? Guide pour débutants</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, accusamus in, tempor dictum nequrem ipsum...</p>
                        <!-- Media content -->
                        <div class="row align-items-center g-0 mt-4">
                            <div class="col-auto">
                                <img src="../assets/images/avatar/avatar-9.jpg" alt="avatar" class="rounded-circle avatar-sm me-2">
                            </div>
                            <div class="col lh-1">
                                <h5 class="mb-1">Maria Pinto</h5>
                                <p class="fs-6 mb-0">7 septembre 2020</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs-6 mb-0">15 min de lecture</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

@endsection