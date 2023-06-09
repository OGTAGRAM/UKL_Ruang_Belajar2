<?php
include('conn.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password';";
    $hasil = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($hasil, MYSQLI_ASSOC);
    $jum = mysqli_num_rows($hasil);

    if ($jum == 1) {
        header("Location: index_2.php");
        exit;
    } else {
        echo '<script>
        window.location.href = "index-after-login.php";
        alert("Login failed. Invalid username or password!");
        </script>';
    }
}
?>