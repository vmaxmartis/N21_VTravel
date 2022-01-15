<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>
<?php require_once 'conn.php' ?>
<?php
    if(isset($_POST['update'])){
        $idupdate = $_POST['id'];
        $city = $_POST['city'];
        $rank = $_POST['rank'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $shortcontent = $_POST['shortcontent'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $pricemax = $_POST['pricemax'];
        $pricemin = $_POST['pricemin'];
        $address = $_POST['address'];
        $nborate = $_POST['nborate'];
        $rate = $_POST['rate'];
        $map = $_POST['map'];
        if($conn -> query("UPDATE hotel SET `city`='$city',  `rank`='$rank', `title`='$title' ,`content`='$content', `shortcontent`='$shortcontent' WHERE id='$idupdate' ")){
        }
        
    }$conn -> close();
?>
<?php
    if(isset($_POST['quayve'])){
        header("location:tbhotel.php");
        
    }
?>

<?php if(isset($_GET["id"])){
    echo $id=$_GET["id"];
}
?>
<?php $sql="select * from hotel where id = $id";
 $kn = mysqli_connect("localhost","root","","tms") or die("Không kết nối được");
 mysqli_query($kn,"SET NAMES 'utf8'");
$qr=mysqli_query($kn,$sql);
$rows = mysqli_fetch_array($qr);
?>
<body class="fixed-navbar">
<?php include("./form.php") ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Cập nhật một khách sạn </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Cập nhật một khách sạn </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Các thông tin khác</div>
                            </div>
                            <div class="ibox-body" style="">
                                <form method="POST" action="#">
                                    <div class="row">
                                    <div class="col-sm-3 form-group">
                                            <label>ID </label>
                                            <input class="form-control" type="number" value="<?php echo $rows['id'] ?>" name="id" readonly="readonly">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Thành phố </label>
                                            <input class="form-control" type="text" value="<?php echo $rows['city'] ?>" placeholder="City" name="city">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Rank</label>
                                            <input class="form-control" type="number" value="<?php echo $rows['rank'] ?>" placeholder="số sao" name="rank">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Tiêu đề</label>
                                            <input class="form-control" type="text" value="<?php echo $rows['title'] ?>" placeholder="title" name="title">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh đại diện</label><br>
                                        <img style="width: 100px; height: 60px" src="../bdesign/images/img_source/<?php echo $rows['iva1'] ?>">
                                        <label><?php echo $rows['iva1'] ?></label>

                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh 1</label><br>
                                        <img style="width: 100px; height: 60px" src="../bdesign/images/img_source/<?php echo $rows['iva2'] ?>">
                                        <label><?php echo $rows['iva2'] ?></label>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh 2</label><br>
                                        <img style="width: 100px; height: 60px" src="../bdesign/images/img_source/<?php echo $rows['iva3'] ?>">
                                        <label><?php echo $rows['iva3'] ?></label>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh 3</label><br>
                                        <img style="width: 100px; height: 60px" src="../bdesign/images/img_source/<?php echo $rows['iva4'] ?>">
                                        <label><?php echo $rows['iva4'] ?></label>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh 4</label><br>
                                        <img style="width: 100px; height: 60px" src="../bdesign/images/img_source/<?php echo $rows['iva5'] ?>">
                                        <label><?php echo $rows['iva5'] ?></label>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-6 form-group">
                                            <label>Nội dung</label>
                                            <input  class="form-control" rows="2" type="textarea" value="<?php echo $rows['content'] ?>" placeholder="nội dung" value="<?php echo $rows['content'] ?>" name="content"></input>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                            <label>Mô tả ngắn</label>
                                            <input  class="form-control" rows="2" type="textarea" value="<?php echo $rows['content'] ?>" placeholder="nội dung" value="<?php echo $rows['content'] ?>" name="shortcontent"></input>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Check-in </label>
                                            <input class="form-control" type="text" value="<?php echo $rows['checkin'] ?>" placeholder="14h00" name="checkin">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Check-out</label>
                                            <input class="form-control" type="text" value="<?php echo $rows['checkout'] ?>" placeholder="23h00" name="checkout">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Price - max</label>
                                            <input class="form-control" type="number" placeholder="500000" value="<?php echo $rows['pricemax'] ?>" name="pricemax">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Price - min</label>
                                            <input class="form-control" type="number" placeholder="150000" value="<?php echo $rows['pricemin'] ?>" name="pricemin">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Address </label>
                                            <input class="form-control" type="text" value="<?php echo $rows['address'] ?>" placeholder="Địa chỉ" name="address">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Nborate</label>
                                            <input class="form-control" type="number" value="<?php echo $rows['nborate'] ?>" placeholder="1009" name="nborate">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>rate</label>
                                            <input class="form-control" type="number" value="<?php echo $rows['rate'] ?>" placeholder="1008" name="rate">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>map</label>
                                            <input class="form-control" type="text" value="<?php echo $rows['map'] ?>" placeholder="link map" name="map">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <button name="update" onclick="abc()" class="btn btn-outline-success">Lưu vào</button>
                                    <script>
                                              function abc(){
                                              if(alert("Cập nhật khách sạn thành công!") == true){
                                              }
                                           }
                                    </script>
                                    <button name="quayve" class="btn " style=" margin-left: 50px;">Quay về</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
               

            <!-- END PAGE CONTENT-->
            
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <?php include("./setting.php") ?>   
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#summernote').summernote();
            $('#summernote_air').summernote({
                airMode: true
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
</body>

</html>