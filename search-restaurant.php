<!DOCTYPE html>
<html>
    <head>
    <?php include"./v1/css.php" ?>
    
        <?php session_start(); ?>
        <style>

            .box-posts{
                background: #EEE5DE;
                border:none;
                border-radius: 15px;
                box-shadow: 0px 0px 5px 5px #aaa;
            }
            .box-posts:hover{
                box-shadow: 0px 0px 5px 5px #789;
            }
        </style>

    </head>
    <body>
    
    <?php include"./v1/header.php" ?>
    <?php include"./v1/banner.php" ?>

   <div class="article-composition">
        <div class="container">


<?php
    $key =  $_GET['search-restaurant'];
?>
<section class="Categories pt10  Categories-home-list">
  <div class="container">
<div class="row mb-5">
    <div class="col-md-8">
      <p class="text-primary" style ="font-size:27px; font-weight:360">TIN NỔI BẬT</p>
      <h5 class="mb-5 cd-headline clip is-full-width" style ="font-size:27px; font-weight:2000">
        <span style ="font-size:27px; font-weight:2000" >Top 10 nhà hàng có  </span>
        <span class="cd-words-wrapper" style="width: 53.3209px; overflow: hidden;">
          <b style ="font-size:27px; font-weight:2000" class="is-hidden">clược đánh giá tốt nhất trong tháng 9</b>
          <b style ="font-size:25px; font-weight:2000" class="is-hidden">có lược tìm kiếm nhiều nhất trong tháng 9</b>
          <b style ="font-size:27px; font-weight:2000" class="is-visible">có lược nghé thăm nhất trong tháng 9</b>
        </span>
        </h5>
    </div>
  </div>
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
							<h3>Fusce iaculis ex sed nulla commodo</h3>
						</div>
						<div class="mt-0">
							<button class="btn btn-grad mb-0 mr-3">Learn more!</button>
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
  </div>

   <div class="col-md-12 col-lg-9 mx-auto p-4 p-sm-5">
      <div class="text-center px-0 px-sm-5">
        <span style="font-weight:500; font-size:30px;  ">
                       Kết quả tìm kiếm</span><span class="text-primary" style="font-weight:500; font-size:35px;  ">
                          <?php echo $key ?> </span>
        <h2 class="text-secondary"></h2> <h2 class="text-secondary"></h2>
        <form  action="./search-restaurant.php">
          <div class="input-group px-0 px-md-5 search">
            <input class="form-control border-radius-right-0 border-right-0 bg-transparent" name="search-restaurant" type="search" id="search" placeholder="Tên khách sạn mà bạn muốn tìm kiếm ...">
            <button type="submit" class="btn btn-grad mb-0 border-radius-left-0" value="Nhập tên nhà hàng bạn tìm kiếm  "> <span class=" d-md-block">Tìm kiếm </span> <span class="d-md-none"><i class="fab fa-paper-plane-o m-0"></i></span> </button>
          </div>
        </form>
      </div>
     </div>
       <br> 
       <div class="container">
       <?php
                    include './module/restaurantPost.php';
                    $getClass = new restaurantPost();
                    $getdata = $getClass->getlistRestaurantviewing();
                    $sum = sizeof($getdata);
                    $count = 0;
                    $check=0;
                    while($count < $sum){
                        if(!empty($key))
                    if(strlen(strstr($getdata[$count][3],$key)) > 0) {
                        $check=1;
                        echo ' <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row listroBox">
                              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                                <figure> <a href="./restaurant-detailed.php?chon='.$getdata[$count][0].'" class="wishlist_bt"></a> <a href="./restaurant-detailed.php?chon='.$getdata[$count][0].'"><img   src="./bdesign/images/img_source/'.$getdata[$count][5].'" class="img-fluid" alt="" >
                                  <div class="read_more"  href="./restaurant-detailed.php?chon='.$getdata[$count][0].'" ><span>Read more</span></div>
                                  </a> </figure>
                              </div>
                              <div class="col-lg-7 col-md-6 col-sm-12"">
                                <div class="listroBoxmain">
                                <h3><a class="text-secondary" href="restaurant-detailed.php">'.$getdata[$count][3].'</a></h3>
                                  <h3><a href="restaurant-detailed.php">'.$getdata[$count][10].'</a></h3>
                                  <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> '.$getdata[$count][15].'</a></div>                                
                                        </div>                          
                                <ul>
                                  <li><span class="Ropen">Checkin '.$getdata[$count][11].' </span></li>
                                  <li>
                                  <li><span class="Ropen">Checkout '.$getdata[$count][12].'</span></li>
                                  <li>
                                    <div ><span>Đã có<em>'.$getdata[$count][17].'LƯỢT CHECK IN</em></span><strong></strong></div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>';
                    }
                $count++;
                    }
                    if ($check==0) echo '<h1>Không có kết quả tìm kiếm</h1>';
                ?>
       </div>
</section>

<?php include("./v1/scrip.php") ?>
<?php (require_once"./v1/footer.php");?>
</body>
</html>