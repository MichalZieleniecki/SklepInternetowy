<?php
    session_start();
    require_once"systemClass.php";
    $systemClass = new SystemClass();
    $connection = $systemClass -> dbConnect();

    
    if($connection -> connect_errno == 0) {
        $userEmail = htmlentities($_POST['userEmail'], ENT_QUOTES, "UTF-8");
        $userPassword = htmlentities($_POST['userPassword'], ENT_QUOTES, "UTF-8");

        $sql = sprintf(
            "SELECT * FROM users WHERE Email='%s' AND Haslo='%s'",
            mysqli_real_escape_string($connection, $userEmail),
            mysqli_real_escape_string($connection, $userPassword)
        );

        if($result = $connection -> query($sql)) {

            if($result -> num_rows > 0) {

                $data = $result -> fetch_assoc();
                $email = $data['Email'];
                echo "uzytkownik: $user, email: $userEmail";
                $_SESSION['id'] = $data['id'];
                $_SESSION['user'] = $data['nazwa'];
                $_SESSION['signedIn'] = true;
                $_SESSION['email'] = $email;

                unset($_SESSION['signInError']);
                header('Location: index.php');
                // $result -> close();
            } 
            else {
                $_SESSION['signInError'] ='<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location: SignInPage.php');
            }
        }
    }
    ?>