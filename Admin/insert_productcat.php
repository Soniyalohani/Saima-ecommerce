<?php 
session_start(); 
if(!isset($_SESSION['email'])){
  echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {
?>  
<?php
   include("includes/connect.php");  
   if(isset($_POST['insertcat']))
   {
          $procat=$_POST['product_cat'];
          $q=" INSERT INTO tbl_category (product_cat) values (' $procat')";
          $query=mysqli_query($con,$q);
          if($query)
          {
            echo "<script>alert('Post Has Been Submitted Successfully')</script>";
            header("location:index.php?view_productcat");
          }
      }
    
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>  
  <?php include('includes/nav.php');?>
      <div class="col-lg-7">
        <div class="insert-formcat">
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <h1 class="text-center text-warning">Insert New Category </h1>
          <div class="form-group">
              <label for="Category"><b> Product Category:</b></label>
                <input type="text" class="form-control" placeholder="Enter Product Category" name="product_cat">
            </div><br>
            <button type="submit" class="btn btn-success" name="insertcat">Create post</button>
             </form>
        </div>
      </div>
      
</body>
</html>
<?php } ?>
