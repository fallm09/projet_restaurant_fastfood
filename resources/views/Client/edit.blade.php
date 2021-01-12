                    <form method="POST" action="{{route('update',['id'=> $clients->id ])}}">
                        @csrf
                   <div class="form-group">

                    <label for="id" class="control-label"> Modifier le client :</label> 
                    <input type="hidden"  readonly="true" name="id" id="id" value="{{ $clients->id }}" class="form-control" />
                    </div>
                   
                    <div class="form-group">
                        <label for="nom" class="control-label"> Nom du Client :</label>
                        <input type="text" name="nom" id="nom" 
                        value="{{ $clients->nom }}"  class="form-control" />
                    </div>
                        
                    <div class="form-group">
                        <label for="prenom" class="control-label"> Prenom du Client :</label>
                        <input type="text" name="prenom" id="prenom" 
                        value="{{ $clients->prenom }}"  class="form-control" />
                    </div>

                    <div class="form-group">
                        <br>
                        <label for="adresse" class="control-label"> Adresse du Client:</label>
                        <input type="text" name="adresse" id="adresse" 
                        value="{{ $clients->adresse }}"  class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="telephone" class="control-label">  Telephone du Client :</label>
                        <input type="text" name="telephone" id="telephone" 
                        value="{{ $clients->tel }}"  class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">  Email du Client :</label>
                        <input type="text" name="email" id="email" 
                        value="{{ $clients->email }}"  class="form-control" />
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="Envoyer" id="envoyer" href='/client/add' value="Envoyer" />
                        <a class="btn btn-danger" href='/client/add'>Annuler</a>
                    </div>
                </form>
             </div>
            </div>
            <!-- /form-panel -->
</div>
       