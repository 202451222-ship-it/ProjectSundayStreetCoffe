<?php
$host = "localhost";
$user = "root"; 
$password = ""; 
$database = "street_coffee_db"; 
$koneksi = new mysqli($host, $user, $password, $database);


if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$koneksi->set_charset("utf8");


?>