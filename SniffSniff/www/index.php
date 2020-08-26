<?php
$host = "mysql";
$user = "root";
$pass = "rootpass";
$db_name = "db";
$conn = mysqli_connect($host, $user, $pass, $db_name);
if (!$conn) {
    die("Connection failed : ".mysqli_connect_error());
}

$sql = "SELECT * FROM userdb";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_close($conn);
    header("Location: ../initdb.php");
    exit();
}
else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        mysqli_close($conn);
        header("Location: ../login.php");
    }
    else {
        mysqli_close($conn);
        header("Location: ../initdb.php");
        exit();
    }
}
?>
