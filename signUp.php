<?php
    session_start();
    require_once"systemClass.php";
    $systemClass = new SystemClass();
    $connection = $systemClass -> dbConnect();
    
    if($connection -> connect_errno == 0) {
        $nickname = htmlentities($_POST['nickname'], ENT_QUOTES, "UTF-8");
        $name = htmlentities($_POST['name'], ENT_QUOTES, "UTF-8");
        $surname = htmlentities($_POST['surname'], ENT_QUOTES, "UTF-8");
        $email = htmlentities($_POST['userEmail'], ENT_QUOTES, "UTF-8");
        $password = htmlentities($_POST['userPassword'], ENT_QUOTES, "UTF-8");
        $passwordRepeat = htmlentities($_POST['userPasswordRepeat'], ENT_QUOTES, "UTF-8");
        

        $sql = sprintf(
            "SELECT * FROM users WHERE  Name = '%s' AND Email='%s' AND Password='%s'",
            mysqli_real_escape_string($connection, $nickname),
            mysqli_real_escape_string($connection, $email),
            mysqli_real_escape_string($connection, $password)
        );

        if($result = $connection -> query($sql)) {

            if($result -> num_rows > 0) {
                echo "użytkownik już istnieje";
            }
            else {
                if($password == $passwordRepeat) {
                    if(strlen($password) >= 8) {
                        $sql = "INSERT INTO users(Id, Nickname, Name, Surname, Email, Password) VALUES ('', '$nickname', '$name', '$surname', '$email', '$password')"; 
                        $result = $connection -> query($sql);
                        $_SESSION['id'] = $data['Id'];
                        $_SESSION['nickname'] = $data['Nickname'];
                        $_SESSION['name'] = $data['Name'];
                        $_SESSION['surname'] = $data['Surname'];
                        $_SESSION['signedIn'] = true;
                        $_SESSION['email'] = $email;
                        echo "zarejestrowano";
                        header('Location: index.php');
                    }
                    else{
                        $_SESSION['signUpCountError'] ='<span style="color:red">Hasło musi zawierać min. 8 znaków!</span>';
                        header('Location: SignUpPage.php');
                    }
                }
                else{
                    $_SESSION['signUpError'] ='<span style="color:red">Hasła nie są identyczne!</span>';
                    header('Location: SignUpPage.php');
                }
            }
        }
    }
?>