@extends('layouts.app')

@section('title', 'Evenements | Bem executive school')

@section('content')
<br><br>
<style>
    .card {
    overflow: hidden; /* Éviter que les images débordent du conteneur */
}

.item {
    display: flex;
    justify-content: center; /* Centrer les éléments horizontalement */
    align-items: center; /* Centrer les éléments verticalement */
}

.card-img-top {
    width: 100%;
    height: 200px; /* Hauteur fixe pour toutes les images */
    object-fit: cover; /* Couvrir le conteneur sans déformation */
}
</style>
<!-- Section des Webinaires -->
<section class="pb-8">
    <div class="container">
        <h2>Webinaires</h2>

        <div class="position-relative">
            <ul class="controls" id="webinarCarouselControls" aria-label="Carousel Navigation" tabindex="0">
                <li class="prev" aria-controls="webinarCarousel" tabindex="-1" data-controls="prev">
                    <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next" aria-controls="webinarCarousel" tabindex="-1" data-controls="next">
                    <i class="fe fe-chevron-right"></i>
                </li>
            </ul>
            <div class="tns-outer" id="webinarCarousel-ow">
                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span
                        class="current">1 to {{ count($webinars) }}</span> of {{ count($webinars) }}</div>
                <div id="webinarCarousel-mw" class="tns-ovh">
                    <div class="tns-inner" id="webinarCarousel-iw">
                        <div class="sliderFirst tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="webinarCarousel"
                            style="transform: translate3d(-50%, 0px, 0px);">
                            
                            @foreach($webinars as $webinar)
                            <div class="item tns-item container" aria-hidden="true" tabindex="-1">
                                <!-- Card -->
                                <div class="card shadow-lg card-lift">
                                    <a href="{{ route('event.show', $webinar->id) }}">
                                        @if($webinar->image)
                                        <img src="{{ Storage::url($webinar->image) }}" alt="{{ $webinar->titre }}" class="card-img-top">
                                        @else
                                        <img src="../assets/images/default-placeholder.jpg" class="card-img-top"
                                            alt="Image par défaut">
                                        @endif
                                    </a>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        
                        <h3 class="mb-4 text-truncate">
                            <a href="#!" class="text-inherit">{{ $webinar->titre }}</a>
                        </h3>
                        <div class="mb-4">
                            <div class="mb-3 lh-1">
                                <span class="me-1">
                                    <i class="bi bi-calendar-check"></i>
                                </span>
                                <span>{{ $webinar->date }} </span>
                            </div>
                            <div class="lh-1">
                                <span class="align-text-top me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                        class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                        </path>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                        </path>
                                    </svg>
                                </span>
                                <span>@if($webinar->heure) à {{ $webinar->heure }} @endif</span>
                            </div>
                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section des Événements -->
<section class="pb-8">
    <div class="container">
        <h2>Événements</h2>

        <div class="position-relative">
            <ul class="controls" id="eventCarouselControls" aria-label="Carousel Navigation" tabindex="0">
                <li class="prev" aria-controls="eventCarousel" tabindex="-1" data-controls="prev">
                    <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next" aria-controls="eventCarousel" tabindex="-1" data-controls="next">
                    <i class="fe fe-chevron-right"></i>
                </li>
            </ul>
            <div class="tns-outer" id="eventCarousel-ow">
                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span
                        class="current">1 to {{ count($events) }}</span> of {{ count($events) }}</div>
                <div id="eventCarousel-mw" class="tns-ovh">
                    <div class="tns-inner" id="eventCarousel-iw">
                        <div class="sliderFirst tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="eventCarousel"
                            style="transform: translate3d(-50%, 0px, 0px);">
                            
                            @foreach($events as $event)
                            <div class="item tns-item container" aria-hidden="true" tabindex="-1">
                                <!-- Card -->
                                <div class="card shadow-lg card-lift">
                                    <a href="{{ route('event.show', $event->id) }}">
                                        @if($event->image)
                                        <img src="{{ Storage::url($event->image) }}" alt="{{ $event->titre }}" class="card-img-top">
                                        @else
                                        <img src="../assets/images/default-placeholder.jpg" class="card-img-top"
                                            alt="Image par défaut">
                                        @endif
                                    </a>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        
                        <h3 class="mb-4 text-truncate">
                            <a href="#!" class="text-inherit">{{ $event->titre }}</a>
                        </h3>
                        <div class="mb-4">
                            <div class="mb-3 lh-1">
                                <span class="me-1">
                                    <i class="bi bi-calendar-check"></i>
                                </span>
                                <span>{{ $event->date }} </span>
                            </div>
                            <div class="lh-1">
                                <span class="align-text-top me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                        class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                        </path>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                        </path>
                                    </svg>
                                </span>
                                <span>@if($event->heure) à {{ $event->heure }} @endif</span>
                            </div>
                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inclure le CSS de Tiny Slider -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">

<!-- Inclure le JS de Tiny Slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        tns({
            container: '#webinarCarousel',
             responsive: {
        640: {
            items: 2,
        },
        
        768: {
            items: 3,
        }
    },

            slideBy: 'page',
            autoplay: false,
            nav:false,
            autoplayButtonOutput: false,

            controlsContainer: '#webinarCarouselControls',
        });

        tns({
            container: '#eventCarousel',
             responsive: {
        640: {
            items: 2,
        },
        
        768: {
            items: 3,
        }
    },

            slideBy: 'page',
            autoplay: false,
            nav:false,
            autoplayButtonOutput: false,

            controlsContainer: '#eventCarouselControls',
        });
    });
</script>
@endsection
