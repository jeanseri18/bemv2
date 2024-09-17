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
      <h1 class="mb-0 h2 fw-bold">Liste des partenaires</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/dashboard') }}">Tableau de bord</a>
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

<div class="card container">
  <div class="table-responsive">
    <table id="partenairesTable" class="table table-bordered stripe text-nowrap mb-0 table-centered">
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

<script>
  $(document).ready(function() {
    $('#partenairesTable').DataTable({
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
