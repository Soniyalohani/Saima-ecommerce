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
                   
        </div>
        </nav>
    </div>
         <!--Carousel Wrapper-->
<div id="imgcarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel2 " data-slide-to="1"></li>
      <li data-target="#carousel3" data-slide-to="2"></li>
      <li data-target="#carousel3" data-slide-to="3"></li>
      <li data-target="#carousel3" data-slide-to="4"></li>
      <li data-target="#carousel3" data-slide-to="5"></li>
      <li data-target="#carousel3" data-slide-to="6"></li>
    </ol>
    <!--/.Indicators-->
      <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100 img-fluid" src="images/c2.jpg" style="height:650px">
              <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">SAIMA COLLECTION</h3>
            </div>
          </div>          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100 img-fluid" src="images/c5.jpg"  style="height:650px">
                
              <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">SAIMA COLLECTION</h3>
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                
              <img class="d-block w-100 img-fluid" src="images/i1.jpg"  style="height:650px">
              <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">SAIMA COLLECTION</h3>
            </div>
          </div>
          
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imgcarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
</div>
      <!--/.Carousel Wrapper-->
</header>