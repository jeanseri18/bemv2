@extends('layouts.app')

@section('title', 'Formation | Bem executive school')

@section('content')

        <div class="container px-lg-5 my-lg-8">
          <div class="row align-items-center gy-4 gy-lg-0">
            <div class="col-lg-6">
              
              <img src="../../assets/smiling-diverse-businesspeople-working-together-in-2023-11-27-05-25-41-utc 1.jpg" alt="" class="img-fluid rounded-3 w-100" height="300">
            </div>
            <div class="col-lg-6 col-12 ">
              <div class="mb-5">
                <h2 class="h1 my-3">Formation pour Organisations

</h2>
                <p class="mb-0" style="font-size:18px">

Réservée aux dirigeants et cadres supérieurs,<br> notre formation exécutive vous aide à affiner vos capacités de leadership stratégique et à naviguer les complexités du monde des affaires globalisé. <br><br>Ces programmes exclusifs sont conçus pour les leaders visionnaires souhaitant avoir un impact immédiat et durable dans leur organisation.   <br><br>    </p>
              </div>
              <a href="{{ route('formationorg') }}" class="btn btn-primary ">En savoir plus</a>
<br>
            </div>
          </div>
        </div>



<hr color="#FF324A">



              <div class="container px-lg-6 my-lg-8">
          <div class="row align-items-center gy-4 gy-lg-0">
            
            <div class="col-lg-6 col-12 ms-lg-8">
              <div class="mb-5">
                <h2 class="h1 my-3">Formation Continue</h2>
                <p class="mb-0" style="font-size:18px">
                Évoluez dans votre carrière grâce à des parcours de formation continue adaptés aux cadres actifs.<br><br> Nos programmes certifiants vous permettent d’acquérir de nouvelles compétences tout en conciliant vie professionnelle et développement personnel.<br><br> Choisissez parmi une sélection de domaines stratégiques tels que la finance, le marketing, ou la transformation digitale.<br></p>
            </div>
            <a href="{{ route('formationcontinue') }}" class="btn btn-primary ">En savoir plus</a>

            </div>
            <div class="col-lg-5">
              
              <img src="../../assets/people-office-work-day 5.png" alt="" class="img-fluid rounded-3 w-100">
            </div>
          </div>
        </div>




        <hr color="#FF324A">







        <div class="container px-lg-6 my-lg-8">
          <div class="row align-items-center gy-4 gy-lg-0">
            <div class="col-lg-6">
              
              <img src="../../assets/people-office-work-day 4.png" alt="" class="img-fluid rounded-3 w-100">
            </div>
            <div class="col-lg-5 col-12 ms-lg-8">
              <div class="mb-5">
                <h2 class="h1 my-3">Formation Exécutive</h2>
                <p class="mb-0" style="font-size:18px">
                Réservée aux dirigeants et cadres supérieurs,<br> notre formation exécutive vous aide à affiner vos capacités de leadership stratégique et à naviguer les complexités du monde des affaires globalisé.<br> <br>Ces programmes exclusifs sont conçus pour les leaders visionnaires souhaitant avoir un impact immédiat et durable dans leur organisation.<br><br></p>
              </div>
              <a href="{{ route('formationexec') }}" class="btn btn-primary ">En savoir plus</a>
<br>
            </div>
          </div>
        </div>
@endsection