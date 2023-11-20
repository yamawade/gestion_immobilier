@extends('admin.index')

@section('content')

    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>Liste des biens</h1>
                    <hr>

                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Nom bien</th>
                                <th>Catégorie</th>
                                <th>Adresse</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $numero = 1;
                            @endphp

                            @foreach($biens as $bien)
                            <tr>
                                <td>{{$numero}}</td>
                                <td>{{$bien->nom}}</td>
                                <td>{{$bien->categorie}}</td>
                                <td>{{$bien->adresse}}</td>
                                <td>{{$bien->statut}}</td>
                                <td>
                                    <a href="/detail-bien/{{$bien->id}}" class="btn btn-success">Détails</a>
                                </td>
                            </tr>
                            @php
                            $numero++;
                            @endphp
                            @endforeach
                            
                        </tbody>
                    </table>
            </div>

        </div>
    </div>
@endsection('content')