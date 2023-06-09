<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY user_id ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="index.php">Home</a><br/><br/>
<a href="user_add.php">Add User</a><br/><br/>
 
    <table width='80%' border=1>
        <tr>
            <th>ID</th> 
            <th>Nama Lengkap</th> 
            <th>Username</th> 
            <th>Password</th> 
            <th>Email</th> 
            <th>Aksi</th>
        </tr>
        <?php  
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['user_id']."</td>";
                echo "<td>".$user_data['username']."</td>";
                echo "<td>".$user_data['nama_lengkap']."</td>";
                echo "<td>".$user_data['password']."</td>";
                echo "<td>".$user_data['email']."</td>";    
                echo "<td><a href='user_edit.php?user_id=$user_data[user_id]'>Edit</a> | <a href='user_delete.php?user_id=$user_data[user_id]'>Delete</a>";        
            }
        ?>
    </table>
</body>
</html>