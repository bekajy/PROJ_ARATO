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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter traite </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row" style="margin-top: 10px;">
  <div class="jumbotron">
    <div class="row col-sm-6" id="ligne">
      <form>
        <div class="form-group">
            <label for="exampleInput"><strong>ID traite:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez l'identifiant traite">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>ID attachement:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez l'identifiant attachement">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>ID tranche:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez l'identifiant tranche">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Date:</strong></label>
            <input type="date" class="form-control" id="exampleInput" placeholder="Entrez la date">
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
      </div>
    </div>
  </div>
</div>
@endsection