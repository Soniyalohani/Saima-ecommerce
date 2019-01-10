<?php 
session_start();
?>
<!DOCTYPE>
<html>
	<head>
		<title>adminlogin</title>
<link rel="stylesheet" href="styles/login_style.css" media="all" /> 

	</head>
<body>
<div class="login">
<h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin']; ?></h2>

<h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
	<h1>Admin Login</h1>
	<p>Please enter your email and password</p>
    <form method="post" action="login.php">
    	<input type="text" name="email" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
    </form>
</div>


</body>
</html>
<?php 
include("includes/connect.php"); 
	
	if(isset($_POST['login'])){
	
		$email =$_POST['email'];
		$pass = $_POST['password'];
	
	$sel_ad = "select * from tbl_admin where email='$email' AND password='$pass'";
	
	$run_ad = mysqli_query($con, $sel_ad); 
	
	$check_ad = mysqli_num_rows($run_ad); 
	
	if($check_ad==1){
	
	$_SESSION['email']=$email; 
	
	echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
	}
	else {
	
	echo "<script>alert('Password or Email is wrong, try again!')</script>";
	
	}
	
	}

?>
