@extends('base')

@section('content')

<div style="margin-left: 90%; padding-top: 5px;">
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
  new ajout
</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter attachement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      <div class="modal-body">
      <div class="row" style="margin-top: 10px;">
  <div class="jumbotron">
    <div class="row col-sm-6" id="ligne">
      <form>
        <div class="form-group">
            <label for="exampleInput"><strong>ID Attachement:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez l'identifiant attachement">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>ID Bon:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez l'identifiant bon">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>ID Traite:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrer l'dentifiant traite">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>ID Payment:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez l'identifiant payement">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>ID Cheque:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez l'identifiant cheque">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Marque:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez le marque">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Type:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez le type">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Ref:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez le ref">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>PU:</strong></label>
            <input type="number" class="form-control" id="exampleInput" placeholder="Entrez le prix unitaire">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Date achat:</strong></label>
            <input type="date" class="form-control" id="exampleInput" placeholder="Entrez date">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Status:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrer le status">
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