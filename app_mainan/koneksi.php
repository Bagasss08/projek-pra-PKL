<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "db_mainan";

$koneksi = mysqli_connect ($server, $username, $password, $database);

if ($koneksi) {
    echo "koneksi berhasil";
} else {
    echo "koneksi gagal";
}
?>