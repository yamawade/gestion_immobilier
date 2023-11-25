<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container offset-2">
    <div class="card mb-4 offset-1" style="width:80%;">
        <img src="{{ asset('public/images/'.$bien->image) }}" class="img-fluid rounded-start" alt="" style="height: 500px; width: 100%;">
        <div class="row">
            <div class="card-body">
                <h5 class="card-title">Nom du bien: {{$bien->nom}}</h5>
                <p class="card-text">Catégorie: {{$bien->categorie}}</p>
                <p class="card-text">Description: {{ $bien->description}}</p>
                <p class="card-text">Adresse: {{ $bien->adresse}}</p>
                <p class="card-text">Statut: {{ $bien->statut}}</p>
                <p class="card-text">Nombre Chambre: {{ $bien->nombre_chambre}}</p>
                <p class="card-text">Nombre Toilette: {{ $bien->nombre_toilette}}</p>
                <p class="card-text">Dimension: {{ $bien->dimension_bien}} m2</p>
                <p class="card-text">Espace Vert: {{ $bien->espace_vert}}</p>
                <a href="/biens/update/{{$bien->id}}" class="btn btn-success">Modifier</a>
                <a href="/biens/delete/{{$bien->id}}" class="btn btn-danger">supprimer</a>
                <a href="/ajoutChambre/{{$bien->id}}" class="btn btn-warning">Ajouter Chambre</a>
                <a href="{{'/admin'}}" class="btn btn-info">Retour</a>
            </div>

            <div class="card bg-light mb-3 mx-auto" style="max-width: 600px;">
                @foreach($comments as $comment)
                    <div class="card-header">
                        <h5> {{$comment->user->nom}} {{$comment->user->prenom}}</h5>
                        <div class="float-end">
                    </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{$comment->contenu}}</p>
                        <p class="card-title">{{$comment->created_at}}</p>
                    </div>
                    @if ($comment->user_id=auth()->user()->id)
                    <a href="{{ route('commentaire.supprimer', ['id' => $comment->id]) }}" class="btn btn-sm btn-warning">Supprimer</a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($chambres as $chambre)
            <div class="col-md-6">
                <div class="card">
                    <div id="carousel_{{ $chambre->id }}" class="carousel slide mt-2">
                        <div class="carousel-inner mt-3">
                            @php
                                $images = json_decode($chambre->image, true);
                            @endphp
                            @foreach($images as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <img src="{{ asset('/images/'.$image) }}" class="d-block w-100" alt="..." style="max-width:100%; height: 400px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p class="card-text bg-dark">Dimension Chambre: {{$chambre->dimension}} m2</p>
                                        @if ($bien->user->id ==auth()->user()->id)
                                            <a href="" class="btn btn-success">Modifier</a>
                                            <a href="" class="btn btn-danger">Supprimer</a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_{{ $chambre->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel_{{ $chambre->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- <div class="container  offset-2">
    <div class="card mb-4 mt-4" style=" width:70%;">
        <img src="{{ asset('public/images/'.$bien->image) }}" class="img-fluid rounded-start" alt="" style="height: 500px; width: 100%;">
            <div class="row">
                @foreach($chambres as $chambre)
                        <div class="col-md-4">
                            <div id="carousel_{{ $chambre->id }}" class="carousel slide mt-2">
                                <div class="carousel-inner mt-3">
                                    @php
                                        $images = json_decode($chambre->image, true);
                                    @endphp
                                    @foreach($images as $image)
                                        <div class="carousel-item @if($loop->first) active @endif">
                                            <img src="{{ asset('/images/'.$image) }}" class="d-block w-100" alt="..." style="max-width:100%; height: 400px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p class="card-text bg-dark">Dimension Chambre: {{$chambre->dimension}} m2</p>
                                                @if ($bien->user->id ==auth()->user()->id)
                                                    <a href="" class="btn btn-success">Modifier</a>
                                                    <a href="" class="btn btn-danger">Supprimer</a>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel_{{ $chambre->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel_{{ $chambre->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        
                        </div>
                @endforeach
            </div>
       
        
        <div class="row">
            <div class="card-body">
                <h5 class="card-title">Nom du bien: {{$bien->nom}}</h5>
                <p class="card-text">Catégorie: {{$bien->categorie}}</p>
                <p class="card-text">Description: {{ $bien->description}}</p>
                <p class="card-text">Adresse: {{ $bien->adresse}}</p>
                <p class="card-text">Statut: {{ $bien->statut}}</p>
                <p class="card-text">Nombre Chambre: {{ $bien->nombre_chambre}}</p>
                <p class="card-text">Nombre Toilette: {{ $bien->nombre_toilette}}</p>
                <p class="card-text">Dimension: {{ $bien->dimension_bien}} m2</p>
                <p class="card-text">Espace Vert: {{ $bien->espace_vert}}</p>
                <a href="/biens/update/{{$bien->id}}" class="btn btn-success">Modifier</a>
                <a href="/biens/delete/{{$bien->id}}" class="btn btn-danger">supprimer</a>
                <a href="/ajoutChambre/{{$bien->id}}" class="btn btn-warning">Ajouter Chambre</a>
                <a href="{{'/admin'}}" class="btn btn-info">Retour</a>
            </div>

            <div class="card bg-light mb-3 mx-auto mt-4" style="max-width: 600px;">
                @foreach($comments as $comment)
                    <div class="card-header">
                        <h5> {{$comment->user->nom}} {{$comment->user->prenom}}</h5>
                        <div class="float-end">
                    </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{$comment->contenu}}</p>
                        <p class="card-title">{{$comment->created_at}}</p>
                    </div>
                    @if ($comment->user_id==auth()->user()->id)
                    <a href="{{ route('commentaire.supprimer', ['id' => $comment->id]) }}" class="btn btn-sm btn-warning">Supprimer</a>
                    @endif
                @endforeach
            
            </div>
            
        </div>
    </div>
        
</div> -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>