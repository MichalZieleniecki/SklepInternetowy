<?php

	session_start();

	if((isset($_SESSION['signedIn'])) && ($_SESSION['signedIn']==true))
	{
		header('Location: index.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Sklep</title>
    <link rel='stylesheet' href='styles/styles.scss'>
</head>
<body>
    <form class="form" action="signIn.php" method="post">
     	<p id="heading">Zaloguj się</p>
     	<label>E-mail</label>
     	<input type="email" name="userEmail" placeholder="Email"><br>
     	<label>Hasło</label>
     	<input type="password" name="userPassword" placeholder="Hasło"><br>
     	<button type="submit">Zaloguj</button>
		<a href="index.php">Home</a>
		<a href="signUpPage.php">Sign Up</a>
    </form>
</body>
</html>