<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="form-group mx-auto" style="width: 50%">
            <form action="/comment-update-traitement/{{$comment->id}}" method="post">
                @csrf
                <input type="hidden" name="bien_id" value="{{$comment->bien_id}}">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <label for="exampleTextarea" class="form-label mt-4" placeholder="Ajouter un commentaire"> </label>
                <textarea class="form-control" id="exampleTextarea" name="contenu" rows="3" cols="1"> 
                    {{$comment->contenu}}
                </textarea>
                <input type="submit" class="btn btn-primary mt-2" name="ajouter" value="Ajouter">
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>