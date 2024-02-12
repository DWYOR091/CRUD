<?php
require "koneksiku.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$login = $conn->query("SELECT * FROM user where username = '$username' && password = '$password' ");
$a = mysqli_fetch_all($login);
$row = mysqli_num_rows($login);
session_start();
var_dump($row);
if ($row == 1) {
    $_SESSION['username'] = $username;
    header('Location: index.php');
    exit();
    $conn->close();
} else {
    session_start();
    $_SESSION['gagal'] = "USERNAME DAN PASSWORD SALAH";
    header('Location: login.php');
}