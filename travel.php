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
    <div class="row mb-6 pb60">
    <div class="introduce-Vietnam">
        <div class="container">
        <br>
            <h1>Du lịch khắp VIỆT NAM <span class="text-primary">Cùng với VTravel.</span></h1>
            <p class="text-secondary" style=" font-size:70px; font-weight:500 ;" >VIETNAM</p>  
            <h4 class="mb-5 cd-headline clip is-full-width text-primary" style ="font-size:27px; font-weight:2000">
        <span style ="font-size:27px; font-weight:2000" >Top 10 địa điểm có  </span>
        <span class="cd-words-wrapper" style="width: 53.3209px; overflow: hidden;">
          <b style ="font-size:27px; font-weight:2000" class="is-hidden">lược đánh giá tốt nhất trong tháng 12</b>
          <b style ="font-size:25px; font-weight:2000" class="is-hidden">lược tìm kiếm nhiều nhất trong tháng 12</b>
          <b style ="font-size:27px; font-weight:2000" class="is-visible">lược nghé thăm nhất trong tháng 12</b>
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
              <div class="list-mig-lc-img"> <img src="bdesign/images/box/condao.jpg" alt="">  </div>
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
					<div class="bg-grad p-1 p-sm-1 border-radius-3 pattern-overlay-2">
						<div class="all-text-white">
            <h3>Địa điểm được săn đón nhất tháng 11</h3>
							<p class="m-0">Hà Giang cuốn hút người ta bởi những khúc đường đèo đầy ấn tượng . . .</p>
						</div>
						<div class="mt-0">
							<button class="btn btn-grad mb-0 mr-3">Xem ngay!</button>
						</div>
					</div>
					</div>
				</div>
        </div>
        </a> 
      </div>
    </div>
  </div>
  <!--  --> 
  <div class="container">
        <br>
            <h1>Đi khắp đất nước Việt Nam <span class="text-secondary ">Cùng với VTravel.</span></h1>
            <p class="text-primary" style="color: #f2f2f2; font-size:70px; font-weight:500 ;">KHÁM PHÁ - TRẢI NGHIỆM </p>
            <p class="mb-0" style=" font-size:20px; font-weight:400 ; "> Du lịch Việt Nam đang trên đà phát triển, lượng khách quốc tế đến cũng như khách du lịch nội địa ngày càng tăng. Du lịch Việt Nam ngày càng được biết đến nhiều hơn trên thế giới, nhiều điểm đến trong nước được bình chọn là địa chỉ yêu thích của du khách quốc tế.</p>
            <div class="row">
    <div class="col-md-12 col-lg-9 mx-auto p-4 p-sm-5">
      <div class="text-center px-0 px-sm-5">
        <p class="text-secondary mb-3 lead">Hơn 1008 địa điển dành cho bạn . . . </p>
        <h2 class="text-secondary"></h2> <h2 class="text-secondary"></h2>
        <form  action="./search.php">
          <div class="input-group px-0 px-md-5 search">
            <input class="form-control border-radius-right-0 border-right-0 bg-transparent" name="search" type="search" id="search" placeholder="Tên địa điểm mà bạn muốn tìm kiếm ...">
            <button type="submit" class="btn btn-grad mb-0 border-radius-left-0" value="Nhập tên nhà hàng bạn tìm kiếm  "> <span class=" d-md-block">Tìm kiếm </span> <span class="d-md-none"><i class="fab fa-paper-plane-o m-0"></i></span> </button>
          </div>
        </form>
      </div>
     </div>
       <br> 

    </div>
        <!-- Tìm kiếm-->
  <div class="container Categories pt10 " >
    
    <div class="row">
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
      while ($row_pro=mysqli_fetch_array($kqpt)){
        $machon=$row_pro['id'];
      ?>

      <div class="col-lg-4 col-md-3 col-sm-12 col-xs-6 mb-14">
      <div class="listroBox">  
        <div class="card shadow border-0 h-100"><a href='travel-viewing.php?chon=<?php echo $row_pro['id'] ?> '><img width="100%" height="234" src="bdesign/images/img_source/<?php echo $row_pro['iva1'] ?>" alt=""></a>
          <div class="card-body" >
            <h5 class="my-2"><a href='travel-viewing.php?chon=<?php echo $row_pro['id'] ?>' class="text-dark"><?php echo $row_pro['title'] ?> </a></h5>
            <p class="text-gray-500 text-sm my-3"><i class="fas fa-map-marker-alt"></i></i> <?php echo $row_pro['address'] ?></p>
            <?php
                        $query14 = mysqli_query($kn, 'SELECT AVG(star) FROM `comment_travel` WHERE `cmt_id` = "'. $machon.'"');
                        if ($row14 = mysqli_fetch_array($query14)) {
                            $averageratestar =round($row14[0], 1);
                            $averageratestarnotodd =floor($row14[0]);
                            echo '<h6 href="#" class="text-success"> VTravel  '.$averageratestar.' <i class="fa fa-star "></i>  </h6>';
                            
                        } 
                      ?>
            <p class="my-2 text-muted text-sm"><?php echo $row_pro['scontent'] ?></p>
            <a class="btn btn-grad" href='travel-viewing.php?chon=<?php echo $row_pro['id'] ?>'><i class="fas fa-arrow-right"></i>  Chi tiết hơn</a></div>
        </div>
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
        echo "<a href='travel.php?trang=$i'>Trang $i></a>";
    }
    ?>

    </div>
  </div>
     
</section>
  <!-- khach san --> 
  
  <section class="">
  
  </section>
<!-- nha hang --> 

</body>
<?php include("./v1/scrip.php") ?>
<?php (require_once"./v1/footer.php");?>
</html>
  