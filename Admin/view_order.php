<!DOCTYPE html>
<html lang="en">
  <body>
    <div class="panel panel-default"><br><br>      
        <div>
          <h1 class="text-warning" style="margin-top:95px;">Order Details</h1><br><br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">
              <tr>
                <th>Order_id</th>
                <th>Customer_name</th>
                <th>Shipping_name</th>
                <th>Shipping_email</th>
                <th>Shipping_phone</th>
                <th>Shipping_address</th>
                <th>Status</th>
                <th>Amount</th>
                <th>Tax</th>
                <th>Delete</th>
               
              </tr>
          </div>
          <?php
           include("includes/connect.php"); 
           $q = "select * from tbl_order";
           $query = mysqli_query($con,$q);
           $i=0;
           while($row=mysqli_fetch_array($query))
           {
            $or_id=$row['order_id'];
            $or_cusname=$row['customer_name'];
            $or_shipname=$row['shipping_name'];
            $or_shipphn=$row['shipping_phone'];
            $or_shipadd=$row['shipping_address'];
            $or_status=$row['status'];
            $or_amount=$row['amount'];
            $or_tax=$row['tax'];
            $i++;
           ?>
           <tr class="text-center"> 
            <td> <?php echo $or_id;?></td>
            <td> <?php echo $or_cusname;?></td>
            <td> <?php echo $or_shipname;?></td>
            <td> <?php echo $or_shipphn;?></td>
            <td> <?php echo $or_shipadd;?></td>
            <td> <?php echo $or_status;?></td>
            <td> <?php echo $or_amount;?></td>
            <td> <?php echo $or_tax;?></td>
            <td> <button class="btn-danger btn"> <a href="delete_order.php?product_id=<?php echo $row['product_id']; ?>"class="text-white"value="delete" onclick='return confirmDelete()'> Delete </a></button> </td>
          </tr>
          <?php } ?>
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
