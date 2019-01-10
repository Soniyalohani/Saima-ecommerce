<?php 
session_start();
include("include/connect.php"); 
?>
<!DOCTYPE html>
<html>
<?php include('include/main.php');?>
   <link rel="stylesheet" type="text/css" href="css/reg.css"/>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="home.html"><img src="images/s.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="shop.php">SHOP</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
             <li class="nav-item active">
                <a class="nav-link" href="register.php">SIGN UP</a>
            </li>
            <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                <div class="overlay-content">
                  <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
              <button class="openBtn" onclick="openSearch()"><i class="fa fa-search"></i></button>
                <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fa fa-shopping-cart" style="font-size:24px"></i></a>
                    </li>
                  </ul>
        </div>
        </nav>
    </div>
  </header>
	<body>
	<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
		
  	        <div class="register-container">
				<h1>REGISTER</h1>
				<h4> It's free and takes less than a minute.</h4><br>
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                        <label for="name"><b>Name</b></label>
                        <input type="text" class="form-control" placeholder="Enter name" name="customer_name" required pattern="^[A-Za-z]+">
                    </div>
                    <div class="form-group">
                        <label for="image"><b>Image</b></label>
                         <input type="file" class="form-control" id="inputcImage" name="customer_image" required/>
                        
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <input type="email" class="form-control" placeholder="Enter Email Address" name="customer_email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="psw"><b>Password</b></label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="customer_password" required>
                    </div>
                    <div>
                        <label for="phone"><b> Phone</b></label>
                        <input type="number" class="form-control" placeholder="Enter your contact number" name="customer_phone" required>
                    </div>
                    <div class="form-group">
                        <label for="address"><b>Address</b></label>
                        <input type="text" class="form-control" placeholder="Enter Address" name="customer_address" required>
                    </div>        
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="register">Submit</button>
                     
                    </div>
                     <p>Already a member?<a href="customer_login.php">&nbsp;<button type="button" class="btn btn-primary">login</button></a></p>
                </form>
            </div>
    </body>
    </html>
    <?php
   include("include/connect.php");  
   if(isset($_POST['register']))
   {
          $c_name=$_POST['customer_name'];
          $c_image=$_FILES['customer_image'];
          $c_image= $_FILES['customer_image']['name'];  
          $c_tmp_image= $_FILES['customer_image']['tmp_name'];  
            if(isset($c_image)){
              $location = 'uploads/';      
              if(move_uploaded_file($c_tmp_image, $location.'/'.$c_image)){
                  echo 'File uploaded successfully';
              }
    }else 
    {
        echo 'error uploading the file!!';
    }
          $c_email=$_POST['customer_email'];
          $c_pass=$_POST['customer_password'];
          $c_phone=$_POST['customer_phone'];
          $c_address=$_POST['customer_address'];
       
        $q=" INSERT INTO tbl_customer (`customer_name`, `customer_image`,`customer_email`,`customer_password`,`customer_phone`,`customer_address`) VALUES('$c_name','$c_image','$c_email','$c_pass','$c_phone','$c_address')";
    $query=mysqli_query($con,$q);
  if($query)
    {
      echo "<script>alert('Post Has Been Submitted Successfully')</script>";
    }
}
    
?>
<script type="text/javascript">

        function openSearch() {
          document.getElementById("myOverlay").style.display = "block";
        }
        
        function closeSearch() {
          document.getElementById("myOverlay").style.display = "none";
        }
        </script>
    


