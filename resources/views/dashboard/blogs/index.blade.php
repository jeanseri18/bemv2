@extends('layouts.dashboard')
<!-- Dans le <head> de votre layout -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<!-- Juste avant la balise </body> de votre layout -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

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

<div class="card container">
  <div class="table-responsive">
    <table id="blogsTable" class="table table-bordered text-nowrap mb-0  stripe table-centered">
      <thead>
        <tr>
          <th>Date</th>
          <th>Image</th>
          <th>Titre</th>
          <th>Type</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($blogs as $blog)
          <tr>
            <td>{{ $blog->date ? \Carbon\Carbon::parse($blog->date)->format('M d') : 'N/A' }}</td>
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
  </div>
</div>


<script>
  $(document).ready(function() {
    $('#blogsTable').DataTable({
      "paging": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "lengthChange": true,
      "language": {
        "search": "Rechercher:",
        "lengthMenu": "Afficher _MENU_ entrées",
        "info": "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
        "infoEmpty": "Aucune entrée à afficher",
        "infoFiltered": "(filtré de _MAX_ entrées totales)",
        "paginate": {
          "next": "Suivant",
          "previous": "Précédent"
        }
      }
    });
  });
</script>
@endsection
