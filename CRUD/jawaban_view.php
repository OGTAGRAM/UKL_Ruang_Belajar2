<html>
<head>    
    <title>Jawaban List</title>
</head>
 
<body>
<?php
    include_once("config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM jawaban ORDER BY id ASC");
?>
    <a href="index.php">Home</a><br/><br/>
    <a href="pertanyaan_view.php">Pertanyaan</a><br/><br/>
    <table width='80%' border=1>
        <tr>
            <th>ID</th> 
            <th>Pertanyaan</th> 
            <th>Jawaban</th>  
            <th>Poin</th> 
            <th>Aksi</th>
        </tr>
        <?php  
            while($jawaban_data = mysqli_fetch_array($result)) { 
                $id_pertanyaan  = $jawaban_data['id_pertanyaan'];
                $i              = mysqli_query($mysqli, "SELECT deskripsi as pertanyaan FROM `pertanyaan` WHERE `id`='$id_pertanyaan'");
                $j              = $i->fetch_assoc();
                $pertanyaan     = $j['pertanyaan'];

                echo "<tr>";
                echo "<td>".$jawaban_data['id']."</td>";
                echo "<td>".$pertanyaan."</td>";
                echo "<td>".$jawaban_data['deskripsi']."</td>";  
                echo "<td>".$jawaban_data['poin']."</td>";  
                echo "<td><a href='jawaban_edit.php?id=".$jawaban_data['id']."'>Edit</a> | 
                <a href='jawaban_delete.php?id=".$jawaban_data['id']."'>Delete</a></td></tr>";        
            }
        ?>
    </table>
</body>
</html>
