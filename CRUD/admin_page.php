<html>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="soal">
        <input type="file" name="jawaban">
        <input type="submit" value="Unggah">
      </form>
</html>
<?php
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "INSERT INTO tryout (soal_name, soal_size, soal_type, jawaban_name, jawaban_size, jawaban_type) 
          VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'ssssss', $soal_name, $soal_size, $soal_type, $jawaban_name, $jawaban_size, $jawaban_type);
mysqli_stmt_execute($stmt);

$soal = $_FILES['soal']['tmp_name'];
$jawaban = $_FILES['jawaban']['tmp_name'];
$soal_dest = 'uploads/' . $_FILES['soal']['name'];
$jawaban_dest = 'uploads/' . $_FILES['jawaban']['name'];
move_uploaded_file($soal, $soal_dest);
move_uploaded_file($jawaban, $jawaban_dest);

$soal_name = mysqli_real_escape_string($conn, $_FILES['soal']['name']);
$soal_size = mysqli_real_escape_string($conn, $_FILES['soal']['size']);
$soal_type = mysqli_real_escape_string($conn, $_FILES['soal']['type']);
$jawaban_name = mysqli_real_escape_string($conn, $_FILES['jawaban']['name']);
$jawaban_size = mysqli_real_escape_string($conn, $_FILES['jawaban']['size']);
$jawaban_type = mysqli_real_escape_string($conn, $_FILES['jawaban']['type']);

$query = "INSERT INTO tryout (soal_name, soal_size, soal_type, jawaban_name, jawaban_size, jawaban_type) 
          VALUES ('$soal_name', '$soal_size', '$soal_type', '$jawaban_name', '$jawaban_size', '$jawaban_type')";
mysqli_query($conn, $query);

echo "File berhasil diunggah!";
?>