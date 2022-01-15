<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php session_start(); ?>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <?php include("./v1/style.php") ?>
    </head>
    <body style="background: src='./bdesign/imagess/bg.png';">     
    <?php include("./v1/header.php") ?>
    <?php include("./v1/banner.php") ?> 
   
<!--Het-->
<section class="Categories pt10">
 <!--khung 1  --> 
 <div class="container">
    <div class="row mb-6">
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
  
    
    <div class="row" href='travel-viewing.php?chon=<?php echo $row_pro['id']=7 ?>'>
      <div class="col-md-6"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=7 ?>' >
        <div class="listroBox list-mig-like-com">
          <div class="list-mig-lc-img"> <img  src="bdesign/images/box/quynhon.jpg" alt="">  </div>
          <div class="list-mig-lc-con">
            <h5 >QUY NHƠN</h5>
          </div>
        </div>
        </a> </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-5"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=6 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="bdesign/images/box/phuquoc.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>PHÚ QUỐC</h5>
              </div>
            </div>
            </a> </div>
          <div class="col-md-6"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=3 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="bdesign/images/box/nhatrang.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>NHA TRANG</h5>
              </div>
            </div>
            </a> </div>
          <div class="col-md-6"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=2 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="bdesign/images/box/laocai.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>LÀO CAI</h5>
              </div>
            </div>
            </a> </div>
          <div class="col-md-5"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=24 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="bdesign/images/box/dongnai.jpg" alt=""> </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>HUẾ</h5>
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
          <div class="col-md-5"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=8 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img width="100%" height="207"  src="bdesign/images/box/condao.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>CÔN ĐẢO </h5>
              </div>
            </div>
            </a> </div>
          <div class="col-md-6"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=5 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="bdesign/images/box/muine.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>MŨI NÉ</h5>
              </div>
            </div>
            </a> </div>
          <div class="col-md-7"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=9 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="bdesign/images/box/sapa.jpg" alt="">  </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>HỘI AN</h5>
              </div>
            </div>
            </a> </div>
          <div class="col-md-5"> <a href='travel-viewing.php?chon=<?php echo $row_pro['id']=1 ?>'>
            <div class="listroBox list-mig-like-com">
              <div class="list-mig-lc-img"> <img src="bdesign/images/box/hanoi.jpg" alt=""> </div>
              <div class="list-mig-lc-con list-mig-lc-con2">
                <h5>HÀ NỘI</h5>
              </div>
            </div>
            </a> </div>
        </div>
      </div>
      <div class="col-md-5"><a href='travel-viewing.php?chon=<?php echo $row_pro['id']=27 ?>'>
        <div class="listroBox list-mig-like-com">
          <div class="list-mig-lc-img"> <img src="bdesign/images/box/dalat.jpg" alt="">  </div>
          <div class="list-mig-lc-con">
            <h5>HÀ GIANG</h5>   
          </div>
					<div class="col-sm-0 mb-0 mb-sm-0">
					<div class="blockquote bg-grad div1">
						<div class="all-text-white">
							<h3>Địa điểm được săn đón nhất tháng 11</h3>
							<p class="m-0">Hà Giang cuốn hút người ta bởi những khúc đường đèo đầy ấn tượng . . .</p>
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
  <div class="container">
    <div class=" blockquote grad-line">
				<div class="align-self-center text-md-left">
					<h3>Hàng trăm khách sạn có chất lượng tuyệt vời ...</h3>
					<p class="m-0">NHỮNG KHÁCH SẠN CÓ LƯỢT CHECK-IN NHIỀU NHẤT TRONG THÁNG VỪA QUA </p>
				</div>
				<div class="mt-3 mt-md-0 text-md-right ml-md-auto align-self-center">
					<button  class="btn btn-primary mb-0"><a href="hotel.php"> Xem thêm! </a></button>
				</div>
			</div>
    <div class="row">
      <div class="swiper-container guides-slider-popular"> 
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper"> 
          <!-- Slides-->
    <?php
    //Xác định số dòng trên 1 trang
    $sodong=18;
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
          <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listroBox">
              <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a><a href='hotel-detailed.php?chon=<?php echo $row_pro['id'] ?>'><img width="100%" height="351"  src="bdesign/images/img_source/<?php echo $row_pro['iva1'] ?>" class="img-fluid" alt="" >
                <div class="read_more"><span>Xem thêm</span></div>
                </a> </figure>
              <div class="listroBoxmain">
                <h3><a href='hotel-detailed.php?chon=<?php echo $row_pro['id'] ?>' ><?php echo $row_pro['title'] ?> <p class="R_retings">
                  <?php
                        $query14 = mysqli_query($kn, 'SELECT AVG(star) FROM `comment_hotel` WHERE `cmt_id` = "'. $machon.'"');
                        if ($row14 = mysqli_fetch_array($query14)) {
                            $averageratestar =round($row14[0], 1);
                            echo '<h6  class="text-success"> VTravel  '.$averageratestar.' <i class="fa fa-star "></i>  </h6>';
                            
                        } 
                      ?></p>
                <a  class="map-item"><i class="fas fa-map-marker-alt"></i> <?php echo $row_pro['address'] ?></a></br></br>
                <p class="mb-1 font-italic" ><?php echo $row_pro['shortcontent'] ?></p> </div>
              <ul>
                <li>
                  <p class="card-text text-muted">Giá chỉ từ</p>
                  <p class="card-text text-muted"><span class="h4 text-primary"><?php echo $row_pro['pricemin'] ?> đ </span>/ Ngày đêm </p>
                </li>
                <li>
                  <p class="card-text text-muted"></p>
                  <p class="card-text text-muted"><span class="h4 text-primary"><span class="h4 text-primary"></span> </p>
                </li>
              </ul>
            </div>
          </div>        
          <?php 
      }
      ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
<div class="row">

<div class="col-md-8 align-self-center">
  <div class="title text-left">
    <h1 class="text-danger">ẨM THỰC VIỆT NAM <br></h1>
    <h2><span class="text-secondary">TINH HOA - ĐẬM ĐÀ BẢN SẮC DÂN TỘC</span></h2>
    <p class="mb-0">
    Ẩm thực Việt Nam là cách gọi của phương thức chế biến món ăn, nguyên lý pha trộn gia vị và những thói quen ăn uống nói chung của cộng đồng người Việt và các ... </p>
  </div>
</div>

<!-- Modal default start-->
  <div class="col-md-4 align-self-center text-center">
  <!-- Button trigger modal -->
  <a class="btn btn-primary" href="restaurant.php"><i class="fas fa-arrow-circle-right"></i>Tất cả nhà hàng</a>
  <small class="d-block mt-1">Đang chờ bạn khám phá</small>

  <!-- Modal -->
  <div class="modal fade text-left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="mb-0">Ẩm thực Việt Nam là cách gọi của phương thức chế biến món ăn, nguyên lý pha trộn gia vị và những thói quen ăn uống nói chung của cộng đồng người Việt và các ... </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal default end-->
</div>
    <div class="row">
      <div class="swiper-container guides-slider-popular"> 
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper"> 
          <!-- Slides-->
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
          <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listroBox">
              <figure> <a  class="wishlist_bt"></a><a href='restaurant-detailed.php?chon=<?php echo $row_pro['id'] ?>'><img width="100%" height="351" src="bdesign/images/img_source/<?php echo $row_pro['iva1'] ?>" class="img-fluid" alt="" >
                <div class="read_more"><span>Xem thêm</span></div>
                </a> </figure>
              <div class="listroBoxmain">
                <h3><a ><?php echo $row_pro['title'] ?> 
                <p class="text-gray-500 text-sm my-3"><i class="fas fa-map-marker-alt"></i></i> <?php echo $row_pro['address'] ?></p>
                <p class="R_retings">
                  <?php
                        $query14 = mysqli_query($kn, 'SELECT AVG(star) FROM `comment_restaurant` WHERE `cmt_id` = "'. $machon.'"');
                        if ($row14 = mysqli_fetch_array($query14)) {
                            $averageratestar =round($row14[0], 1);
                            echo '<h6 class="text-success"> VTravel  '.$averageratestar.' <i class="fa fa-star "></i>  </h6>';
                            
                        } 
                      ?></p>
                <p class="mb-1 font-italic"><?php echo $row_pro['shortcontent'] ?></p> </div>
              <ul>
                <li>
                  <p class="card-text text-muted"> <span class="h4 text-primary"><?php echo $row_pro['type'] ?> <br></span>hấp dẫn !!! </p>
                </li>
                <li>
                  <p class="card-text text-muted"></p>
                  <p class="card-text text-muted"><span class="h4 text-primary"><span class="h4 text-primary"></span> </p>
                </li>
              </ul>
            </div>
          </div>        
          <?php 
      }
      ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <div class="col-md-12 col-lg-9 mx-auto p-4 p-sm-5">
      <div class="text-center px-0 px-sm-5">
        <p class="mb-3 lead">21,215+ Hotel and Resorts Available!</p>
        <form  action="./search.php">
          <div class="input-group px-0 px-md-5">
            <input class="form-control border-radius-right-0 border-right-0 bg-transparent" name="search" type="search" id="search" placeholder="Tên khách sạn mà bạn muốn tìm kiếm ...">
            <button type="submit" class="btn btn-grad mb-0 border-radius-left-0" value="Nhập tên khách sạn bạn tìm kiếm  "> <span class=" d-md-block">Tìm kiếm </span> <span class="d-md-none"><i class="fab fa-paper-plane-o m-0"></i></span> </button>
          </div>
        </form>
      </div>
     </div>
    </div>
</section>
<!-- nha hang --> 
<section class="Blog-list pt10 pb80">


    
</section>
</body>
<?php include("./v1/scrip.php") ?>
<?php (require_once"./v1/footer.php");?>
</html>
