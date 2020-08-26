<?php

if (isset($_POST['login-submit'])) {

    $mailuid = $_POST['email'];
    $password = $_POST['password'];
    $flagcheck = $_POST['login-submit'];
    if (empty($mailuid || empty($password))) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        if ($mailuid == "Jeremiah" && $password == "password123"){
            header("Location: ../profile.php?id=727158");
        }
        else if($mailuid == "admin" && $password == "KSOXJDJS"){
            header("Location: ../profile.php?id=galf");
        }
        else{
            header("Location: ../index.php?error=UserNotFound");
        }
    }
}
else {
        header("Location: ../index.php");
        exit();
    }
?>