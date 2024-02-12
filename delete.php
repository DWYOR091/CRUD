<?php
require_once "koneksiku.php";
$no = $_GET['no'];
$conn->query("DELETE FROM todo WHERE no=$no");

header("Location: index.php");