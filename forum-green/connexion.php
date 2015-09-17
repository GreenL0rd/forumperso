<?php

//	On connecte à la db //

include('includes/db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/connexion.css">
	<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
	<title>Connection au forum</title>
</head>
<body>

	<div class="container1">
			<h1>Connection au forum</h1>
	
		<form action="connexion.php" method="post">
			<div class="container2">
				<input type="text" id="login" name="email" placeholder="Tappez votre E-mail" />
			</div>
			
			<div class="container2">
				<input type="password" id="pass" name="password" placeholder="Tappez votre mot de passe" value=""/>
			</div>
			
			<div class "submit">
				<input type="submit" name="connection" value="Se connecter"	/>
			</div>
			
			<a href="inscription.php" class="button">S'inscrire</a>
		
		</form>
	</div>			
</body>
</html>