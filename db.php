<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "test";
$con = mysqli_connect($serverName, $userName, $password, $dbName);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>

