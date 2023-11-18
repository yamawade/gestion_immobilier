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
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="/inscriptionUser" method="post">
				@csrf
				<h2>Register</h2>
				<div class="form-row">
					<label for="full-name">Nom</label>
					<input type="text" name="nom" id="full-name" class="input-text" placeholder="Votre Nom">
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="full-name">Prenom</label>
					<input type="text" name="prenom" id="full-name" class="input-text" placeholder="Votre Prénom">
					<i class="fas fa-user"></i>
				</div>
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
					<input type="submit" name="register" class="register" value="Register">
					<p>Vous avez déjà un compte?<a href="/">Connectez-vous</a></p>
				</div>

				<!-- <button type="submit" class="form-row-last">Register</button> -->
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>