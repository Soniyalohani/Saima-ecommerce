<?php session_start(); ?>
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
<div class="bg0 p-t-75 p-b-120">
    <div class="container-about">
      <div class="row p-b-148">
        <div class="col-md-7 col-lg-8">
          <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
            <h3 class="mtext-111 cl2 p-b-16">
              Our Story
            </h3>
            <p class="stext-113 cl6 p-b-26">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
            </p>
            <p class="stext-113 cl6 p-b-26">
              Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. 
            </p>

            <p class="stext-113 cl6 p-b-26">
              Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
            </p>
          </div>
        </div>

        <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
          <div class="how-bor1 ">
            <div class="hov-img0">
              <img src="images/8.jpg" class="img-thumbnail" alt="IMG">
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
          <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
            <h3 class="mtext-111 cl2 p-b-16">
              Our Mission
            </h3>

            <p class="stext-113 cl6 p-b-26">
              Mauris non lacinia magna. Sed nec lobortis dolor. Vestibulum rhoncus dignissim risus, sed consectetur erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam maximus mauris sit amet odio convallis, in pharetra magna gravida. Praesent sed nunc fermentum mi molestie tempor. Morbi vitae viverra odio. Pellentesque ac velit egestas, luctus arcu non, laoreet mauris. Sed in ipsum tempor, consequat odio in, porttitor ante. Ut mauris ligula, volutpat in sodales in, porta non odio. Pellentesque tempor urna vitae mi vestibulum, nec venenatis nulla lobortis. Proin at gravida ante. Mauris auctor purus at lacus maximus euismod. Pellentesque vulputate massa ut nisl hendrerit, eget elementum libero iaculis.
            </p>
            <div class="bor16 p-l-29 p-b-9 m-t-22">
              <p class="stext-114 cl6 p-r-40 p-b-11">
                Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
              </p>

            </div>
          </div>
        </div>

        <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
          <div class="how-bor2">
            <div class="hov-img0">
              <img src="images/6.jpg" class="img-thumbnail" alt="IMG" style="height:400px">
            </div>
          </div>
        </div>
      </div>
        </div>
</div>
<!-- footer -->
    <div class="footer">
        <div class="container text-center">
            <hr class="footer-line">
            <div class="row ">
                <!-- footer-about -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                    <div class="footer-widget ">
                      <h5>TALK TO US NOW!</h5>
                        <div class="footer-title"><h4>CONTACT US</h4></div>
                        <img src="images/foot.jpg">
                        <p> JAWALAKHEL,LALITPUR<br> NEPAL.</p><br>

                        <p> <i class="fa fa-phone"></i>984-0703127</p>
                    </div>
                </div>
                <!-- /.footer-about -->
                <!-- footer-links -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                    <div class="footer-widget ">
                        <h5>TALK TO US NOW!</h5>
                        <div class="footer-title"><h4>OUR SERVICES</h4></div>
                        <img src="images/foot.jpg">
                        <ul class="list-unstyled">
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">ORDER HISTORY</a></li>
                            <li><a href="#">RETURNS</a></li>
                            <li><a href="#">CUSTOM SERVICE</a></li>
                            <li><a href="#">TERMS & CONDITIONS</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- footer-links -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                    <div class="footer-widget ">
                        <h5>TALK TO US NOW!</h5>
                        <div class="footer-title"><h4>FOLLOW US</h4></div>
                        <img src="images/foot.jpg">
                        <ul class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Google +</a></li>
                            <li><a href="#">Linked In</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ul>
                    </div>
                </div>
               
               
              
            </div>
        </div>
    </div>
  </body>
  <script type="text/javascript">

        function openSearch() {
          document.getElementById("myOverlay").style.display = "block";
        }
        
        function closeSearch() {
          document.getElementById("myOverlay").style.display = "none";
        }
        </script>
    