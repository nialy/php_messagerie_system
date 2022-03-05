<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
</head>
<body>
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="traitement.php" method="POST">
					<label for="chk" aria-hidden="true">Creer un compte</label>
					<input type="text" name="nom" placeholder="Nom" required="">
                    <input type="text" name="prenom" placeholder="Prenom" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="ajout" type="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="traitement.php" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="valider" type="submit">Login</button>
				</form>
			</div>
	</div>
</body>
</html>