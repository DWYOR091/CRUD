<?php
require "koneksiku.php";
$no = $_POST['no'];
mysqli_real_escape_string($conn, $no);
$nama = $_POST['nama'];
$deks = $_POST['deksripsi'];
$data = $conn->query("UPDATE todo set nama_kegiatan = '$nama',deksripsi = '$deks' where no = $no");

if ($data) {
    header('Location: index.php');
} else {
    echo "gagal";
}