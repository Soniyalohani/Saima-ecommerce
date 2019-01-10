<?php
    session_start();
?>
<!DOCTYPE html>
<?php include('include/main.php');?>


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

<body>
    <div class="container-fluid">
          <h1 class="text-warning text-center" style="margin-top:95px;">ORDER DETAIL</h1><br><br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">
             <tr>
                <th width="40%">Item Name</th>
                <th width="10%">Quantity</th>
                <th width="20%">Price</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>
            <?php
                    if(!empty($_SESSION["shopping_cart"]))
                    {
                        $total = 0;
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                            // echo "<script>console.log()</script>";
                            // echo "<script>console.log(".$values['item_name'].")</script>";
                            // echo "<script>console.log(".$values['item_quantity'].")</script>";
                            echo "<script>console.log(".$values['item_id'].")</script>";

                    ?>
            <tr>
                <td>
                    <?php echo $values["item_name"]; ?>
                </td>
                <td>
                    <?php echo $values["item_quantity"]; ?>
                </td>
                <td>Rs
                    <?php echo $values["item_price"]; ?>
                </td>
                <td>Rs
                    <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>
                </td>
                <td><a href="index.php?action=delete&id=<?php echo $values[" item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php
                            $total = $total + ((int)$values["item_quantity"] * (int)$values["item_price"]);
                        }
                    ?>
            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">Rs.
                    <?php echo number_format($total, 2); ?>
                </td>
                <td></td>
            </tr>
            <?php
                    }
                    ?>

        </table>
    </div>
    </div>
    </div>
    <br />
</body>

</html>