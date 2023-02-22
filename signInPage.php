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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <form action="signIn.php" method="post">
     	<h2>Zaloguj się</h2>
     	<label>E-mail</label>
     	<input type="email" name="userEmail" placeholder="Email"><br>
     	<label>Hasło</label>
     	<input type="password" name="userPassword" placeholder="Hasło"><br>
     	<button type="submit">Zaloguj</button>
    </form>
</body>
</html>