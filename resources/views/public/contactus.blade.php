@extends('layouts.app')

@section('title', 'Contactez nous | Bem executive school')

@section('content')<section class="py-8 bg-light border-bottom border-gray-800">
    <div class="container">
    <div class="mb-6" style="background:#FF324A">
            <iframe
                width="100%"
                height="400"
                style="border:0;"
                loading="lazy"
                allowfullscreen
                src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=Bureau+Abidjan,Bureau+Douala,Bureau+Dakar,Bureau+Paris">
            </iframe>
        </div>

        <div class="row align-items-center gy-4 gy-lg-0">
            
            <div class="col-lg-7 ps-lg-6">
            <div class="mb-6">
                    <span class="fw-semibold text-primary">Contact</span>
                    <h2 class="h1 mt-3 mb-0">Contactez-nous</h2>
                    <p class="mb-0">Nous sommes là pour vous aider à atteindre vos objectifs et répondre à toutes vos questions. Contactez-nous par les canaux suivants :</p>
                </div>
                <div class="card">
                    <div class="card-body p-6">
                        <div>
                            <h3 class="mb-4">Pour plus d'informations ou pour planifier une consultation, remplissez notre formulaire de contact.</h3>
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
                                            <input type="text" class="form-control" placeholder="" id="contactWhatsNumber" required="">
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
            <div class="col-lg-5">
             
                <div class="row gy-4 gy-lg-0">
                    <br>
                    <div class="col-md-12"><br><br><br><br><br><br>
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
        </div>
    </div>
</section>
@endsection