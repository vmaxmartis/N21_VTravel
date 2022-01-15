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
    $key =  $_GET['search'];
?>
<section>
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
   </div>
   <div class="col-md-12 col-lg-9 mx-auto p-4 p-sm-5">
      <div class="text-center px-0 px-sm-5">
        <span style="font-weight:500; font-size:30px;  ">
                       Kết quả tìm kiếm</span><span class="text-primary" style="font-weight:500; font-size:35px;  ">
                          <?php echo $key ?> </span>
        <h2 class="text-secondary"></h2> <h2 class="text-secondary"></h2>
        <form  action="./search.php">
          <div class="input-group px-0 px-md-5 search">
            <input class="form-control border-radius-right-0 border-right-0 bg-transparent" name="search" type="search" id="search" placeholder="Tên khách sạn mà bạn muốn tìm kiếm ...">
            <button type="submit" class="btn btn-grad mb-0 border-radius-left-0" value="Nhập tên nhà hàng bạn tìm kiếm  "> <span class=" d-md-block">Tìm kiếm </span> <span class="d-md-none"><i class="fab fa-paper-plane-o m-0"></i></span> </button>
          </div>
        </form>
      </div>
     </div>
       <br> 
       <div class="container">
       <?php
                    include './module/travelPost.php';
                    $getClass = new travelPost();
                    $getdata = $getClass->getlistTravelviewing();
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
                                <figure> <a href="./travel-viewing.php?chon='.$getdata[$count][0].'" class="wishlist_bt"></a> <a href="./travel-viewing.php?chon='.$getdata[$count][0].'"><img   src="./bdesign/images/img_source/'.$getdata[$count][4].'" class="img-fluid" alt="" >
                                  <div class="read_more"  href="./travel-viewing.php?chon='.$getdata[$count][0].'" ><span>Read more</span></div>
                                  </a> </figure>
                              </div>
                              <div class="col-lg-7 col-md-6 col-sm-12"">
                                <div class="listroBoxmain">
                                  <h3><a href="travel-viewing.php">'.$getdata[$count][3].'</a></h3>
                                  <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> '.$getdata[$count][5].'</a></div>
                                  <p>'.$getdata[$count][8].'</p>
                                 
                                        </div>                          
                                <ul>
                                  <li><span class="Ropen">Now Open</span></li>
                                  <li><span class="Ropen">Now Open</span></li>
                                  <li>
                                    <div class="R_retings"><span>Đã có<em>'.$getdata[$count][9].'LIKE</em>
                                  </li
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