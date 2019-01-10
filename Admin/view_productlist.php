<!DOCTYPE html>
<html lang="en">
  <body>
    <div class="panel panel-default"><br><br>         
        <div>
          <h1 class="text-warning" style="margin-top:70px;">Product List</h1>
           <a href="index.php?insert_productlist"class="btn btn-success add-btn"> Add New Product</a>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">
              <tr>
                <th>Product_id</th>
                <th>Product_category</th>
                <th>Product_name</th>
                <th>Product_price</th>
                <th>Product_image</th>
                <th>Product_keyword</th>
                <th>Product_description</th>
                <th>Delete</th>
                <th>Edit</th>
              </tr>
          </div>
          <?php
           include("includes/connect.php"); 
           $q = "select * from tbl_product ";
           $query = mysqli_query($con,$q);
           $i=0;
           while($row=mysqli_fetch_array($query))
           {
            $pro_id=$row['product_id'];
            $pro_cat=$row['product_cat'];
            $pro_name=$row['product_name'];
            $pro_price=$row['product_price'];
            $pro_image=$row['product_image'];
            $pro_key=$row['product_keyword'];
            $pro_desc=$row['product_description'];
            $i++;
           ?>
           <tr class="text-center"> 
            <td> <?php echo $pro_id;?></td>
            <td> <?php echo $pro_cat;?></td>
            <td> <?php echo $pro_name;?></td>
            <td> <?php echo $pro_price;?></td>
            <?php 
            $image  = "productimage/" . $pro_image;
            ?>
            <td> <?php echo "<img src='".$image."'class=img-thumbnail/>";?></td>
            <td> <?php echo $pro_key;?></td>
            <td> <?php echo $pro_desc;?></td>
            <td> <button class="btn-danger btn"> <a href="delete_productlist.php?product_id=<?php echo $row['product_id']; ?>"class="text-white"value="delete" onclick='return confirmDelete()'> Delete </a></button> </td>
            <td><button class="btn-success btn"><a href="update_productlist.php?update=<?php echo $row['product_id']; ?>"class="text-white">Edit</a></button></td>
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
