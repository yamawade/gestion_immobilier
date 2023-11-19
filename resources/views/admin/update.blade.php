<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4 my-5">
            
                     @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                     @endif
                        <ul>
                            @foreach($errors->all() as $error)
                            <li class="alert alert-danger">{{$error}}</li>
                            @endforeach
                        </ul>
                <form action="/biens/update-traitement/{{$bien->id}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <input type="text" style="display:none" value="{{$bien->id}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Image actuelle</label>
                        <img src="{{ asset('public/images/' . $bien->image) }}" alt="Image actuelle"  width="420px" height="205px">
                     </div>

                     <div class="form-group">
                         <label for="exampleInputEmail1" class="form-label mt-4">Nouvelle Image</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                     </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label mt-4">Nom bien</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="nom" value="{{$bien->nom}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label mt-4">Categorie</label>
                            <select class="form-select" aria-label="Default select example" name="categorie">
                                @foreach(['luxe', 'moyen', 'simple'] as $categorieOption)
                                    <option value="{{ $categorieOption }}" {{ $bien->categorie == $categorieOption ? 'selected' : '' }}>
                                        {{ ucfirst($categorieOption) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label mt-4">Dscription</label>
                            <textarea class="form-control" id="exampleInputEmail1" name="description">{{$bien->description}}" </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label mt-4">Adresse</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="adresse" value="{{$bien->adresse}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label mt-4">Statut</label>
                            <select class="form-select " aria-label="Default select example" name="statut" value="{{$bien->statut}}">
                                <option value="disponible">disponible</option>
                                <option value="indisponible">indisponible</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info mt-4">Submit</button>
                </form>
                <a href="{{'/admin'}}" class="btn btn-danger mt-4">Retour a la liste</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>