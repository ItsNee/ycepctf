<?php

$host = "mysql";
$user = "root";
$pass = "rootpass";
$db_name = "db";
$conn = mysqli_connect($host, $user, $pass, $db_name);
if (!$conn) {
    die("Connection failed : ".mysqli_connect_error());
}
