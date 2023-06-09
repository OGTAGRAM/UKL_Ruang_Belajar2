<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY user_id ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="user_view.php">User</a><br/><br/>
<a href="pertanyaan_view.php">Pertanyaan</a><br/><br/>
<a href="jawaban_view.php">Jawaban</a><br/><br/>
 
</body>
</html>