@extends('layouts.dashboard')

@section('content')
<div class="container">
<div class="card">
  <h1>Edit Formation</h1>
  <form action="{{ route('formations.update', $formation) }}" method="POST">
    @csrf
    @method('PUT')<div class="card-body">

    <div class="form-group">
      <label for="nom">Name</label>
      <input type="text" id="nom" name="nom" class="form-control" value="{{ $formation->nom }}" required>
    </div>
    <div class="form-group">
      <label for="typeformation">Type</label>

                    <select id="type" name="typeformation" class="form-select" required>
                        <option value="Formation Continue" {{ $formation->type === 'Formation Continue' ? 'selected' : '' }}>Formation Continue</option>
                        <option value="Formation Exécutive" {{ $formation->type === 'Formation Exécutive' ? 'selected' : '' }}>Formation Exécutive</option>
                        <option value="Formation pour Entreprise" {{ $formation->type === 'Formation pour Entreprise' ? 'selected' : '' }}>Formation pour Entreprise</option>
                    </select>
                </div>
    <div class="form-group">
      <label for="detail">Detail</label>
      <textarea id="detail" name="detail" class="form-control" required>{{ $formation->detail }}</textarea>
    </div>
    <div class="form-group">
      <label for="statut">Status</label>
      <select id="statut" name="statut" class="form-control" required>
        <option value="actif" {{ $formation->statut === 'actif' ? 'selected' : '' }}>Active</option>
        <option value="inactif" {{ $formation->statut === 'inactif' ? 'selected' : '' }}>Inactive</option>
      </select>
    </div><br>
    <button type="submit" class="btn btn-primary">Update</button>
</div>
  </form>
</div>
</div>
@endsection
