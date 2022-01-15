<!doctype html>
<html lang="vn">
  <head>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<?php include("./v1/css.php") ?>
<?php session_start(); ?>
<!--css>
	header Start-->
<?php include("./v1/header.php") ?>
<!-- =======================
	header End--> 

<!-- =======================
	Banner innerpage -->
<!-- =======================
	Banner innerpage -->
  <body >
  <?php include("./v1/banner.php") ?>
 

  <?php
   
   $ma=$_GET['chon'];
   $kn = mysqli_connect("localhost","root","","tms") or die("Không kết nối được");
   mysqli_query($kn,"SET NAMES 'utf8'");
   $lldl= "select * from restaurant where id='".$ma."' ";
   $kqdl=mysqli_query($kn,$lldl);

   while ($row_ct=mysqli_fetch_array($kqdl))
   {
     $id =  $row_ct['id'];
     $_SESSION['id_res'] = $id;
?>

<div class ="khoangcach"></div>
  <section class="pt80 pb80 listingDetails Campaigns">
  <div class="container">
  <h1>Khám phá <span class="text-primary" ><?php echo $row_ct['title'] ?></span>  <span class="text-secondary">Cùng với VTravel.</span></h1>
          <div class="tab-pane booking-search show active" id="tab-de-1">
          <!-- Tab 11111111 --> 
          <div class="tab-pane booking-search show active" id="tab-de-1">
            <div class="text-block NopaddingDetails">
            <h5 class="text-primary" > <?php echo $row_ct['title'] ?>   </h5>  
            <div class="text-block NopaddingDetails">
              <h5 class="mb-4"> <?php echo $row_ct['address'] ?> </h5>
            </div>
    <div class="row">
      
      <!-- Tab line -->

      <div class="col-lg-8 col-md-12 col-sm-12 ">
      <div class="content">
        <div class="tab-content">
          <div class="tab-pane booking-search show active" id="tab-de-1">
          <div class="col-18">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
                    <div class="carousel-item active">
                        <img class="d-block w-100" style="width: 100%; height: 440px; " src="bdesign/images/img_source/<?php echo $row_ct['iva1'] ?>">
                    </div>
                    <!--Slide 2-->
                    <div class="carousel-item">
                        <img  style="width: 100%; height:440px;" class="d-block w-100" src="bdesign/images/img_source/<?php echo $row_ct['iva2'] ?>">
                    </div>
                    <!--Slide 3-->
                    <div class="carousel-item">
                        <img  style="width: 100%; height:440px;" class="d-block w-100" src="bdesign/images/img_source/<?php echo $row_ct['iva3'] ?>">
                    </div>
                    <div class="carousel-item">
                        <img  style="width: 100%; height:440px;" class="d-block w-100" src="bdesign/images/img_source/<?php echo $row_ct['iva2'] ?>">
                    </div>
                    <div class="carousel-item">
                        <img  style="width: 100%; height:440px;" class="d-block w-100" src="bdesign/images/img_source/<?php echo $row_ct['iva1'] ?>">
                    </div>
                </div>
                <!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                <!--Hết tạo điều khiển chuyển Slide-->
                </div>
            </div>
            <br>
            <div class="container">
              <h5 class="mb-4">Nhiều ảnh hơn </h5>
              <div class="swiper-container guides-slider">
                    <div class="swiper-wrapper imgdeta2"> 
                      <!-- Slides-->
                      <div class="swiper-slide h-auto px-2">
                        <div class="card card-poster"><a href="#" class="tile-link"></a><img style=" height:150px;" src="bdesign/images/img_source/<?php echo $row_ct['iva1'] ?>" alt="Card image" class="bg-image">                         
                        </div>
                      </div>
                      <div class="swiper-slide h-auto px-2">
                        <div class="card card-poster"><a href="#" class="tile-link"></a><img style=" height:150px;" src="bdesign/images/img_source/<?php echo $row_ct['iva2'] ?>" alt="Card image" class="bg-image">                         
                        </div>
                      </div>
                      <div class="swiper-slide h-auto px-2">
                        <div class="card card-poster"><a href="#" class="tile-link"></a><img style=" height:150px;" src="bdesign/images/img_source/<?php echo $row_ct['iva3'] ?>" alt="Card image" class="bg-image">                         
                        </div>
                      </div>
                      <div class="swiper-slide h-auto px-2">
                        <div class="card card-poster"><a href="#" class="tile-link"></a><img style=" height:150px;" src="bdesign/images/img_source/<?php echo $row_ct['iva4'] ?>" alt="Card image" class="bg-image">                         
                        </div>
                      </div>
                    </div>
            </div>
            </div>
            </div>
            <br>          
            <div class="text-block NopaddingDetails">
              <h5 class="mb-4">Giới thiệu:</h5>
              <p class="text-muted font-weight-light"><?php echo $row_ct['content'] ?></p>
            </div>

            <!-- Amenities-->
            <div class="text-block">
              <h5 class="mb-4">Tiện nghi</h5>
              <div class="row2">
                <div class="col-md-6">
                  <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="fa fa-wifi text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Wifi miễn phí</span></li>
                    <li class="mb-2"><i class="fa fa-tv text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Truyền hình cap</span></li>
                    <li class="mb-2"><i class="fa fa-snowflake text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Điều hòa</span></li>
                    <li class="mb-2"><i class="fa fa-thermometer-three-quarters text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Sưởi</span></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="fa fa-bath text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Nhà vệ sinh</span></li>
                    <li class="mb-2"><i class="fa fa-utensils text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Nhà bếp</span></li>
                    <li class="mb-2"><i class="fa fa-laptop text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Bàn làm việc</span></li>
                    <li class="mb-2"><i class="fa fa-tshirt text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Máy giặc</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="text-block">
              <p class="subtitle text-sm text-primary">Nhà hàng </p>
              <h5 class="mb-4">Dánh giá </h5>
              <?php
              //lấy dữ liệu cmt
                $id_res = $row_ct['id'];
               //Xác định số dòng trên 1 trang
                $sodong3=4;
                if(isset($_GET['trang']))
               {
                $page3=$_GET['trang'];
                }
               else
              {
              $page3=0;
              }
              //Đếm số dòng dl
             $kn3 = mysqli_connect("localhost","root","","tms") or die("Không kết nối được");
              mysqli_query($kn3,"SET NAMES 'utf8'");
              $lldl3= "select * from comment_restaurant";
              $kqdl3=mysqli_query($kn3,$lldl3);
              $sodongdl3=mysqli_num_rows($kqdl3);
              $sotrangdl3=$sodongdl3/$sodong3;
              $vtbd3=$page3*$sodong3;
              ?>
             <?php 
                $lpt3="select * from comment_restaurant where cmt_id='".$id_res."' limit {$vtbd3},{$sodong3}";
                $kqpt3=mysqli_query($kn3,$lpt3);
            ?>
            <?php 
                 while ($row_pro3=mysqli_fetch_array($kqpt3)){
                   //truy vấn lấy img người dùng và tên
                   $id_user_cmt = $row_pro3['id_user'];
                   $lldl4= "select * from user";
                   $kqdl4=mysqli_query($kn3,$lldl4);
                   $lpt4="select * from user where id='".$id_user_cmt."' ";
                   $kqpt4=mysqli_query($kn3,$lpt4);
                   $row_pro4=mysqli_fetch_array($kqpt4)
             ?>
              <div class="media d-block d-sm-flex review">
                <div class="text-md-center mr-4 mr-xl-5"><img src="bdesign/images/img_avatar/<?php echo $row_pro4['avatar'] ?>" alt="Padmé Amidala" class="avatar avatar-xl p-2 mb-2"></div>
                <div class="media-body">
                  <h6 class="mt-2 mb-1"><?php echo $row_pro4['name'] ?></h6>
                  <?php if($row_pro3['star']==1){ ?>
                  <img src="bdesign\images\img_star\star1.png" >
                  <?php } ?>
                  <?php if($row_pro3['star']==2){ ?>
                  <img src="bdesign\images\img_star\star2.png" >
                  <?php } ?>
                  <?php if($row_pro3['star']==3){ ?>
                  <img src="bdesign\images\img_star\star3.png" >
                  <?php } ?>
                  <?php if($row_pro3['star']==4){ ?>
                  <img src="bdesign\images\img_star\star4.png" >
                  <?php } ?>
                  <?php if($row_pro3['star']==5){ ?>
                  <img src="bdesign\images\img_star\star5.png" >
                  <?php } ?>
                  <p class="p_cmt"><?php echo $row_pro3['title'] ?></p>
                  <hr class="text-sm hr_cmt0" width="30%"  />
                  <p class="text-sm p_cmt0"><?php echo $row_pro3['cmt'] ?></p>
                  <p class=" text-sm p_cmt1">Đi cùng: <?php echo $row_pro3['gowith'] ?></p>
                  <p class=" text-sm p_cmt2 ">Đi vào <?php echo $row_pro3['month'] ?> - <?php echo $row_pro3['year'] ?> </p>
                </div>
                
              </div>
              <?php 
                 }
                 ?>
              <?php 
                if(isset($_SESSION['user'])){
                  $_SESSION['ma'] = $ma;
                ?>
            
              <div class="rebiew_section">
                <div id="leaveReview" class="mt-4 collapse show" style="">
                  <h5 class="mb-4">Đánh giá của bạn</h5>
                  <img class="img_avatar" src="bdesign/images/img_avatar/<?php echo $_SESSION['avatar']; ?>"></img>
                  <h5 class="name_user"><?php echo $_SESSION['user']; ?></h5> <br>
                  <form id="contact-form" method="get" action="xulycmt_restaurant.php" class="form">
                    <div class="row cmtct">
                    
                      <div class="stars">
                        <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
                       <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
                        <label class="star star-2" for="star-2"></label>
                         <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
                          <label class="star star-1" for="star-1"></label><br>

                        
                          <br><label >Tiêu đề </label><br>
                          <input type="text" class ="text_cmt" name="title_cmt"  placeholder="Tiêu đề ngắn gọn" required class="form-control"autocomplete="off" maxlength="50">
                          <br><label >Nội dung </label><br>
                          <textarea rows="5" cols="70" class ="text_cmt2" name="comment"  placeholder="Chi tiết mô tả của bạn" required class="form-control"autocomplete="off" maxlength="350"></textarea>
                          <hr class="text-sm hr_cmt0" width="30%"  />
                          <label >Bạn đi cùng ai</label><br>
                          <select name ="gowith">
                            <option value ="Một mình">Một mình</option>
                            <option value ="Bạn bè">Bạn bè</option>
                            <option value ="Cặp đôi">Cặp đôi</option>
                            <option value ="Gia đình (trẻ nhỏ)">Gia đình (trẻ nhỏ)</option>
                            <option value ="Gia đình (thanh thiếu niên)">Gia đình (thanh thiếu niên)</option>
                            <option value ="Danh nghiệp">Danh nghiệp</option>
                          </select>
                          <hr class="text-sm hr_cmt0" width="30%"  />
                          <label >Bạn đi vào thời gian nào</label><br>
                          <select name ="month">
                            <option value ="Tháng 01">Tháng 01</option>
                            <option value ="Tháng 02">Tháng 02</option>
                            <option value ="Tháng 03">Tháng 03</option>
                            <option value ="Tháng 04">Tháng 04</option>
                            <option value ="Tháng 05">Tháng 05</option>
                            <option value ="Tháng 06">Tháng 06</option>
                            <option value ="Tháng 07">Tháng 07</option>
                            <option value ="Tháng 08">Tháng 08</option>
                            <option value ="Tháng 09">Tháng 09</option>
                            <option value ="Tháng 10">Tháng 10</option>
                            <option value ="Tháng 11">Tháng 11</option>
                            <option value ="Tháng 12">Tháng 12</option>
                          </select>
                          <select name ="year">
                            <option value ="Năm 2021">Năm 2021</option>
                            <option value ="Năm 2020">Năm 2020</option>
                          </select><br>
                          <hr class="text-sm hr_cmt0" width="30%"  />
                          <label >Tải ảnh lên (Nếu có)</label><br>
                          <input type="file" name="" />
                        </div>


                    </div>
                    <hr class="text-sm hr_cmt1" width="90%"  />
                    <button type="submit" class="btn btn-primary cmtct_bt">Đăng</button>
                  </form>
                  <?php 
                    if(isset($_SESSION['tb'])){
                     ?>
                    <div>
                     <p class ="thongbao"><?php echo $_SESSION['tb'];unset($_SESSION['tb']); ?></p>
                    </div>
                    <?php } ?>
                </div>
              </div>
          
          <?php
           }          
          ?>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 right_Details">
        <div class="p-4 shadow ml-lg-4 rounded sticky-top" style="top: 100px;">
          <p class = "title_ct"><?php echo $row_ct['title'] ?></p>
          <?php
                  $query14 = mysqli_query($kn3, 'SELECT AVG(star) FROM `comment_restaurant` WHERE `cmt_id` = "'. $_GET['chon'].'"');
                  if ($row14 = mysqli_fetch_array($query14)) {
                      $averageratestar =round($row14[0], 1);
                      echo '<a href="#" class="btn btn-outline-warning text-success"> Điểm đánh giá người dùng  '.$averageratestar.' <i class="fa fa-star "></i>  </a>';
                      
                  } 
          ?>
          <p class = "address_ct" ><span class="fas fa-map-marker-alt address_clor"></span> <?php echo $row_ct['address'] ?></p>
          <hr class="my-4">
          <div class ="chinout">
          <a href="#" class="btn btn-outline-success">Open <br> <?php echo $row_ct['open'] ?> </a><a href="#" class="btn btn-outline-white">-</a><a href="#" class="btn btn-outline-danger">Close<br> <?php echo $row_ct['close'] ?> </a>  
          </div>
          <hr class="my-4">
              <!-- Listing Location-->
              <p class="mb-4">Vị trí</p>
              <iframe src="<?php echo $row_ct['map'] ?>" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
   }
   ?>


 
<section class="Categories pt90 pb90 restaurantsamilar">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <p class="subtitle text-secondary nopadding">Nhà hàng</p>
        <h1 class="paddtop1 font-weight lspace-sm">Có thể bạn thích </h1>
      </div>
      <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href='restaurant.php?chon=<?php echo $row_pro['id'] ?>' class="blist text-sm ml-2"> Xem tất cả<i class="fas fa-angle-double-right ml-2"></i></a></div>
    </div>
    <div class="row">
      <div class="swiper-container guides-slider-popular"> 
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper"> 
          <!-- Slides-->
          <?php
            //Xác định số dòng trên 1 trang
             $sodong2=18;
            if(isset($_GET['trang']))
            {
              $page=$_GET['trang'];
            }
            else
             {
              $page=0;
           }
            //Đếm số dòng dl
             $kn2 = mysqli_connect("localhost","root","","tms") or die("Không kết nối được");
              mysqli_query($kn2,"SET NAMES 'utf8'");
              $lldl2= "select * from restaurant";
             $kqdl2=mysqli_query($kn2,$lldl2);
             $sodongdl2=mysqli_num_rows($kqdl2);
             $sotrangdl2=$sodongdl2/$sodong2;
             $vtbd2=$page*$sodong2;
           ?>
           <?php 
            $lpt2="select * from restaurant limit {$vtbd2},{$sodong2}";
             $kqpt2=mysqli_query($kn2,$lpt2);
           ?>
           <?php 
            while ($row_pro=mysqli_fetch_array($kqpt2)){
            $machon2=$row_pro['id'];
           ?>


          <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listroBox">
              <figure> <a " class="wishlist_bt"></a><a href='restaurant-detailed.php?chon=<?php echo $row_pro['id'] ?>'><img src="bdesign/images/img_source/<?php echo $row_pro['iva1'] ?>" class="img-fluid" alt="" >
                <div class="read_more"><span>Xem thêm</span></div>
                </a> </figure>
              <div class="listroBoxmain">
                <h3><a "><?php echo $row_pro['title'] ?> <p class="R_retings">
                  <?php
                        $query14 = mysqli_query($kn, 'SELECT AVG(star) FROM `comment_restaurant` WHERE `cmt_id` = "'. $machon2.'"');
                        if ($row14 = mysqli_fetch_array($query14)) {
                            $averageratestar =round($row14[0], 1);
                            echo '<h6  class="text-success"> VTravel  '.$averageratestar.' <i class="fa fa-star "></i>  </h6>';
                            
                        } 
                      ?></p>
                <p class="text-gray-500 text-sm my-3"><i class="fas fa-map-marker-alt"></i></i> <?php echo $row_pro['address'] ?></p>
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
        <div class="swiper-pagination d-md-none"> </div>
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
<?php include("./v1/footer.php") ?>
<!-- =======================
	footer  --> 

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<?php include("./v1/scrip.php") ?>
</body>

<!-- Mirrored from preview.templatehouse.net/travelgo/cruise-grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 04:40:24 GMT -->
</html>