<?php 
session_start(); 
if(!isset($_SESSION['email'])){
  echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {
?>
<?php
include("includes/connect.php");  
  if(isset($_GET['update'])){
  $get_id = $_GET['update']; 
  $get_up = "select * from tbl_category where id='$get_id'";
  $run_up = mysqli_query($con, $get_up); 
  $i = 0;
  $row_up=mysqli_fetch_array($run_up);
            $up_id=$row_up['id'];
            $up_procat=$row_up['product_cat'];          
}
?>  
<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.php');?>
</head>
<body>  
   <?php include('includes/side.php');?>
  <?php include('includes/nav.php');?>
<div class="col-lg-7">
        <div class="insert-formcat">
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <h1 class="text-center text-warning">Insert New Category </h1>
          <div class="form-group">
              <label for="Category"><b> Product Category:</b></label>
                <input type="text" class="form-control" placeholder="Enter Product Category" name="product_cat">
            </div><br>
            <button type="submit" class="btn btn-success" name="update_cat">Update post</button>
             </form>
        </div>
      </div>
      
</body>
</html>
<?php
include("includes/connect.php");  
  if(isset($_POST['update_cat']))

  {
          $update_id=$up_id;
          $procat=$_POST['product_cat'];
          $q = "update tbl_category set product_cat='$procat' where id='$update_id'";
          $query = mysqli_query($con,$q);
          if($query)
          {
            echo "<script>alert('Post Has Been updated Successfully')</script>";
            echo "<script>window.open('index.php?view_productcat','_self')</script>";
          }
      }

?>
 <?php
   }?>