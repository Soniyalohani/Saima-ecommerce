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
</head>
  <body>
  <div class="panel panel-default"><br><br>
      <div>
          <h1 class="text-warning">Customer</h1><br><br>
          <table id="tabledata" class=" table table-striped table-hover table-bordered">
            <tr class="bg-white text-dark text-center">
            <th>Customer_id</th>
            <th>Customer_Name</th>
            <th>Customer_Image</th>
            <th>Customer_Email</th>
            <th>Customer_Password</th>
            <th>Customer_Phone</th>
            <th>Customer_Address</th>
            <th>Delete</th>
          
          </tr >
        </div>
      
        <?php
        include("includes/connect.php");  
        $q = "select * from tbl_customer ";
        $query = mysqli_query($con,$q);
        $i=0;
        while($row=mysqli_fetch_array($query))
        {
          $c_id=$row['customer_id'];
          $c_name=$row['customer_name'];
          $c_image=$row['customer_image'];
          $c_email=$row['customer_email'];
          $c_pass=$row['customer_password'];
          $c_phone=$row['customer_phone'];
          $c_address=$row['customer_address'];
          $i++;
          ?>
          <tr class="text-center"> 
            <td> <?php echo $c_id;?></td>
            <td> <?php echo $c_name;?></td>
            <?php 
            $image  = "../uploads/" . $c_image;
            ?>
            <td> <?php echo "<img src='".$image."'class=img-thumbnail width=100 height=100/>";?></td>
            <td> <?php echo $c_email;?></td>
            <td> <?php echo $c_pass;?></td>
            <td> <?php echo $c_phone;?></td> 
            <td> <?php echo $c_address;?></td>
            <td> <button class="btn-danger btn"> <a href="delete_customer.php?customer_id=<?php echo $row['customer_id']; ?>"class="text-white"value="delete" onclick='return confirmDelete()'> Delete </a></button> </td>
            
          </tr>
          <?php 
        }
        ?>
        </table>     
        </div>  
        </div>  
</body>
<script type="text/javascript">

    $(document).ready(function(){
     $('#tabledata').DataTable();
   }) 
    function confirmDelete()
    {
     return confirm("Are you sure you want to delete this?");
   } 
</script>
</html>
<?php } ?>