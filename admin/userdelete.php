<?php 
include 'connection.php';
$id = $_POST['id'];
$sql="DELETE FROM `gdfproject_members` WHERE id='{$id}'";
mysqli_query($conn,$sql); 
?>