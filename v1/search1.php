<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
     
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <?php include("./v1/style.php") ?>
        
    </head>
    <body>     
    <?php include("./v1/header.php") ?>
    <?php include("./v1/banner.php") ?> 
    <?php include("./v1/searchbar.php") ?> 
    <?php
    $key =  $_GET['search'];
?> 
<!--Het-->
<section class="Categories pt10 ">

  <!--khung 1  --> 
  <div class="container">
    <div class="row mb-6 pb60">
    <div class="introduce-Vietnam">
        <div class="container">
        <br>
            <h1>Du lịch khắp VIỆT NAM <span class="text-primary">Cùng với VTravel.</span></h1>
            <p class="text-secondary" style=" font-size:70px; font-weight:500 ;" >VIETNAM</p>  
            <h4 class="mb-5 cd-headline clip is-full-width text-primary" style ="font-size:27px; font-weight:2000">
        <span style ="font-size:27px; font-weight:2000" >Top 10 địa điểm có  </span>
        <span class="cd-words-wrapper" style="width: 53.3209px; overflow: hidden;">
          <b style ="font-size:27px; font-weight:2000" class="is-hidden">lược đánh giá tốt nhất trong tháng 9</b>
          <b style ="font-size:25px; font-weight:2000" class="is-hidden">lược tìm kiếm nhiều nhất trong tháng 9</b>
          <b style ="font-size:27px; font-weight:2000" class="is-visible">lược nghé thăm nhất trong tháng 9</b>
        </span>
        </h4>         
       <br> 
    </div>
    </div>
    
    <div class="row" href='travel-viewing.php?chon=<?php echo $row_pro['id']=1 ?>'>
      <div class="col-md-6"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=1 ?>' >
        <div class="listroBox list-mig-like-com">
          <div class="list-mig-lc-img"> <img  src="upload/box/quynhon.jpg" alt="">  </div>
          <div class="list-mig-lc-con">
            <h5 >United States</h5>
            <p >81 Cities . 35+ Tours</p>
          </div>
        </div>
        </a> </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-5"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=2 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="upload/box/phuquoc.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>United Kingdom</h5>
                <p>81 Cities . 35+ Tours</p>
              </div>
            </div>
            </a> </div>
          <div class="col-md-6"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=3 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="upload/box/nhatrang.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>Australia</h5>
                <p>81 Cities . 35+ Tours</p>
              </div>
            </div>
            </a> </div>
          <div class="col-md-6"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=4 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="upload/box/laocai.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>Germany</h5>
                <p>81 Cities . 35+ Tours</p>
              </div>
            </div>
            </a> </div>
          <div class="col-md-5"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=5 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="upload/box/dongnai.jpg" alt=""> </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>India</h5>
                <p>81 Cities . 35+ Tours</p>
              </div>
            </div>
            </a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- khung 2 --> 
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="row">
          <div class="col-md-5"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=6 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="upload/box/condao.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>United Kingdom</h5>
                <p>81 Cities . 35+ Tours</p>
              </div>
            </div>
            </a> </div>
          <div class="col-md-6"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=7 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="upload/box/muine.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>Australia</h5>
                <p>81 Cities . 35+ Tours</p>
              </div>
            </div>
            </a> </div>
          <div class="col-md-7"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=8 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="upload/box/sapa.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>Germany</h5>
                <p>81 Cities . 35+ Tours</p>
              </div>
            </div>
            </a> </div>
          <div class="col-md-5"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=9 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="upload/box/hanoi.jpg" alt=""> </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>India</h5>
                <p>81 Cities . 35+ Tours</p>
              </div>
            </div>
            </a> </div>
        </div>
      </div>
      <div class="col-md-5"><a href='travel-viewing.php?chon=<?php echo $row_pro['id']=10 ?>'>
        <div class="listroBox list-mig-like-com">
          <div class="list-mig-lc-img"> <img src="upload/box/dalat.jpg" alt="">  </div>
          <div class="list-mig-lc-con">
            <h5>United States</h5>
            <p>81 Cities . 35+ Tours</p>     
          </div>
					<div class="col-sm-0 mb-0 mb-sm-0">
					<div class="bg-grad p-1 p-sm-1 border-radius-3 pattern-overlay-2">
						<div class="all-text-white">
							<h3>Fusce iaculis ex sed nulla commodo</h3>
							<p class="m-0">Quisque hendrerit leo in odio egestas, pulvinar dapibus tortor efficitur. In suscipit fermentum porta.</p>
						</div>
						<div class="mt-0">
							<button class="btn btn-grad mb-0 mr-3">Learn more!</button>
						</div>
					</div>
					</div>
				</div>
        </div>
        </a> 
      </div>
    </div>
  </div>
  <!-- khach san --> 
  
  <section class="Categories pt10  TourHotels">
  <div class="container">
        <br>
            <h1>Đi khắp đất nước Việt Nam <span class="text-primary">Cùng với VTravel.</span></h1>
            <p class="text-primary" style="color: #f2f2f2; font-size:70px; font-weight:500 ;">KHÁM PHÁ - TRẢI NGHIỆM </p>
            <p class="mb-0" style=" font-size:20px; font-weight:400 ; "> Du lịch Việt Nam đang trên đà phát triển, lượng khách quốc tế đến cũng như khách du lịch nội địa ngày càng tăng. Du lịch Việt Nam ngày càng được biết đến nhiều hơn trên thế giới, nhiều điểm đến trong nước được bình chọn là địa chỉ yêu thích của du khách quốc tế.</p>
            <div class="row">
    <div class="col-md-12 col-lg-9 mx-auto p-4 p-sm-5">
      <div class="text-center px-0 px-sm-5">
        <p class="mb-3 lead">Hơn 1008 địa điển dành cho bạn . . . </p>
        <h2 class="text-secondary"><?php echo $key ?></h2> <h2 class="text-secondary">Kết quả tìm kiếm</h2>
        <form  action="#">
          <div class="input-group px-0 px-md-5">
            <input class="form-control border-radius-right-0 border-right-0 bg-transparent" name="search" type="search" id="search" placeholder="Tên khách sạn mà bạn muốn tìm kiếm ...">
            <button type="submit" class="btn btn-grad mb-0 border-radius-left-0" value="Nhập tên nhà hàng bạn tìm kiếm  "> <span class=" d-md-block">Tìm kiếm </span> <span class="d-md-none"><i class="fab fa-paper-plane-o m-0"></i></span> </button>
          </div>
        </form>
      </div>
     </div>
       <br> 

    </div>
        <!-- Tìm kiếm-->
  <div class="container" >
    
    <div class="row">
    <?php
    //Xác định số dòng trên 1 trang
    $sodong=6;
    if(isset($_GET['trang']))
    {
        $page=$_GET['trang'];
    }
    else
    {
        $page=0;
    }
    //Đếm số dòng dl
    $kn = mysqli_connect("localhost","root","","nhom21") or die("Không kết nối được");
    mysqli_query($kn,"SET NAMES 'utf8'");
    $lldl= "select * from travel";
    $kqdl=mysqli_query($kn,$lldl);
    $sodongdl=mysqli_num_rows($kqdl);
    $sotrangdl=$sodongdl/$sodong;
    $vtbd=$page*$sodong;
    ?>
      <?php 
       $lpt="select * from travel limit {$vtbd},{$sodong}";
       $kqpt=mysqli_query($kn,$lpt);
      ?>
      <?php
                    include './module/travelPost.php';
                    $getClass = new travelPost();
                    $getdata = $getClass->getlistTraleviewing();
                    $sum = sizeof($getdata);
                    $count = 0;
                    $check=0;
                    while($count < $sum){
                        if(!empty($key))
                    if(strlen(strstr($getdata[$count][3],$key)) > 0) {
                        $check=1;
                        echo ''?>
      <?php 
                    }
        
      ?>
      

      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
      <div class="listroBox">  
        <div class="card shadow border-0 h-100"><a href='travel-viewing.php?chon= '><img src="bdesign/images/cruises/<?php echo $row_pro['iva1'] ?>" alt=""></a>
          <div class="card-body">
            <h5 class="my-2"><a href="post.html" class="text-dark"><?php echo $row_pro['title'] ?> </a></h5>
            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i></i> <?php echo $row_pro['address'] ?></p>
            <p class="my-2 text-muted text-sm"><?php echo $row_pro['scontent'] ?></p>
            <a class="btn btn-grad" href='travel-viewing.php?chon=<?php echo $row_pro['id'] ?>'><i class="fas fa-arrow-right"></i>Gradient</a></div>
        </div>
      </div>
      </div>
      
        </div>
      </div>
     <?php 
      for ($i=0;$i<$sotrangdl;$i++)
    {
        echo "<a href='travel.php?trang=$i'>Trang $i></a>";
    }
    ?>

    </div>
  </div>
  </section>
<!-- nha hang --> 

</body>
<?php include("./v1/scrip.php") ?>
<?php (require_once"./v1/footer.php");?>
</html>
  