<?php
$db_host = '127.0.0.1'; 
$db_user = 'edocsetiawan'; 
$db_pass = 'Masukaja1234!@'; 
$db_name = 'wedding'; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
}

$alias = $_GET['guest'];
$sql = "SELECT * FROM edomonike WHERE alias = '$alias'";

$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>