
<?php 
session_start(); 

include("functions/functions.php");

include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--bootstrap css and js connection-->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<meta charset="utf-8" />
<script src="jq/jquery-2.2.3.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">
.navbar-toggle
{
  float: left;
  margin-left: 10px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
    $("#myNav").affix({
        offset: { 
            top: $(".header").outerHeight(true)  /* Set top offset equal to header outer height including margin */
        }
    });
});
</script>
<!--connection ends here-->
<title>Cart</title>
</head>
<body data-spy="scroll" data-target="#myNav">

<?php include('includes/topnav.php') ?> <!--top nav-->

<?php include('includes/mainnav.php') ?> <!--main nav-->

<div class="container">

<div class="row">
<!--category and brand section start-->
<div class="col-md-3">   

<!--panel for category start here-->
<div class="panel panel-default">
              <div class="panel panel-heading"><h4 class="text-center">Category</h4></div>
              <div class="panel panel-body">              
               <ul class="nav nav-pills nav-stacked">
			   <li><a href="#"> <?php getCats(); ?> </a></li>
			   
			   </ul>
			   </div>
			   </div>





<!--category panel ends here-->

<!--panel for brand start here-->
<div class="panel panel-default">
              <div class="panel panel-heading"><h4 class="text-center">Brand</h4></div>
              <div class="panel panel-body">              
               <ul class="nav nav-pills nav-stacked">
			   <li><a href="#">  	<?php getBrands(); ?></a></li>
			   
			   </ul>
			   </div>
			   </div>

<!--brnad panel ends here-->

</div>   <!--col end-->
<!--category and brand ends here-->


		
			<!--Post body starts here-->
<div class="col-md-9">   <!--col start-->
	
					<!--shopping card detail start here-->
<?php cart(); ?>
			
			
					<div class="panel panel-footer">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b>Your</b>" ;
					}
					else {
						
					echo "<b>Welcome Guest:</b>";
					}
					?>
					
					<b style="color:green">Shopping Cart -</b> Total Items: <font style="color:red"><b><?php total_items();?></b></font> Total Price: <?php total_price(); ?>
					<a href="index.php" style="color:red">Back to Shop</a>
		
					
					
					
					<?php 
					if(!isset($_SESSION['customer_email'])){
					
					echo "<a href='checkout.php'>Login</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
				</div>  <!--panel footer end-->
					
					<!--shopping card detail end here-->
					
					<!--cart section starts here-->
			
			
				
			<form action="" method="post" enctype="multipart/form-data">
			
				<table align="center" width="700">
					
					<tr align="center">
						<th>Remove</th>
						<th>Product(S)</th>
						<th>Quantity</th>
						<th>Total Price per Item</th>
					</tr>
					
		<?php 
		$total = 0;
		
		global $con; 
		
		$ip = getIp(); 
		
		$sel_price = "select * from cart where ip_add='$ip'";
		
		$run_price = mysqli_query($con, $sel_price); 
		
		while($p_price=mysqli_fetch_array($run_price)){
			
			$pro_id = $p_price['p_id']; 
			
			$pro_price = "select * from products where product_id='$pro_id'";
			
			$run_pro_price = mysqli_query($con,$pro_price); 
			
			while ($pp_price = mysqli_fetch_array($run_pro_price)){
			
			$product_price = array($pp_price['product_price']);
			
			$product_title = $pp_price['product_title'];
			
			$product_image = $pp_price['product_image']; 
			
			$single_price = $pp_price['product_price'];
			
			$values = array_sum($product_price); 
			
			$total += $values; 
					
					?>
					
					<tr align="center">
						<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
						<td><?php echo $product_title; ?><br>
						<img src="admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/>
						</td>
						<td><input type="text" size="4" name="qty" value="<?php echo $_SESSION['qty'];?>"/></td>
						<?php 
						if(isset($_POST['update_cart'])){
						
							$qty = $_POST['qty'];
							
							$update_qty = "update cart set qty='$qty'";
							
							$run_qty = mysqli_query($con, $update_qty); 
							
							$_SESSION['qty']=$qty;
							
							$total = $total*$qty;
						}
						
						
						?>
						
						
						
						<td><?php echo "$" . $single_price; ?></td>
					</tr>
					
					
				<?php } } ?>
				
				
				<tr>
						<td colspan="4" align="right"><b>Sub Total:</b></td>
						<td><?php echo "$" . $total;?></td>
					</tr>
					
					<tr align="center">
						<td colspan="2"><input type="submit" name="update_cart" value="Update Cart" class="btn btn-danger"/></td>
						<td>
</button>

						<input type="submit" name="continue" value="Continue Shopping" class="btn btn-danger"/></button></td>
						<td><button  class='btn btn-danger' ><a href="checkout.php" style="text-decoration:none; color:white;">Checkout</a></button></td>
					</tr>
					
				</table> 
			
			</form>
			
	<?php 
		
	function updatecart(){
		
		global $con; 
		
		$ip = getIp();
		
		if(isset($_POST['update_cart'])){
		
			foreach($_POST['remove'] as $remove_id){
			
			$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
			
			$run_delete = mysqli_query($con, $delete_product); 
			
			if($run_delete){
			
			echo "<script>window.open('cart.php','_self')</script>";
			
			}
			
			}
		
		}
		if(isset($_POST['continue'])){
		
		echo "<script>window.open('index.php','_self')</script>";
		
		}
	
	}
	echo @$up_cart = updatecart();
	
	?>
	

</div>  <!--col end-->

</div>
<!--row ends here-->
</div><!--container ends here-->


<?php include('includes/footer.php') ?> <!--footer-->

</body>
</html>