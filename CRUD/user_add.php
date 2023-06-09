<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="user_view.php">Home</a>
    <br/><br/>
 
    <form action="user_add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name   = $_POST['nama_lengkap'];
        $usn    = $_POST['username'];
        $pw     = $_POST['password'];
        $email  = $_POST['email'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO `user`(`username`, `password`, `nama_lengkap`, `email`) VALUES ('$name','$usn','$pw','$email')");
        
        // Show message when user added
        echo "User added successfully. <a href='user_view.php'>View Users</a>";
    }
    ?>
</body>
</html>