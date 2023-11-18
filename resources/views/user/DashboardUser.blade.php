<h1>Bienvenue {{auth()->user()->nom}} {{auth()->user()->prenom}} !!!</h1>

<a href="#" onclick="document.getElementById('form-logout').submit()">
    <form action="/deconnexionUser" method="post" id="form-logout">@csrf</form>
    Se Déconnecter
</a>