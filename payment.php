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
 
<!DOCTYPE html>
<html>
<head>
    <title></title>
     <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="col-lg-6 m-auto"><br><br>
                
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

         <br><br><div class="card">
             
                    <h2 class="text-center text-warning">MAKE YOUR PAYMENT</h2>
            
            </div>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                        <label for="name"><b> Card Holder Name</b></label>
                        <input type="text" class="form-control" placeholder="Enter Card Holder Name " name="card_name" required pattern="^[A-Za-z]+">
                    </div>

                    <div class="form-group">
                        <label for="email"><b>Email Address</b></label>
                        <input type="email" class="form-control"  placeholder="Enter Email Address"name="email" required>
                    </div>
                    
                    <div>
                        <label for="phone"><b> Card Number </b></label>
                        <input type="number" class="form-control" placeholder="Enter Card Number" name="cardnum" required>
                    </div>
                    <div class="form-group">
                       <div class="field-row">
                            <div class="contact-row column-right">
                             <label><b>Expiry Month / Year</b></label> <span id="userEmail-info"
                                    class="info"></span><br> 
                                    <select name="month" id="month"
                                    class="demoSelectBox">
                                    <option value="08">08</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    </select> <select name="year" id="year"
                                    class="demoSelectBox">
                                    <option value="18">2018</option>
                                    <option value="19">2019</option>
                                    <option value="20">2020</option>
                                    <option value="21">2021</option>
                                    <option value="22">2022</option>
                                    <option value="23">2023</option>
                                    <option value="24">2024</option>
                                    <option value="25">2025</option>
                                    <option value="26">2026</option>
                                    <option value="27">2027</option>
                                    <option value="28">2028</option>
                                    <option value="29">2029</option>
                                    <option value="30">2030</option>
            </select>
        </div>
    </div>   
    <div>
                        <label for="phone"><b> CVC </b></label>
                        <input type="number" class="form-control" placeholder="Enter cvc" name="cvc" required>
                    </div>
    </div>
    <div>     
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="pay">Submit Payment</button>
                     
                    </div>
                   
                </form>
            </div>
    </body>
    </html>

