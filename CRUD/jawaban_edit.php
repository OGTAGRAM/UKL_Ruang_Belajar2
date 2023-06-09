<?php
include_once("config.php");
 
    if(isset($_POST['update'])) {	
        $id         = $_GET['id'];
        $deskripsi  = $_POST['deskripsi'];
        $poin       = $_POST['poin'];
            
        $update     = mysqli_query($mysqli, "UPDATE jawaban SET deskripsi='$deskripsi', poin='$poin' WHERE id='$id'");
        header("Location: jawaban_view.php");
    }
    $id = $_GET['id'];  
    $result = mysqli_query($mysqli, "SELECT * FROM jawaban WHERE id=$id");
    
    while($jawaban_data = mysqli_fetch_array($result)){
        $id_pertanyaan  = $jawaban_data['id_pertanyaan'];
        $i              = mysqli_query($mysqli, "SELECT deskripsi as pertanyaan FROM `pertanyaan` WHERE `id`='$id_pertanyaan'");
        $j              = $i->fetch_assoc();
        $pertanyaan     = $j['pertanyaan'];

        $id         = $jawaban_data['id'];
        $deskripsi  = $jawaban_data['deskripsi'];
        $poin       = $jawaban_data['poin'];
    }
?>
<html>
<head>	
    <title>Edit Jawaban Data</title>
</head>
 
<body>
    <a href="jawaban_view.php">Home</a>
    <br/><br/>
    <form name="update_jawaban" method="post" action="jawaban_edit.php?id=<?= $_GET['id']?>">
        <table border="0">
            <tr> 
                <td>Pertanyaan</td>
                <td><?= $pertanyaan ?></td>
            </tr>
            <tr> 
                <td>Jawaban</td>
                <td><input type="text" name="deskripsi" value="<?php echo $deskripsi; ?>"></td>
            </tr>
            <tr> 
                <td>Poin</td>
                <td><input type="text" name="poin" value="<?php echo $poin; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
