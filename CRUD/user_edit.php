<?php
    // include database connection file
    include_once("config.php");
 
    // Check if form is submitted for user update, then redirect to homepage after update
    if(isset($_POST['update'])){
        $id     = $_POST['user_id'];
        $name   = $_POST['nama_lengkap'];
        $usn    = $_POST['username'];
        $pw     = $_POST['password'];
        $email  = $_POST['email'];
            
        // update user data
        $result = mysqli_query($mysqli, "UPDATE `user` SET `user_id`='$id',`username`='$usn',`password`='$pw',`nama_lengkap`='$name',`email`='$email' WHERE user_id='$id'");
        
        // Redirect to homepage to display updated user in list
        header("Location: user_view.php");
    }

    // Display selected user data based on id
    // Getting id from url
    $id = $_GET['user_id'];
    
    // Fetech user data based on id
    $result = mysqli_query($mysqli, "SELECT * FROM user WHERE user_id=$id");
    
    while($user_data = mysqli_fetch_array($result))
    {
        $id     = $user_data['user_id'];
        $usn    = $user_data['username'];
        $name   = $user_data['nama_lengkap'];
        $pw     = $user_data['password'];
        $email  = $user_data['email'];
    }
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="user_view.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="user_edit.php?user_id=<?= $_GET['user_id']?>">
        <table border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="user_id" disabled="true" value=<?php echo $id;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_lengkap" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username" value=<?php echo $usn;?>></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="password" value=<?php echo $pw;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['user_id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>