<?php 
include("include/connect.php");
?>
<?php include('include/main.php');?>
<header>
	  <link rel="stylesheet" type="text/css" href="css/clog.css" />
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php"><img src="images/s.jpg"></a>
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
<!--log in form start-->
 <body class="login-body">
  <div id="LoginForm">
  <div class="container">
  <div class="login-form">
  <div class="main-div">
      <div class="panel">
     <h2>USER LOGIN</h2>
     <p>Please enter your email and password</p>
     </div>
      <form id="Login">
  
          <div class="form-group">
              <i class="fa fa-user"></i>
              <input type="email" name="customer_email" class="form-control" id="inputEmail" placeholder="Email Address">
          </div>
          <div class="form-group">
              <input type="password" name="customer_password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary" name="login">Login</button>
           <p>New?<a href="register.php"> &nbsp;SignUp</a></p>
      </form>
      </div>
  </div>
</div>
</div>
</div>
	   <?php 
      include("include/connect.php");
      if(isset($_POST['login'])){
      $c_email = $_POST['customer_email'];
      $c_pass = $_POST['customer_password'];
      $sel_c = "select * from tbl_customer where customer_email='$c_email' AND c_password='$c_password'";
    
    $run_c = mysqli_query($con, $sel_c);
    
    $check_customer = mysqli_num_rows($run_c); 
    
    if($check_customer==0){

            $_SESSION['customer_email']=$c_email; 
            echo "<script>window.open('shop.php?logged_in=You have successfully Logged in!','_self')</script>";
             }
            else {
            echo "<script>alert('Password or Username is wrong, try again!')</script>";
       
           }
    
        ?>
        </form>
    </body>

    </html>
    <?php
 } ?>
    

	<script type="text/javascript">

        function openSearch() {
          document.getElementById("myOverlay").style.display = "block";
        }
        
        function closeSearch() {
          document.getElementById("myOverlay").style.display = "none";
        }
        </script>
    
	
