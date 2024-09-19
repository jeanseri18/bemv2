<!-- resources/views/dashboard/partenaires/create.blade.php -->
@extends('layouts.dashboard')

@section('content')
  <div class="card">
    <form class="needs-validation" method="POST" action="{{ route('partenaires.store') }}" enctype="multipart/form-data" novalidate>
        @csrf
        <!-- Card body -->
        <div class="card-body">
            <!-- Title -->
            <div class="mb-3">
                <label for="titre" class="form-label">Nom du partenire</label>
                <input type="text" id="titre" name="titre" class="form-control text-dark" placeholder="nom du partenire" required>
                <div class="invalid-feedback">Svp entre le nom du partenire.</div>
            </div>

            <!-- Status -->
            <div class="mb-3">
    <label class="form-label">Type</label>
    <div>
        <!-- Bouton radio pour entreprise -->
        <input type="radio" id="entreprise" name="type" value="entreprise" class="btn-check" required>
        <label class="btn btn-outline-secondary" for="entreprise">Entreprise</label>

        <!-- Bouton radio pour école -->
        <input type="radio" id="ecole" name="type" value="ecole" class="btn-check" required>
        <label class="btn btn-outline-secondary" for="ecole">École</label>

        <!-- Message d'erreur si aucun bouton n'est sélectionné -->
        <div class="invalid-feedback">Veuillez sélectionner le type.</div>
    </div>
</div>


            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                <small>Maximum size: 2MB</small>
            </div>

            <!-- Buttons -->
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form> </div>
@endsection
