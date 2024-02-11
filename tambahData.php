<?php

require "koneksiku.php";
$nama = $_POST['nama'];
$deksripsi = $_POST['deksripsi'];

$query = "INSERT INTO todo (nama_kegiatan,deksripsi) VALUES ('$nama','$deksripsi')";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    mysqli_close($conn);
    header("Location: index.php");
} else {
    echo "error";
}