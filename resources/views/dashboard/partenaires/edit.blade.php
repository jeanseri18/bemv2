<!-- resources/views/dashboard/partenaires/edit.blade.php -->
@extends('layouts.dashboard')

@section('content')  <div class="card>
    <form class="needs-validation" method="POST" action="{{ route('partenaires.update', $partenaire->id) }}" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <!-- Card body -->
        <div class="card-body">
            <!-- Title -->
            <div class="mb-3">
                <label for="titre" class="form-label">Nom du partenaire</label>
                <input type="text" id="titre" name="titre" class="form-control text-dark" value="{{ old('titre', $partenaire->titre) }}" placeholder="nom du partenaire" required>
                <div class="invalid-feedback">Svp entre le nom du partenaire</div>
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label class="form-label">Type</label>
                <div>
                    <input type="radio" id="active" name="statut" value="ecole" class="btn-check" {{ $partenaire->statut === 'ecole' ? 'checked' : '' }} required>
                    <label class="btn btn-outline-secondary" for="active">ecole</label>
                    
                    <input type="radio" id="entreprise" name="statut" value="entreprise" class="btn-check" {{ $partenaire->statut === 'entreprise' ? 'checked' : '' }} required>
                    <label class="btn btn-outline-secondary" for="entreprise">entreprise</label>
                    <div class="invalid-feedback">Svp selectionnez le type.</div>
                </div>
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @if ($partenaire->image)
                    <div class="mt-2">
                        <img src="{{ Storage::url($partenaire->image) }}" alt="Current Image" class="img-thumbnail" width="150">
                    </div>
                @endif
                <small>Maximum size: 2MB</small>
            </div>

            <!-- Buttons -->
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form></div>
@endsection
