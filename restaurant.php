<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php session_start(); ?>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <?php include("./v1/style.php") ?>
    </head>
    <body>     
    <?php include("./v1/header.php") ?>
    <?php include("./v1/banner.php") ?> 
     
   
<!--Het-->
<section class="Categories pt10 ">
  <!--khung 1  --> 
  <div class="container">
        <br>
            <h1>Trải ngiệm ẩm thực VIỆT NAM <span class="text-primary">Cùng với VTravel.</span></h1>
            <p class="text-primary" style="color: #f2f2f2; font-size:70px; font-weight:500 ;">TINH HOA ẨM THỰC </p>
            <div class="row">
    <div class="col-md-12 col-lg-9 mx-auto p-2 p-sm-5">
    
    </div>
    <div class="container">
    <div class="row">
      <div class="col-md-6"> <a href='restaurant-detailed.php?chon=<?php echo $row_pro['id']=2 ?>'>
        <div class="listroBox list-mig-like-com listroBox">
          <div class="list-mig-lc-img"> <img src="bdesign/images/img_source/nh_traucau1.jpg" alt="">  </div>
          <div class="list-mig-lc-con">
            <h5>TRẦU CAU</h5>
          </div>
          <div class="col-sm-0 mb-1 mb-sm-0">
					<div class="bg-grad p-1 p-sm-1 border-radius-3 pattern-overlay-2">
						<div class="all-text-white">
							<h3>Nhà hàng với phong cách độc đáo</h3>
						</div>
						<div class="mt-0">
							<button class="btn btn-grad mb-0 mr-3">Xem chi tiêt!</button>
						</div>
					</div>
					</div>
        </div>
        </a> </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-5"> <a href='restaurant-detailed.php?chon=<?php echo $row_pro['id']=2 ?>'>
            <div class="listroBox list-mig-like-com listroBox">
              <div class="list-mig-lc-img"> <img src="bdesign/images/img_source/nh_rice2.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>RICE</h5>
              </div>
            </div>
            </a> </div>
          <div class="col-md-6"> <a href='restaurant-detailed.php?chon=<?php echo $row_pro['id']=1 ?>'>
            <div class="listroBox list-mig-like-com listroBox">
              <div class="list-mig-lc-img"> <img src="bdesign/images/img_source/nh_THEHOMEPIZZA2.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>THEHOMEPIZZA</h5>
              </div>
            </div>
            </a> </div>
          <div class="col-md-6"> <a href='restaurant-detailed.php?chon=<?php echo $row_pro['id']=10 ?>'>
            <div class="listroBox list-mig-like-com listroBox">
              <div class="list-mig-lc-img"> <img src="bdesign/images/img_source/nh_Rachel3.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5> The Rachel Restaurant</h5>
              </div>
            </div>
            </a> </div>
          <div class="col-md-5"> <a href='restaurant-detailed.php?chon=<?php echo $row_pro['id']=14 ?>'>
            <div class="listroBox list-mig-like-com listroBox">
              <div class="list-mig-lc-img"> <img src="bdesign/images/img_source/nh_BHT4.jpg" alt=""> </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>Đằm Thắm</h5>
              </div>
            </div>
            </a> </div>
        </div>
        <div class="row mb-6">
    <div class="text-center px-0 px-sm-5">
        <p class="mb-3 lead">Hơn 1008 Nhà hàng có thể bạn quan tâm . . . </p>
        <form  action="./search-restaurant.php">
          <div class="input-group px-0 px-md-5">
            <input class="form-control border-radius-right-0 border-right-0 bg-transparent" name="search-restaurant" type="search" id="search-restaurant" placeholder="Tên Nhà Hàng mà bạn muốn tìm kiếm ...">
            <button type="submit" class="btn btn-grad mb-0 border-radius-left-0" value="Nhập tên nhà hàng bạn tìm kiếm  "> <span class=" d-md-block">Tìm kiếm </span> <span class="d-md-none"><i class="fab fa-paper-plane-o m-0"></i></span> </button>
          </div>
        </form>
      </div>
     </div>
    </div>
      </div>
    </div>
  </div>
 
  <!-- khach san --> 
  
  <section class="Categories-home-list pt10 ">
  <div class="row mb-5">
    <div class="col-md-8">
      <p class="text-primary" style ="font-size:27px; font-weight:360">TIN NỔI BẬT</p>
      <h5 class="mb-5 cd-headline clip is-full-width" style ="font-size:27px; font-weight:2000">
        <span style ="font-size:27px; font-weight:2000" >Top 10 nhà hàng  </span>
        <span class="cd-words-wrapper" style="width: 53.3209px; overflow: hidden;">
          <b style ="font-size:27px; font-weight:2000" class="is-hidden">có lược đánh giá tốt nhất trong tháng 9</b>
          <b style ="font-size:27px; font-weight:2000" class="is-hidden">có lược tìm kiếm nhiều nhất trong tháng 9</b>
          <b style ="font-size:27px; font-weight:2000" class="is-visible">có lược nghé thăm nhất trong tháng 9</b>
        </span>
        </h5>
    </div>
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
    $kn = mysqli_connect("localhost","root","","tms") or die("Không kết nối được");
    mysqli_query($kn,"SET NAMES 'utf8'");
    $lldl= "select * from restaurant";
    $kqdl=mysqli_query($kn,$lldl);
    $sodongdl=mysqli_num_rows($kqdl);
    $sotrangdl=$sodongdl/$sodong;
    $vtbd=$page*$sodong;
    ?>
      <?php 
       $lpt="select * from restaurant limit {$vtbd},{$sodong}";
       $kqpt=mysqli_query($kn,$lpt);
      ?>
      <?php 
      while ($row_pro=mysqli_fetch_array($kqpt)){
        $machon=$row_pro['id'];
      ?>

          <!-- Mục-->
          <div class="col-lg-4 col-md-6 col-sm-6 " >
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap listroBox">
                <div class="TravelGo-category-img"> <a href='restaurant-detailed.php?chon=<?php echo $row_pro['id'] ?>'><img width="100%" height="234" src="bdesign/images/img_source/<?php echo $row_pro['iva1'] ?>" alt=""></a>
                  <div class="TravelGo-category-opt  ">
                    <div class="listing-rating cruised-popup-rainingvis row" data-starrating1="5">
                    <br>
                     <p class="counter-item-digit" style="color: #f9b90f; font-size:27px; font-weight:711 ;"><?php echo $row_pro['type'] ?></p> <br>                    
                    </div>                 
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item " >
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="restaurant-detailed.php"><?php echo $row_pro['title'] ?></a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a  class="map-item"><i class="fas fa-map-marker-alt"></i> <?php echo $row_pro['address'] ?></a></br> 
                      <?php
                        $query14 = mysqli_query($kn, 'SELECT AVG(star) FROM `comment_hotel` WHERE `cmt_id` = "'. $machon.'"');
                        if ($row14 = mysqli_fetch_array($query14)) {
                            $averageratestar =round($row14[0], 1);
                            echo '<h6  class="text-success"> VTravel  '.$averageratestar.' <i class="fa fa-star "></i>  </h6>';
                            
                        } 
                      ?>
                     </div>
                    </div>
                  </div>
                  <p class="mb-1 font-italic"><?php echo $row_pro['shortcontent'] ?></p>
                  <a class=" btn btn-outline-success"><?php echo $row_pro['open'] ?> </a> <a class="btn btn-outline-withe"> : </a> <a class="btn btn-outline-danger"><?php echo $row_pro['close'] ?></a>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-opt-list">
                       <a  class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">Địa chỉ</span></a>
                       <a  class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Yêu thích</span></a> 
                       <a  class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Chia sẻ</span></a> </div>
                    <div class="TravelGo-category-price btn-grad"><a href='restaurant-detailed.php?chon=<?php echo $row_pro['id'] ?>'>XEM NGAY</a></div>
                  </div>
                </div>
              </article>
            </div>
          </div>
      <?php 
      }
      ?>



        </div>
      </div>
     <?php 
      for ($i=0;$i<$sotrangdl;$i++)
    {
        echo "<a href='restaurant.php?trang=$i'>Trang $i></a>";
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
