@extends('admin.index')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
<a href="{{'/admin'}}" class="btn btn-danger mt-4">Retour a la liste</a>
    <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4" style=" margin-right:250px;">
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
                <div class="card " style="width: 600px;">
                    <form action="/ajoutBien-traitement" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header text-center bg-primary text-white">
                            AJOUT D'UN BIEN
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nomBien" class="form-label mt-4">Nom bien</label>
                                <input type="text" class="form-control" id="nomBien" name="nom" >
                            </div>
                            <div class="form-group">
                                <label for="categorie" class="form-label mt-4">Categorie</label>
                                <select class="form-select " aria-label="Default select example" name="categorie">
                                    <option value="luxe">luxe</option>
                                    <option value="moyen">moyen</option>
                                    <option value="simple">simple</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image" class="form-label mt-4">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                    
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label mt-4">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Description" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="adresse" class="form-label mt-4">Adresse</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" >
                            </div>
                            <div class="form-group">
                                <label for="chambre" class="form-label mt-4">Nombre Chambre</label>
                                <input type="text" class="form-control" id="chambre" name="nombre_chambre" >
                            </div>
                            <div class="form-group">
                                <label for="toilette" class="form-label mt-4">Nombre Salle D'eau</label>
                                <input type="text" class="form-control" id="toilette" name="nombre_toilette" >
                            </div>
                            <div class="form-group">
                                <label for="balcon" class="form-label mt-4">Nombre Balcon</label>
                                <input type="text" class="form-control" id="balcon" name="nombre_balcon" >
                            </div>
                            <div class="form-group">
                                <label for="dimension_bien" class="form-label mt-4">Dimension</label>
                                <input type="text" class="form-control" id="dimension_bien" name="dimension_bien" >
                            </div>
                            <div class="form-group">
                                <label for="espace_vert" class="form-label mt-4">Espace Vert</label>
                                <select class="form-select " aria-label="Default select example" name="espace_vert">
                                    <option value="disponible">disponible</option>
                                    <option value="indisponible">indisponible</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="statut" class="form-label mt-4">Statut</label>
                                <select class="form-select " aria-label="Default select example" name="statut">
                                    <option value="disponible">disponible</option>
                                    <option value="indisponible">indisponible</option>
                                </select>
                            </div>
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <button type="submit" class="btn btn-primary btn-lg offset-5 mt-4 text-white">Submit</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection('content')