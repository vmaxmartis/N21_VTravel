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

<table style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="width: 50%;">
                        <span style="font-weight:500; font-size:35px;  ">
                          <?php echo $key ?> </span>
                    <span style="font-weight:500; font-size:30px;  ">
                        - Search Results</span>
                <tr>
        </td>

        <td style="width: 50%;     text-align: right;">
            <div class="container-1">
        <div class="text-center px-0 px-sm-5">
            <form  action="#">
          <div class="input-group px-0 px-md-5">
            <input class="form-control border-radius-right-0 border-right-0 bg-transparent" name="search" type="search" id="search" placeholder="Tên khách sạn mà bạn muốn tìm kiếm ...">
            <button type="submit" class="btn btn-grad mb-0 border-radius-left-0" value="Nhập tên khách sạn bạn tìm kiếm  "> <span class=" d-md-block">Tìm kiếm</span> <span class="d-md-none"><i class="fab fa-paper-plane-o m-0"></i></span> </button>
          </div>
        </form>
        </div>
            </div>
        </td>
                </tr>
            </table>
            <br><hr><br>
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
                        echo ' <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row listroBox">
                              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                                <figure> <a href="./travelviewing.php?id='.$getdata[$count][0].'" class="wishlist_bt"></a> <a href="./travelviewing.php?id='.$getdata[$count][0].'"><img  src="'.$getdata[$count][4].'" class="img-fluid" alt="" >
                                  <div class="read_more"  href="./travelviewing.php?id='.$getdata[$count][0].'" ><span>Read more</span></div>
                                  </a> </figure>
                              </div>
                              <div class="col-lg-7 col-md-6 col-sm-12"">
                                <div class="listroBoxmain">
                                  <h3><a href="travelviewing.php">'.$getdata[$count][3].'</a></h3>
                                  <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> '.$getdata[$count][11].'</a></div>
                                  <p>'.$getdata[$count][12].'</p>
                                    
                                      <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                                      <li><i class="fas fa-parking"></i><span>Parking</span></li>
                                      <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                      <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                                 
                                        </div>                          
                                <ul>
                                  <li><span class="Ropen">Now Open</span></li>
                                  <li>
                                  <li><span class="Ropen">Now Open</span></li>
                                  <li>
                                    <div class="R_retings"><span>Blue Hill<em>122 Reviews</em></span><strong>8.2</strong></div>
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
   </div>

<?php include("./v1/scrip.php") ?>
<?php (require_once"./v1/footer.php");?>
</body>
</html>