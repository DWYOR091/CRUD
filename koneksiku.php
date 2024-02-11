<?php
$servername = "localhost";
$database = "crud1";
$username = "root";
$pass = "";
$conn = new mysqli($servername, $username, $pass, $database);

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
// echo "Connection Successful";