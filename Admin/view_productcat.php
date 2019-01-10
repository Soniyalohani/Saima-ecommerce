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
      <a href="index.php?insert_productcat"class="btn btn-success add-btn"> Add New Product Category</a>         
        <div class="category">
          <h1 class="text-warning" style="margin-top:95px;">Product Category</h1><br><br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">
              <tr>
                <th>Category_id</th>
                <th>Product_category</th>
                <th>Delete</th>
                <th>Edit</th>
              </tr>
          </div>
          <?php
           include("includes/connect.php"); 
           $q = "select * from tbl_category ";
           $query = mysqli_query($con,$q);
           $i=0;
           while($row=mysqli_fetch_array($query))
           {
            $id=$row['id'];
            $procat=$row['product_cat'];
            $i++;
           ?>
           <tr class="text-center"> 
            <td> <?php echo $id;?></td>
            <td> <?php echo $procat;?></td>
         <td> <button class="btn-danger btn"> <a href="delete_productcat.php?id=<?php echo $row['id']; ?>"class="text-white"value="delete" onclick='return confirmDelete()'> Delete </a></button> </td>
            <td><button class="btn-success btn"><a href="update_productcat.php?update=<?php echo $row['id']; ?>"class="text-white">Edit</a> </button> </td>
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
<?php } ?>