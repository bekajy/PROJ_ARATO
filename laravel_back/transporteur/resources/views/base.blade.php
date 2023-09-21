<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template de base</title>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="#" class="nav-link" id="bar">Home</a></li>
                <li ><h2><i style="margin-left: 300px;"> Bad</i></h2></li>
                <li ><h2><i> Girl</i></h2></li>
                <li ><h2><i> Entreprise</i></h2></li>
                <li class="nav-item" style="margin-left:60%;"><a id="bar" href="#" class="nav-link ">Deconnection</a></li>
        
            </ul>
        </div>
    </nav>
  
    <div class="row">
        <div class="row col-sm-2" >
            <div class="w3-light-grey" id="menu">
                <ul class="list-group">
                    <li><a href="{{ route('entreprise') }}" class="nav-link list-group-item m-0.5" id="list">Entreprise</a></li>
                    <li><a href="{{ route('transit') }}" class="nav-link list-group-item m-0.5" id="list">Transit</a></li>
                    <li><a href="{{ route('voyage') }}" class="nav-link list-group-item m-0.5" id="list">Voyage</a></li>
                    <li><a href="{{ route('camion') }}" class="nav-link list-group-item m-0.5" id="list">Camion</a></li>
                    <li><a href="{{ route('model') }}" class="nav-link list-group-item m-0.5" id="list">Model</a></li>
                    <li><a href="{{ route('voyager') }}" class="nav-link list-group-item m-0.5" id="list">Voyager</a></li>
                    <li><a href="{{ route('facture') }}" class="nav-link list-group-item m-0.5" id="list">Facture</a></li>
                    <li><a href="{{ route('carte_gasoil') }}" class="nav-link list-group-item m-0.5" id="list">Carte gasoil</a></li>
                    <li><a href="{{ route('tarif') }}" class="nav-link list-group-item m-0.5" id="list">Tarif</a></li>
                    <li><a href="{{ route('payer') }}" class="nav-link list-group-item m-0.5" id="list">Payer</a></li>
                    <li><a href="{{ route('bon') }}" class="nav-link list-group-item m-0.5" id="list">Payment bon</a></li>
                    <li><a href="{{ route('traite') }}" class="nav-link list-group-item m-0.5" id="list">Payment traite</a></li>
                    <li><a href="{{ route('cheque') }}" class="nav-link list-group-item m-0.5" id="list">Payment cheque</a></li>
                    <li><a href="{{ route('tranche') }}" class="nav-link list-group-item m-0.5" id="list">Tranche</a></li>
                    <li><a href="{{ route('depense') }}" class="nav-link list-group-item m-0.5" id="list">Depense</a></li>
                    <li><a href="{{ route('autre') }}" class="nav-link list-group-item m-0.5" id="list">autr/consomation</a></li>
                    <li><a href="{{ route('attachement') }}" class="nav-link list-group-item m-0.5" id="list">Attachement</a></li>
                    <li><a href="{{ route('norme') }}" class="nav-link list-group-item m-0.5" id="list">Norme</a></li>
                    <li><a href="{{ route('associe') }}" class="nav-link list-group-item m-0.5" id="list">Associer</a></li>
                </ul>
            </div>
        </div>
        <div class="row col-sm-10 ">
            <div class="jumbotron">
            @yield('content')
            </div>
        </div>
    </div>
</body>
</html>