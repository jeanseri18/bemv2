<!-- resources/views/dashboard/blogs/create.blade.php -->
@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="card col-md-8">
    <form class="needs-validation" method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data" novalidate>
        @csrf
        <!-- Card body -->
        <div class="card-body ">
            <!-- Title -->
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" id="titre" name="titre" class="form-control text-dark" placeholder="Titre" required>
                <div class="invalid-feedback">Svp entre le titre.</div>
            </div>

            <!-- Detail -->
          
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select id="type" name="type" class="form-select" required>
                    <option value="" selected disabled>Select Type</option>
                    <option value="webnaire">webinaire</option>
                    <option value="evenement">evenement</option>
                    <option value="actualite">actualite</option>
                </select>
                <div class="invalid-feedback">Svp choisissez le  type.</div>
            </div>
            <!-- Status -->
          

            <!-- Date -->
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" id="date" name="date" class="form-control text-dark flatpickr" placeholder="choisir la date">
            </div>

            <!-- Time -->
            <div class="mb-3">
                <label for="heure" class="form-label">Heure</label>
                <input type="text" id="heure" name="heure" class="form-control text-dark" placeholder="HH:MM">
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                <small>Maximum taille: 2MB</small>
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <textarea id="detail" name="detail" class="form-control text-dark" rows="7" placeholder="Detail" size="300px" required></textarea>
                <div class="invalid-feedback">Svp entre les details.</div>
            </div>
            <!-- Buttons -->
            <button type="submit" class="btn btn-primary">Publier</button>
        </div>
    </form>

</div>
@endsection
