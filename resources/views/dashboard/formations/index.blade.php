@extends('layouts.dashboard')

@section('content')
<div class="col-lg-12 col-md-12 col-12">
  <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
    <div class="d-flex flex-column gap-1">
      <h1 class="mb-0 h2 fw-bold">All Formations</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('admin-dashboard') }}">Dashboard</a>
          </li>
          <li class="breadcrumb-item"><a href="#">CMS</a></li>
          <li class="breadcrumb-item active" aria-current="page">All Formations</li>
        </ol>
      </nav>
    </div>
    <div>
      <a href="{{ route('formations.create') }}" class="btn btn-primary">New Formation</a>
    </div>
  </div>
</div>
<div class="card">
<div class="table-responsive">
  <table class="table text-nowrap mb-0 table-centered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Detail</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($formations as $formation)
        <tr>
          <td>{{ $formation->nom }}</td>
          <td>{{ $formation->typeformation }}</td>
          <td>{{ $formation->detail }}</td>
          <td><span class="badge bg-{{ $formation->statut === 'actif' ? 'success' : 'danger' }}">{{ ucfirst($formation->statut) }}</span></td>
          <td>
            <div class="dropdown">
              <a class="text-body text-primary-hover" href="#" role="button" id="dropdown{{ $formation->id }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fe fe-more-vertical"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown{{ $formation->id }}">
                <a class="dropdown-item" href="{{ route('formations.edit', $formation) }}">Edit</a>
                <form action="{{ route('formations.destroy', $formation) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="dropdown-item">Delete</button>
                </form>
              </div>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div></div>
@endsection
