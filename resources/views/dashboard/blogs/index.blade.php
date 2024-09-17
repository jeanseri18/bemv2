@extends('layouts.dashboard')

@section('content')
<div class="col-lg-12 col-md-12 col-12">
  <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
    <div class="d-flex flex-column gap-1">
      <h1 class="mb-0 h2 fw-bold">Listes des postes</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/dashboard') }}">Dashboard</a>
          </li>
          <li class="breadcrumb-item"><a href="#">postes</a></li>
          <li class="breadcrumb-item active" aria-current="page">liste des postes</li>
        </ol>
      </nav>
    </div>
    <div>
      <a href="{{ route('blogs.create') }}" class="btn btn-primary">Ajoute un poste</a>
    </div>
  </div>
</div>
   <div class="card">   <div class="table-responsive ">
  <table class="table text-nowrap mb-0 table-centered">
    <thead>
      <tr>  <th>Date</th><th>Image</th>
        <th>Titre</th>
      
        <th>Type</th>
        <th>Status</th>
        
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($blogs as $blog)
        <tr>          <td>{{ $blog->date ? \Carbon\Carbon::parse($blog->date)->format('M d') : 'N/A' }}</td>
        <td>
            @if ($blog->image)
              <img src="{{ Storage::url($blog->image) }}" alt="Blog Image" style="width: 50px; height: auto;">
            @else
              N/A
            @endif
          </td>
          <td>
            <div class="d-flex align-items-center gap-3">
              <div class="lh-1">
                <h5 class="mb-1"><a href="#" class="text-inherit">{{ $blog->titre }}</a></h5>
              </div>
            </div>
          </td>
          <td><span class="badge bg-info">{{ $blog->type }}</span></td>
          <td><span class="badge bg-{{ $blog->statut === 'active' ? 'success' : 'danger' }}">{{ ucfirst($blog->statut) }}</span></td>
         
          <td>
            <div class="dropdown">
              <a class="text-body text-primary-hover" href="#" role="button" id="dropdown{{ $blog->id }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fe fe-more-vertical"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown{{ $blog->id }}">
                <a class="dropdown-item" href="{{ route('blogs.edit', $blog) }}">Modifier</a>
                <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display:inline;">
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
</div></div>
@endsection
