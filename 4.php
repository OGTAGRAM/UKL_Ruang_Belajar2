<?php
include('connect.php');

if (isset($_POST['submit'])) {
    $email = $_POST['uname'];
    $pass = $_POST['psw'];

    $sql = "SELECT * FROM `user` WHERE email_user = '$email' AND password_user = '$pass';";
    $hasil = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_array($hasil, MYSQLI_ASSOC);
    $jum = mysqli_num_rows($hasil);

    // Lakukan pemeriksaan hasil query dan ambil tindakan yang sesuai
    if ($jum > 0) {
        // Login berhasil, lakukan tindakan yang diinginkan
        echo "Login berhasil!";
        // Misalnya, alihkan pengguna ke halaman lain
        header("Location: dashboard.php");
        exit();
    } else {
        // Login gagal, tampilkan pesan error atau lakukan tindakan lain
        echo "Email atau password salah. Silakan coba lagi.";
    }
}
?>