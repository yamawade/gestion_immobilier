<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v5 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="formAuth/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="formAuth/fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="formAuth/css/style.css"/>
</head>
<body class="form-v5">
	@if(count($errors)>0)
		<div class="alert alert-dismissible alert-danger">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		@foreach($errors->all() as $error)
		<strong>Oh snap!</strong> <a href="#" class="alert-link">{{$error}}.
		@endforeach
		</div>  
	@endif
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="/connexionUser" method="post">
				@csrf
				<h2>Login</h2>
				<div class="form-row">
					<label for="your-email">Email</label>
					<input type="text" name="email" id="your-email" class="input-text" placeholder="Votre adresse mail" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Mot De Passe</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Votre mot de passe">
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="login" class="register" value="Login">
                    <p>Vous n'avez pas de compte?<a href="/inscription">Inscrivez-vous</a></p>
				</div>
                <!-- <button type="submit" class="form-row-last">Login</button> -->
			</form>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>