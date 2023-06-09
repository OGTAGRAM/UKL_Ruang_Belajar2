<?php
// isi nama host, username mysql, dan password mysql anda
$databaseHost = "localhost";
$databaseName = "ruang_belajar_2";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect(
    $databaseHost,
    $databaseUsername,
    $databasePassword,
    $databaseName
);