<?php 
include "database.php";
$an=$_GET['user_id'];

$query=" DELETE FROM register WHERE id='$an' ";

// syntax error, unexpected '$query' (T_VARIABLE) in C:\laragon\www\user_management\delete.php on line 4

$data=mysqli_query($conn,$query);
header("location: index.php");
?>