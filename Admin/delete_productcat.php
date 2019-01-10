<?php

include("includes/connect.php"); 

$id = $_GET['id'];

$query = "select * FROM `tbl_category` WHERE id = $id ";

$ans = mysqli_query($con, $query);

$row=mysqli_fetch_row($ans);

$q = " DELETE FROM `tbl_category` WHERE id = $id ";
$query=mysqli_query($con, $q);
header('location:index.php? view_productcat');
?>
 