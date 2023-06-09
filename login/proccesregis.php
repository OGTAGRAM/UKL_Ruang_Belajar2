<?php
include('conn.php');

if (isset($_POST['btn-save'])) {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['Password']);

    if (empty($username) || empty($password)) {
        echo 'Tolong isi semua field yang kosong.';
    } else {
        $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            header("Location: login.php");
            exit;
        } else {
            echo 'Terjadi kesalahan dalam query.';
        }
    }
}
?>