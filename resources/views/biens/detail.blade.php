<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container" >
    <div class="card mb-4 mt-4 text-center" style="max-width: 540px;">
    <img src="{{ url('public/images/'.$bien->image) }}" class="img-fluid rounded-start h-100" alt="" width="600px" height="155px" >
    <div class="row g-0">
        <!-- <div class="col-md-4  ">

        </div> -->
        <div class="col-md-8 ">
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
    <a href="{{'/dashboardUser'}}" class="btn btn-info">Retour a la liste</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>