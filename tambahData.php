<?php

require "koneksiku.php";
$nama = $_POST['nama'];
$deksripsi = $_POST['deksripsi'];

$query = "INSERT INTO todo VALUES ('',$nama,$deksripsi)";
mysqli_query($conn, $query);