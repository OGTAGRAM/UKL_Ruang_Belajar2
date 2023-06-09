<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM pertanyaan ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>Pertanyaan</title>
</head>
 
<body>
    <a href="index.php">Home</a><br/><br/>
    <a href="pertanyaan_add.php">Add Pertanyaan</a><br/><br/>

    <table width='100%' border=1>
        <tr>
            <th>ID</th> 
            <th>Deskripsi</th>  
            <th>Skor</th>  
            <th width="300px">Aksi</th>
        </tr>
        <?php  
            while($pertanyaan_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$pertanyaan_data['id']."</td>";
                echo "<td>".$pertanyaan_data['deskripsi']."</td>";  
                echo "<td>".$pertanyaan_data['skor']."</td>";  
                echo "<td><a href='pertanyaan_edit.php?id=".$pertanyaan_data['id']."'>Edit</a> | 
                <a href='pertanyaan_delete.php?id=".$pertanyaan_data['id']."'>Delete</a> |
                <a href='jawaban_add.php?id_pertanyaan=".$pertanyaan_data['id']."'>Add Jawaban</a>";        
            }
        ?>
    </table>
</body>
</html>
