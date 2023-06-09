<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete the answer
$id = $_GET['id'];
 
// Delete answer row from table based on the given id
$result = mysqli_query($mysqli, "DELETE FROM jawaban WHERE id=$id");
 
// After delete, redirect to the Home page so that the latest answer list will be displayed
header("Location: jawaban_view.php");
?>
