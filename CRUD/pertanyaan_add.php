<html>
<head>
    <title>Add Pertanyaan</title>
</head>
 
<body>
    <a href="pertanyaan_view.php">Home</a>
    <br/><br/>
 
    <form action="pertanyaan_add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr> 
                <td>Skor</td>
                <td><input type="text" name="skor"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
    // Check if form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $deskripsi  = $_POST['deskripsi'];
        $skor       = $_POST['skor'];

        // Include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO `pertanyaan`(`deskripsi`, `skor`) VALUES ('$deskripsi', '$skor')");
        
        // Show message when pertanyaan added
        echo "Pertanyaan added successfully. <a href='pertanyaan_view.php'>View pertanyaan</a>";
    }
    ?>
</body>
</html>
