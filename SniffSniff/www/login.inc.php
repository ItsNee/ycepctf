<?php

if (isset($_POST['login-submit'])) {

    require 'includes/dbh.inc.php';

    $mailuid = $_POST['email'];
    $password = $_POST['password'];
    $flagcheck = $_POST['login-submit'];
    if (empty($mailuid || empty($password))) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM userdb WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['passwordhash']);

                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
                else if($pwdCheck == true) {
                    if ($flagcheck == 1) {
                        header("Location: ../home.php?tr=ue");
                        exit();
                    }
                    else{
                        header("Location: ../home.php");
                        exit();
                    }
                }
                else{
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }

    }

}
else {
    header("Location: ../home.php");
    exit();
}