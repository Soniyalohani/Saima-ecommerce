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
  $get_up = "select * from tbl_product where product_id='$get_id'";
  $run_up = mysqli_query($con, $get_up); 
  $i = 0;
  $row_up=mysqli_fetch_array($run_up);
            $up_pro_id =$row_up['product_id'];
            $up_pro_cat=$row_up['product_cat'];
            $up_pro_name=$row_up['product_name'];
            $up_pro_price=$row_up['product_price'];
            $up_pro_image=$row_up['product_image'];
            $up_pro_key=$row_up['product_keyword'];
            $up_pro_desc=$row_up['product_description'];
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
        <div class="insert-formup">
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <h1 class="text-center text-warning">Update Products </h1>
          <div class="form-group">
              <label for="Category"><b> Product Category:</b></label>
                <input type="text" class="form-control" placeholder="Enter Product Category" name="product_cat" required pattern="^[A-Za-z]+">
            </div><br>
            <div class="form-group">
                <label for="Category"><b> Product Name:</b></label>
                <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name"/>
            </div><br>
            <div class="form-group">
              <label for="Price"><b>Product Price</b></label>
               <input type="number" class="form-control" placeholder="Enter Price" name="product_price" required pattern="^[1-9][0-9]*$"/>
            </div>
             <div class="form-group">
              <label for="image"><b>Product Image:</b></label>
               <input type="file" class="form-control" id="inputproImage" name="product_image" required/>     
            </div><br>
             <div class="form-group">
              <label for="keyword"><b>Product keywords:</b></label>
               <input type="text" class="form-control" placeholder="Enter keyword" name="product_keyword" required pattern="^[A-Za-z]+"/>     
            </div><br>
                    
            <div class="form-group">
              <label for="psw"><b>Product Description:</b></label>
                <textarea name="product_description" required pattern="/^\p{Xan}+$/"></textarea> 
            </div>
            <div>
            <button type="submit" class="btn btn-success" name="updatepro">Update post</button>
          </div>
          </form>
        </div>
        </div>
      
</body>
</html>
<?php
include("includes/connect.php");  
  if(isset($_POST['updatepro']))

  {
          $update_pro_id=$up_pro_id;
          $pro_cat=$_POST['product_cat'];
          $pro_name=$_POST['product_name'];
          $pro_price=$_POST['product_price'];
          $pro_image=$_FILES['product_image'];
          $pro_image= $_FILES['product_image']['name'];  
          $pro_tmp_image= $_FILES['product_image']['tmp_name'];  
            if(isset($pro_image)){
              $location = 'productimage/';      
              if(move_uploaded_file($pro_tmp_image, $location.'/'.$pro_image)){
                  echo 'File uploaded successfully';
              }
    }else 
    {
        echo 'error uploading the file!!';
    }
         
          $pro_key=$_POST['product_keyword'];
          $pro_desc=$_POST['product_description'];
          $q = "update tbl_product set product_cat='$pro_cat', product_name='$pro_name',product_price='$pro_price',product_image='$pro_image',product_keyword='$pro_key',product_description='$pro_desc' where product_id='$update_pro_id'";
    $query = mysqli_query($con,$q);
     if($query)
          {
            echo "<script>alert('Post Has Been updated Successfully')</script>";
            echo "<script>window.open('index.php?view_productlist','_self')</script>";
          }
      }

?>
 <?php
   }?>