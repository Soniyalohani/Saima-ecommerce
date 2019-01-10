<?php 
session_start(); 

if(!isset($_SESSION['email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('includes/head.php');?>
</head>
<body>
  <?php include('includes/nav.php');?>
  <?php include('includes/side.php');?>
		<div class="col-lg-7">
			<div class="panel panel-primary">
				<div class="panel panel-body">		  
				   <h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
				   	<div class="content-inner">
						<?php 
						if(isset($_GET['view_customer'])){
						include("view_customer.php"); 
						}
						if(isset($_GET['insert_productlist'])){
		
						include("insert_productlist.php"); 
						}
						if(isset($_GET['view_productlist'])){
		
						include("view_productlist.php"); 
						}
						if(isset($_GET['insert_productcat'])){
		
						include("insert_productcat.php"); 
						}
						if(isset($_GET['view_productcat'])){
		
						include("view_productcat.php"); 
						}
						if(isset($_GET['view_order'])){
		
						include("view_order.php"); 
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php } ?>
