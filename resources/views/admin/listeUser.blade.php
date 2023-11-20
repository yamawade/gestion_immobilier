@extends('admin.index')

@section('content')

    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>Liste des utilisateurs</h1>
                    <hr>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $numero = 1;
                            @endphp

                            @foreach($users as $user)
                            <tr>
                                <td>{{$numero}}</td>
                                <td>{{$user->nom}}</td>
                                <td>{{$user->prenom}}</td>
                                <td>{{$user->email}}</td>
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