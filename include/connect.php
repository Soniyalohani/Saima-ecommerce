<?php
  $server="localhost";
  $user="root";
  $pass="";
  $dbname="saimacollection";
  $con=mysqli_connect($server,$user,$pass)or die(mysqli_error());
  mysqli_select_db($con,$dbname)or die(mysqli_error());
?>