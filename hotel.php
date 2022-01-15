<!doctype html>
<html lang="vn">
<?php session_start(); ?>
<?php include("./v1/css.php") ?>
<!--css>
	header Start-->
<?php include("./v1/header.php") ?>
<!-- =======================
	header End--> 
<!-- =======================
	Banner innerpage -->
  <?php include("./v1/banner.php") ?>
<!-- =======================
	Banner innerpage -->
  <body >
   

<section class="Categories pt10  Categories-home-list">


<section class="Categories pt10  Categories-home-list">
  <div class="container">
<div class="row mb-5">
    <div class="col-md-8">
      <p class="text-primary" style ="font-size:27px; font-weight:360">TIN NỔI BẬT</p>
      <h5 class="mb-5 cd-headline clip is-full-width" style ="font-size:27px; font-weight:2000">
        <span style ="font-size:27px; font-weight:2000" >Top 10 nhà hàng có  </span>
        <span class="cd-words-wrapper" style="width: 53.3209px; overflow: hidden;">
          <b style ="font-size:27px; font-weight:2000" class="is-hidden">clược đánh giá tốt nhất trong tháng 12</b>
          <b style ="font-size:25px; font-weight:2000" class="is-hidden">có lược tìm kiếm nhiều nhất trong tháng 12</b>
          <b style ="font-size:27px; font-weight:2000" class="is-visible">có lược nghé thăm nhất trong tháng 12</b>
        </span>
        </h5>
    </div>
  </div>
    <div class="row">
      <div class="swiper-container guides-slider"> 
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper"> 
          <!-- Slides-->
          <div class="swiper-slide h-auto px-2">
            <div class="card card-poster gradient-overlay mb-4 mb-lg-0"><a href='hotel-detailed.php?chon=<?php echo $row_pro['id']=21 ?>' class="tile-link"></a><img src="bdesign/images/hotels/pullmanhanoi.webp" alt="Card image" class="bg-image">
              <div class="card-body overlay-content">
                <h6 class="card-title text-shadow text-uppercase">Pullman - HÀ NỘI</h6>
              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto px-2">
            <div class="card card-poster gradient-overlay mb-4 mb-lg-0"><a href='hotel-detailed.php?chon=<?php echo $row_pro['id']=20 ?>' class="tile-link"></a><img src="bdesign/images/hotels/calavarel.jpeg" alt="Card image" class="bg-image">
              <div class="card-body overlay-content">
                <h6 class="card-title text-shadow text-uppercase">Caravelle Saigon</h6>
              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto px-2">
            <div class="card card-poster gradient-overlay mb-4 mb-lg-0"><a href='hotel-detailed.php?chon=<?php echo $row_pro['id']=19 ?>' class="tile-link"></a><img src="bdesign/images/hotels/imperial.jpg" alt="Card image" class="bg-image">
              <div class="card-body overlay-content">
                <h6 class="card-title text-shadow text-uppercase"> Imperial - Vũng Tàu</h6>              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto px-2">
            <div class="card card-poster gradient-overlay mb-4 mb-lg-0"><a href='hotel-detailed.php?chon=<?php echo $row_pro['id']=18 ?>' class="tile-link"></a><img src="bdesign/images/hotels/vungtauht.jpg" alt="Card image" class="bg-image">
              <div class="card-body overlay-content">
                <h6 class="card-title text-shadow text-uppercase">Royal Beach Boton Blue Hotel & Spa - Nha Trang</h6>
              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto px-2">
            <div class="card card-poster gradient-overlay mb-4 mb-lg-0"><a href='hotel-detailed.php?chon=<?php echo $row_pro['id']=13 ?>' class="tile-link"></a><img src="bdesign/images/hotels/anya.jpg" alt="Card image" class="bg-image">
              <div class="card-body overlay-content">
                <h6 class="card-title text-shadow text-uppercase">Fleur De Lys Hote/h6>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination d-md-none"> </div>
      </div>
    </div>
  </div>
</section>
<section class="pt10 pb80 cruise-grid-view"  >
  <div class="container">
        <br>
            <h1>Trải ngiệm nghỉ dưỡng chất lượng cao VIỆT NAM <span class="text-secondary">Cùng với VTravel.</span></h1>
            <p class="text-primary" style="color: #f2f2f2; font-size:54px; font-weight:711 ;">TẬN HƯỞNG CẢM GIÁC THIÊN ĐƯỜNG</p>
            <p class="mb-0" style=" font-size:20px; font-weight:400 ; ">Xã hội phát triển, du lịch ngày càng trở thành nhu cầu tất yếu của người dân, kéo theo sự phát triển của dịch vụ lưu trú du lịch, nhà nghỉ, khách sạn, khu nghỉ dưỡng… Vì vậy, xếp hạng sao là cơ sở để các cơ sở lưu trú du lịch quảng bá hình ảnh, chứng minh chất lượng phục vụ khách hàng và khẳng định vị thế của mình trên thị trường du lịch.</p>
            <div class="row">
    <div class="col-md-12 col-lg-9 mx-auto p-4 p-sm-5">
      <div class="text-center px-0 px-sm-5">
        <h3 class="mb-4 lead">Hơn 1008 Khách sạn có thể bạn quan tâm . . . </h3>
        <form  action="./search-hotel.php">
          <div class="input-group px-0 px-md-5">
            <input class="form-control border-radius-right-1 border-right-1 bg-transparent" name="search-hotel" type="search" id="search-hotel" placeholder="Tên khách sạn mà bạn muốn tìm kiếm ...">
            <button type="submit" class="btn btn-grad mb-0 border-radius-left-0" value="Nhập tên nhà hàng bạn tìm kiếm  "> <span class=" d-md-block">Tìm kiếm </span> <span class="d-md-none"><i class="fab fa-paper-plane-o m-0"></i></span> </button>
          </div>
        </form>
      </div>
     </div>
       <br> 

    </div>
        <!-- Tìm kiếm-->
  <div class="container" >
  <?php include("./v1/tabsearch.php") ?>
   
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
        $lldl= "select * from hotel";
        $kqdl=mysqli_query($kn,$lldl);
        $sodongdl=mysqli_num_rows($kqdl);
        $sotrangdl=$sodongdl/$sodong;
        $vtbd=$page*$sodong;
        ?>
          <?php 
          $lpt="select * from hotel limit {$vtbd},{$sodong}";
          $kqpt=mysqli_query($kn,$lpt);
          ?>
          <?php 
          while ($row_pro=mysqli_fetch_array($kqpt)){
            $machon=$row_pro['id'];
          ?>
          <!-- Mục-->
       
          <div class="col-lg-6 col-md-6 col-sm-6  " >
            <div class=" fl-wrap listitem listroBox  ">
              <article class="TravelGo-category-listing fl-wrap  ">
                <div class=" TravelGo-category-img"> <a href='hotel-detailed.php?chon=<?php echo $row_pro['id'] ?>'><img width="100%" height="234px" src="bdesign/images/img_source/<?php echo $row_pro['iva1'] ?>" alt=""></a>
                  <div class="TravelGo-category-opt  ">
                    <div class="listing-rating cruised-popup-rainingvis row" data-starrating1="5">
                    <br>
                     <p class="counter-item-digit" style="color: #f9b90f; font-size:27px; font-weight:711 ;"><?php echo $row_pro['rank'] ?></p> <br>
                     <i class="fa fa-star "></i>
                    </div>                 
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item " >
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html"><?php echo $row_pro['title'] ?></a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> <?php echo $row_pro['address'] ?></a><br>
                      <p class="R_retings">
                  <?php
                        $query14 = mysqli_query($kn, 'SELECT AVG(star) FROM `comment_hotel` WHERE `cmt_id` = "'. $machon.'"');
                        if ($row14 = mysqli_fetch_array($query14)) {
                            $averageratestar =round($row14[0], 1);
                            echo '<h6 href="#" class="text-success"> VTravel  '.$averageratestar.' <i class="fa fa-star "></i>  </h6>';
                            
                        } 
                      ?></p>
                        <h3 class="text-warning"><?php echo $row_pro['pricemin'] ?>đ      -      </h3>  <h3 class="text-warning"><?php echo $row_pro['pricemax'] ?>đ </h3> 
                     </div>
                    </div>
                  </div>
                  <p class="mb-1 font-italic"><?php echo $row_pro['shortcontent'] ?></p>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">Địa chỉ</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Yêu thích</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Chia sẻ</span></a> </div>
                    <div class="TravelGo-category-price btn-grad"><a href='hotel-detailed.php?chon=<?php echo $row_pro['id'] ?>'>XEM NGAY</a></div>
                  </div>
                </div>
              </article>
            </div>
          </div>
      <?php 
      }
      ?>
      </div>
          <?php 
        for ($i=0;$i<$sotrangdl;$i++)
      {
          echo "<a href='hotel.php?trang=$i'>Trang $i>
                
          </a>";
      }
      ?>
      </div>
     

    </div>
  </div>
</section>


<!-- =======================
	newsletter -->

<!-- =======================
	newsletter --> 

<!-- =======================
	footer  -->

</body>
<?php include("./v1/scrip.php") ?>
<?php (require_once"./v1/footer.php");?>
<!-- Mirrored from preview.templatehouse.net/travelgo/cruise-grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 04:40:24 GMT -->
</html>