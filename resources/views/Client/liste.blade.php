@extends('layouts.app')

@section('content')
<div class="card">
        
        <form action="/client/search" method="get">
        <div class="form-group">
            <input class="search" type="search" name="search" class="form-control">
            <button type="submit"class="btn btn-primary">search</button>
            </span>
        </div>
                <header class="card-header">
            <p class="card-header-title">liste des clients</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>adresse</th>
                            <th>telephone</th>
                            <th>email</th>
                            <th>fidele</th>
                            <th>action</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach($clients as $cl)
                            <tr>
                              
                                <td>{{ $cl->nom }}</td>
                                <td>{{ $cl->prenom }}</td>
                                <td>{{ $cl->adresse}}</td>
                                <td>{{ $cl->tel}}</td>
                                <td>{{ $cl->email}}</td>
                                <td>{{ $cl->fidele }}</td>
                               
                                <td><a class="btn btn-primary" href="{{ route('getallclient', $cl->id) }}">Voir</a></td>
                                <td><a class="btn btn-warning" href="{{ route('editclient', $cl->id) }}">Modifier</a></td>
                                <td>
                
                                </td>
                            </tr>
                              @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection