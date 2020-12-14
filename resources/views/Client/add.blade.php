@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire des Clients</div>

                <div class="card-body">
                <form method="POST" action="/client/persist">
                @csrf
                        <div class="form-group">
                        <label class="control-label" for="nom">Nom du Client</label>
                        <input class="form-control" type="text" name="nom" id="nom" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="prenom">Prenom du Client</label>
                        <input class="form-control" type="text" name="prenom" id="prenom" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Adresse">Adresse du Client</label>
                        <input class="form-control" type="text" name="adresse" id="adresse" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="telephone"> Telephone du Client</label>
                        <input class="form-control" type="text" name="telephone" id="telephone" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email">Email du Client</label>
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="fidele"> Fidele Client</label>
                        <input class="form-control" type="text" name="fidele" id="fidele" />
                    </div>
                   
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="Envoyer" id="envoyer" value="Envoyer"/>
                        <input class="btn btn-danger"  type="reset" name="Annuler" id="annuler" value="Annuler"/>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection