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
        <form action="signUp.php" method="post">
        <label>Imię</label>
        <input type="text" name="name" id="">
        <label>Nazwisko</label>
        <input type="text" name="surname" id="">
        <label>Nazwa</label>
        <input type="text" name="nickname" id="">
        <label>E-mail</label>
        <input type="email" name="userEmail" id="">
        <label>Hasło</label>
        <input type="password" name="userPassword">
        <label>Powtórz hasło</label>
        <input type="password" name="userPasswordRepeat">
        <button type="submit">Zarejestruj się</button>
        <a href="signInPage.php">Masz konto?</a>
        <a href="index.php">Strona główna</a>
        <?php
		    if(isset($_SESSION['signUpCountError'])) echo $_SESSION['signUpCountError'];
            if(isset($_SESSION['signUpError'])) echo $_SESSION['signUpError'];
            if(isset($_SESSION['signUpUserExistsError'])) echo $_SESSION['signUpUserExistsError'];
		?>
    </form>
</body>
</html>