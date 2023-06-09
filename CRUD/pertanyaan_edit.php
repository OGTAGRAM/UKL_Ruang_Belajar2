<?php
    include_once("config.php");
 
    if(isset($_POST['update'])) {	
        $id = $_POST['id'];
        $deskripsi = $_POST['deskripsi'];
        $skor = $_POST['skor'];
            
        // update pertanyaan data
        $result = mysqli_query($mysqli, "UPDATE pertanyaan SET deskripsi='$deskripsi', skor='$skor' WHERE id='$id'");
        
        header("Location: pertanyaan_view.php");
    }

    $id     = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM pertanyaan WHERE id=$id");
    
    while($pertanyaan_data = mysqli_fetch_array($result)) {
        $id = $pertanyaan_data['id'];
        $deskripsi = $pertanyaan_data['deskripsi'];
        $skor = $pertanyaan_data['skor'];
    }
?>
<html>
<head>	
    <title>Edit Pertanyaan Data</title>
</head>
 
<body>
    <a href="pertanyaan_view.php">Home</a>
    <br/><br/>
    
    <form name="update_pertanyaan" method="post" action="pertanyaan_edit.php?id=<?= $_GET['id'] ?>">
        <table border="0">
            <tr> 
            <td>ID</td>
            <td><input type="text" name="id" disabled ="true" value="<?php echo $id; ?>"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
            </tr>
            <tr> 
                <td>Skor</td>
                <td><input type="text" name="skor" value=<?php echo $skor;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>