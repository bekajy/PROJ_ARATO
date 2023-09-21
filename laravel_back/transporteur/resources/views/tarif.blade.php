@extends('base')

@section('content')
<div style="margin-left: 90%; padding-top:2px;">
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
  new ajout
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter tarif</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row" style="margin-top: 10px;">
  <div class="jumbotron">
    <div class="row col-sm-6" id="ligne">
      <form>
        <div class="form-group">
            <label for="exampleInput"><strong>ID tarif:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez l'identifiant tarif">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>ID transit:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez l'identifiant transit">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Poids:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez les poids ">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Taille:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez la taille">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Destination:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez le destination">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Prix:</strong></label>
            <input type="number" class="form-control" id="exampleInput" placeholder="Entrez le prix">
        </div>
        <div style="margin-left: 85%; margin-top:5px;">
            <button type="submit" class="bg bg-info">ajouter</button>
        </div>
      </form>
     </div>
    </div>
    <div class="row col-sm-6 " style="margin-left:30px;">

    </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection