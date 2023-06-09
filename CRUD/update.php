<?php
if (isset($_POST['proses'])) {
    include "config.php";
    $id = $_POST['id'];
    $name = $_POST['nama_lengkap'];
    $usn = $_POST['username'];
    $pw = $_POST['password'];
    $email = $_POST['email'];
    // include database connection file
    include_once("config.php");
    $result = mysqli_query($mysqli, "UPDATE user SET nama_lengkap = '$name', username = '$usn', password = '$pw', email = '$email' WHERE id = '$id'");
    if ($result) {
        header("location: index.php");
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
?>