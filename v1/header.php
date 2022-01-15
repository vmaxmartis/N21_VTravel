<?php include("./v1/css.php") ?>

<header class="header-static navbar-sticky navbar-light shadow" > 
  <!-- Search -->
  
  <!-- End Search --> 
  <!-- Navbar top start-->
  <div class="navbar-top d-none d-lg-block">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center"> 
        <!-- navbar top Left-->
        <div class="d-flex align-items-center"> 
          <!-- Top info -->
          <ul class="nav list-unstyled ml-5">
            <li class="nav-item mr-3"> <a class="navbar-link" href="#"><strong>Phone:</strong> (0387) 397-253</a> </li>
            <li class="nav-item mr-3"> <a class="navbar-link" href="#"><strong>Email:</strong> help@VTravel.com</a> </li>
            <li class="social-icons-item social-facebook m-0"><a class="social-icons-link w-auto px-2" href="https://www.facebook.com/Martis09/"><i class="fab fa-facebook-f"></i></a> </li>
            <li class="social-icons-item social-twitter m-0"><a class="social-icons-link w-auto pl-2" href="https://www.instagram.com/vmaxmartis/"><i class="fab fa-instagram"></i></a> </li>
          </ul>
          
        </div>
        
        <!-- navbar top Right-->
        <div class="d-flex align-items-center"> 
          <!-- Top Account -->
          <?php
                if(isset($_SESSION['user'])){
                  if($_SESSION['user']=='Admin'){
                    echo '<a href="./admin1/index.php">Xin chào '.$_SESSION['email'].' </a>';
                  }
                  else{
                    echo '<a href="./account.php">Xin chào '.$_SESSION['email'].' </a>';
                  }
                  
                  echo '<a href="./logout.php" >- Đăng xuất  -</a>';
                  echo '<a href="./account.php"  class=" btn btn-sm btn-grad text-white mb-0 ">CÁ NHÂN</a>';
                  
                }
                else{
                  echo '<a href="./login.php"  class=" btn btn-sm btn-grad text-white mb-0 ">ĐĂNG NHẬP</a>';

                }
            ?>
          <!-- top link -->
          <!-- top social -->
          
          
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar top End--> 
  
  <!-- Logo Nav Start -->
  <nav class="navbar navbar-expand-lg"  >
    <div class="container"> 
      <!-- Logo --> 
      <a class="navbar-brand" href="./"> <img src="bdesign/images/logo.png" alt="travelgo"> </a> 
      <!-- Menu opener button --href="./">>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"> </span> </button>
      <!-- Main Menu Start -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto" href="./index.php">
          <!-- Menu item 1 Demos-->
          <li class="nav-item dropdown active" href="./index.php"> 
            <a class="nav-link dropdown-toggle" href="./index.php" id="demosMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KHÁM PHÁ </a>        
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="docMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DU LỊCH</a>
            <ul class="dropdown-menu" aria-labelledby="docMenu">
            <li><a class="dropdown-item" href="./travel.php">DU LỊCH</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="docMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NHÀ HÀNG - KHÁCH SẠN</a>
            <ul class="dropdown-menu" aria-labelledby="docMenu">
            <li><a class="dropdown-item" href="./hotel.php">KHÁCH SẠN CHO BẠN</a></li>
            <li><a class="dropdown-item" href="./restaurant.php">NHÀ HÀNG CÓ THỂ BẠN BIẾT</a></li>           
            </ul>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="docMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LIÊN HỆ</a>
            <ul class="dropdown-menu" aria-labelledby="docMenu">
            <li><a class="dropdown-item" href="./contact.php">Thông tin nhóm</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Main Menu End --> 
      <!-- Header Extras Start-->
      <div class="navbar-nav"> 
        <!-- extra item Search-->
        <div class="nav-item search border-0 pl-3 pr-0 px-lg-2" id="search"> <a class="nav-link" data-toggle="collapse" href="#"></a> </div>
        <!-- extra item Btn-->
        <div class="nav-item border-0 d-none d-lg-inline-block align-self-center"> 
        
          </div>
      </div>
      <!-- Header Extras End--> 
    </div>
  </nav>  
  <!-- Logo Nav End --> 
  <?php include("./v1/scrip.php") ?>
</header>