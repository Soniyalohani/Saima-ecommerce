<?php 
session_start(); 
if(!isset($_SESSION['email'])){
  echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {
?>  
<?php
   include("includes/connect.php");  
   if(isset($_POST['insertpro']))
   {
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
          $q=" INSERT INTO tbl_product (`product_cat`,`product_name`,`product_price`,`product_image`,`product_keyword`,`product_description`) VALUES(' $pro_cat','$pro_name','$pro_price','$pro_image','$pro_key','$pro_desc')";
          $query=mysqli_query($con,$q);
          if($query)
          {
            echo "<script>alert('Post Has Been Submitted Successfully')</script>";
            header("location:index.php?view_productlist");
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
        <div class="insert-form">
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <h1 class="text-center text-warning" style="margin-top: 120px;">Insert New Products </h1>
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
            <button type="submit" class="btn btn-success" name="insertpro">Create post</button>
          </form>
        </div>
        </div>
      
</body>
</html>
<?php } ?>
