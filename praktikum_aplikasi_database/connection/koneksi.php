<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "dbpraktikum";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi) {
    die("Failed to connect to the database: " . mysqli_connect_error());
}

