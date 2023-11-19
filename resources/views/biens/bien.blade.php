<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<a href="#" onclick="document.getElementById('form-logout').submit()" class="btn btn-success offset-7 mt-4">
    <form action="/deconnexionUser" method="post" id="form-logout">@csrf</form>
    <i class="zmdi zmdi-power"></i>Se Déconnecter
</a>
<h1>Article</h1>
    <ul class="d-flex flex-wrap justify-content-between">
        @foreach($biens as $bien)
             <div class="card mt-4" style="width: 20rem;">
                <img src="{{ url('public/images/'.$bien->image) }}" class="card-img-top" alt="" width="4²0">
                <div class="card-body">
                <h5 class="card-title">{{$bien->titre}}</h5>
                    <p class="card-text">{{$bien->statut}}</p>
                    <p class="card-text">{{$bien->adresse}}</p>
                    <p class="card-text">Catégorie: {{ $bien->categorie }}</p>
                    <a href="{{'/biens/'. $bien->id.'/detail'}}" class="btn btn-primary">voir détails</a>
                </div>
             </div>
         @endforeach
    </ul>
    {{ $biens->links() }}
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>