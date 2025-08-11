<?php

$_HOST = "localhost";
$_USERNAME = "root";
$_PASWORD = "";
$_DATABASE = "db_porto_3_2025";
$koneksi = mysqli_connect($_HOST, $_USERNAME, $_PASWORD, $_DATABASE);
if (!$koneksi) {
    echo "koneksi gagal";
}
