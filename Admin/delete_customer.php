<?php

include("includes/connect.php"); 

$path = '../uploads';

$c_id = $_GET['customer_id'];

$query = " select * FROM `tbl_customer` WHERE customer_id = $c_id ";

$ans = mysqli_query($con, $query);

$row=mysqli_fetch_row($ans);

unlink($path.'/'.$row[5]);

$q = " DELETE FROM `tbl_customer` WHERE customer_id = $c_id ";
$query=mysqli_query($con, $q);
header('location:index.php?view_customer');
?>
 