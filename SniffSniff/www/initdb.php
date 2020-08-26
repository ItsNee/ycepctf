<?php
$host = "mysql";
$user = "root";
$pass = "rootpass";
$db_name = "db";
$conn = mysqli_connect($host, $user, $pass, $db_name);
if (!$conn) {
    die("Connection failed : ".mysqli_connect_error());
}
$sql = "CREATE TABLE userdb (
  `username` varchar(64) NOT NULL UNIQUE,
  `passwordhash` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userpic` varchar(2083) NOT NULL,
  `handphone` int(12) NOT NULL,
  `adminstat` binary(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$sql2 = "INSERT INTO db.userdb (`username`, `passwordhash`, `email`, `userpic`, `handphone`, `adminstat`) VALUES
('Administrator', '$2y$10\$KgsSNVJ8Io/0IQquuJXkqOHm46/jfw7CQl7tTbeGmzO8RsovtUDh6', 'Administrator@Admin.com', '', 92131234, 0x31),
('Jeremy', '$2y$10\$KgsSNVJ8Io/0IQquuJXkqOHm46/jfw7CQl7tTbeGmzO8RsovtUDh6', 'BigBoyJeremy@gmail.com', '', 92419291, 0x00);";
if (mysqli_query($conn, $sql)) {
    if (mysqli_query($conn, $sql2)) {
        header("Location: ../login.php");
    }
    else{
        header("Location: ../login.php");
    }
} else {
    if (mysqli_query($conn, $sql2)) {
        header("Location: ../login.php");
    }
    else{
        header("Location: ../login.php");
    }
}

mysqli_close($conn);

?>