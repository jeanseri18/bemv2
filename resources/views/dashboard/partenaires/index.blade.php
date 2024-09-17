@extends('layouts.dashboard')

@section('content')
<div class="col-lg-12 col-md-12 col-12">
  <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
    <div class="d-flex flex-column gap-1">
      <h1 class="mb-0 h2 fw-bold">Liste des partenaires</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/dashboard') }}">Tableau de board</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Liste des partenaires</li>
        </ol>
      </nav>
    </div>
    <div>
      <a href="{{ route('partenaires.create') }}" class="btn btn-primary">Nouveau partenaire</a>
    </div>
  </div>
</div>
    <div class="card">
    <div class="table-responsive">
  <table class="table text-nowrap mb-0 table-centered">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Image</th>
        <th>Status</th>

        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($partenaires as $partenaire)
        <tr>
          <td>
            <div class="d-flex align-items-center gap-3">
              <div class="lh-1">
                <h5 class="mb-1"><a href="#" class="text-inherit">{{ $partenaire->titre }}</a></h5>
              </div>
            </div>
          </td>
          <td>
            @if ($partenaire->image)
              <img src="{{ Storage::url($partenaire->image) }}" alt="Partenaire Image" style="width: 50px; height: auto;">
            @else
              N/A
            @endif
          </td>
          <td><span class="badge bg-{{ $partenaire->statut === 'active' ? 'success' : 'danger' }}">{{ ucfirst($partenaire->statut) }}</span></td>

          <td>
            <div class="dropdown">
              <a class="text-body text-primary-hover" href="#" role="button" id="dropdown{{ $partenaire->id }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fe fe-more-vertical"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown{{ $partenaire->id }}">
                <a class="dropdown-item" href="{{ route('partenaires.edit', $partenaire) }}">Modifier</a>
                <form action="{{ route('partenaires.destroy', $partenaire) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="dropdown-item">Supprimer</button>
                </form>
              </div>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>

@endsection
