<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ruang_belajar';
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>