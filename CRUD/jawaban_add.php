<html>
<head>
    <title>Add Jawaban</title>
</head>
 
<body>
    <?php
        include_once("config.php");
        $url        = $_GET['id_pertanyaan'];
        $i          = mysqli_query($mysqli, "SELECT deskripsi as pertanyaan FROM `pertanyaan` WHERE `id` = '$url'");
        $j          = $i->fetch_assoc();
        $pertanyaan = $j['pertanyaan'];
    ?>
    <a href="jawaban_view.php">Home</a>
    <a href="pertanyaan_view.php">Pertanyaan</a><br/><br/>
 
    <form action="jawaban_add.php?id_pertanyaan=<?= $_GET['id_pertanyaan'] ?>" method="post" name="form1">
        <table width="30%" border="0">
            <tr> 
                <td>Pertanyaan</td>
                <td><?= $pertanyaan ?></td>
            </tr>
            <tr> 
                <td>Jawaban</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr> 
                <td>Poin</td>
                <td><input type="text" name="poin"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $id_pertanyaan  = $_GET['id_pertanyaan'];
            $deskripsi      = $_POST['deskripsi'];
            $poin           = $_POST['poin'];
            
            $result = mysqli_query($mysqli, "INSERT INTO `jawaban`(`id_pertanyaan`, `deskripsi`, `poin`) VALUES ('$id_pertanyaan', '$deskripsi', '$poin')");
            
            echo "Jawaban added successfully. <a href='jawaban_view.php'>View jawaban</a>";
        }
    ?>
</body>
</html>
