<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container mt-4">
        <div class="card mb-4 text-center" style="max-width: 800px;">
            <img src="{{ url('public/images/'.$bien->image) }}" class="img-fluid rounded-start h-100" alt="" width="800px" height="300px">
            <div class="row g-0">
                <div class="col-md-8 mx-auto">
                    <div class="card-body">
                        <h5 class="card-title">Nom du bien: {{$bien->nom}}</h5>
                        <p class="card-text">Catégorie: {{$bien->categorie}}</p>
                        <p class="card-text">Description: {{ $bien->description}}</p>
                        <p class="card-text">Adresse: {{ $bien->adresse}}</p>
                        <p class="card-text">Statut: {{ $bien->statut}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mx-auto" style="width: 50%">
            <form action="/comment-traitement/{{$bien->id}}" method="post">
                @csrf
                <input type="hidden" name="bien_id" value="{{$bien->id}}">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <label for="exampleTextarea" class="form-label mt-4" placeholder="Ajouter un commentaire"> </label>
                <textarea class="form-control" id="exampleTextarea" name="contenu" rows="3" cols="1"></textarea>
                <input type="submit" class="btn btn-primary mt-2" name="ajouter" value="Ajouter">
            </form>
        </div>

       
    </div>

    @foreach($comments as $comment)
        <div class="card bg-light mb-3 mx-auto" style="max-width: 600px;">
            <div class="card-header">
                <h5> {{$comment->user->nom}} {{$comment->user->prenom}}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{$comment->contenu}}</p>
                <p class="card-title">{{$comment->created_at}}</p>
            </div>
        </div>
    @endforeach
    <a href="{{'/dashboardUser'}}" class="btn btn-info mt-3">Retour à la liste</a>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
