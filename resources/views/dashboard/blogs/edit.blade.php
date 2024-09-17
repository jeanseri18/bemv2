<!-- resources/views/dashboard/blogs/edit.blade.php -->
@extends('layouts.dashboard')

@section('content')
<div class="card">
    <form class="needs-validation" method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <!-- Card body -->
        <div class="card-body">
            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" id="title" name="title" class="form-control text-dark" value="{{ old('title', $blog->title) }}" placeholder="Titre" required>
                <div class="invalid-feedback">Svp entre a le titre</div>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control text-dark" placeholder="blog Description" required>{{ old('description', $blog->description) }}</textarea>
                <div class="invalid-feedback">Svp entre la description.</div>
            </div>

            <!-- Type -->
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select id="type" name="type" class="form-select" required>
                    <option value="" disabled>Select Type</option>
                    <option value="Photo" {{ $blog->type === 'webinaire' ? 'selected' : '' }}>webinaire</option>
                    <option value="Video" {{ $blog->type === 'evenement' ? 'selected' : '' }}>evenement</option>
                    <option value="Quote" {{ $blog->type === 'actualite' ? 'selected' : '' }}>actualite</option>
                </select>
                <div class="invalid-feedback">Svp choisissez un type.</div>
            </div>

            <!-- Date -->
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" id="date" name="date" class="form-control text-dark flatpickr" value="{{ old('date', $blog->date) }}" placeholder="Select Date">
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @if ($blog->image)
                    <div class="mt-2">
                        <img src="{{ Storage::url($blog->image) }}" alt="Current Image" class="img-thumbnail" width="150">
                    </div>
                @endif
                <small>Maximum size: 2MB</small>
            </div>

            <!-- Buttons -->
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form>
    </div>
@endsection
