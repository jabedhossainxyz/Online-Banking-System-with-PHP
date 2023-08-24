<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "net_banking";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
