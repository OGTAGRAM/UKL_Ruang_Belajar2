<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete the question
$id = $_GET['id'];
 
// Delete question row from table based on the given id
$result = mysqli_query($mysqli, "DELETE FROM pertanyaan WHERE id=$id");
 
// After delete, redirect to the Home page so that the latest question list will be displayed
header("Location: pertanyaan_view.php");
?>
