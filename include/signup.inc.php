<?php
session_start();

if(isset($_POST['submit-login']))
{
    require 'database.php';

    $username =$_POST['username'];
    $email =$_POST['email'];
    $email2 =$_POST['email2'];
    $password =$_POST['password'];
    $password2 =$_POST['password2'];

    if(empty($username) || empty($email) || empty($email2) || empty($password) || empty($password2)) {
        header("Location: ../logowanie.php?error=emptyfields"); //odsyła ponownie
        exit();
    }
    else if(filter_var($email, FILTER_VALIDATE_EMAIL || $email2, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../logowanie.php?error=invalidOneOfEmail"); //odsyła ponownie
        exit();
    }
    else if($password != $password2) {
        header("Location: ../logowanie.php?error=differentpasswords"); //odsyła ponownie
        exit();
    }
    else {
        $sql = "INSERT INTO users (username, email, pass) VALUES (?,?,?)";
        $stmt = mysqli_stmt_init($servername);

        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../logowanie.php?error=sqlerror"); //odsyła ponownie
            exit();
        }
        else
        {
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../logowanie.php?signup=success");
            exit();
        }
    }

}
else
{
    header("Location: ../logowanie.php");
    exit();
}


?>