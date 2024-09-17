@extends('layouts.dashboard')

@section('content')
<div class="container">
  <h1>Create Formation</h1>
  <div class="card ">
  <form action="{{ route('formations.store') }}" method="POST">
    @csrf
    <div class="card-body">
    <div class="form-group">
      <label for="nom">Name</label>
      <input type="text" id="nom" name="nom" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="typeformation">Type</label>
      <select id="type" name="typeformation" class="form-select" required>
                        <option value="">Select type</option>
                        <option value="Formation Continue">Formation Continue</option>
                        <option value="Formation Exécutive">Formation Exécutive</option>
                        <option value="Formation pour Entreprise">Formation pour Entreprise</option>
                    </select>      </div>
    <div class="form-group">
      <label for="detail">Detail</label>
      <textarea id="detail" name="detail" class="form-control" required></textarea>
    </div>
    <div class="form-group">
      <label for="statut">Status</label>
      <select id="statut" name="statut" class="form-control" required>
        <option value="actif">Active</option>
        <option value="inactif">Inactive</option>
      </select>
    </div><br>
    <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
</div></div>
@endsection
