Liste des Clients
<table class="table table-bordered table-striped table-dark">
                <tbody >
                    <thead> 
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col" style="padding:40px 20px;" >PRENOM</th>
                    <th scope="col">ADRESSE</th>
                    <th scope="col">TELEPHONE</th>
                    <th scope="col">EMAIL</th>
                </tr>
            </thead>
                @foreach($Clients as $cl)
                <tbody >
                <tr>
                    <th>{{$cl->id}}</th>
                    <td>{{$cl->nom}}</td>
                    <td>{{ $cl->prenom }}</td>
                    <td>{{$cl->adresse}}</td>
                    <td>{{$cl->tel}}</td>
                    <td>{{$cl->email}}</td>
                </tr>
@endforeach
</tbody>
</table>