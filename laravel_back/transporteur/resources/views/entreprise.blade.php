@extends('base')

@section('content')
<div style="margin-left: 90%; padding-top: 2px;">
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
  new ajout
</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entreprise</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row" style="margin-top: 10px;">
  <div class="jumbotron">
    <div class="row col-sm-6" id="ligne">
      <form>
        <div class="form-group">
            <label for="exampleInput"><strong>Nom:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez votre nom">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>NIF:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez votre nif">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>CIF:</strong></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Entrez votre cif">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>STATE:</strong></label>
            <input type="number" class="form-control" id="exampleInput" placeholder="Entrez votre state">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Numero telephone 1:</strong></label>
            <input type="number" class="form-control" id="exampleInput" placeholder="Entrez votre num1">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Numero telephone 2:</strong></label>
            <input type="number" class="form-control" id="exampleInput" placeholder="Entrez votre num2">
        </div>
        <div class="form-group">
            <label for="exampleInput"><strong>Email:</strong></label>
            <input type="mail" class="form-control" id="exampleInput" placeholder="Entrez votre email">
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