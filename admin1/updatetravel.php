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
        $regions = $_POST['regions'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $content1 = $_POST['content1'];
        $scontent = $_POST['scontent'];
        $address = $_POST['address'];
        $author = $_POST['author'];
        $yt = $_POST['yt'];
        $like = $_POST['like'];
        $map = $_POST['map'];
        if($conn -> query("UPDATE travel SET `city`='$city',  `regions`='$regions', `title`='$title' ,`address`='$address', `author`='$author', `content`='$content', `content1`='$content1', `scontent`='$scontent', `like`='$like', `map`='$map' , `yt`='$yt'  WHERE id='$idupdate' ")){
        }
        
    }$conn -> close();
?>
<?php
    if(isset($_POST['quayve'])){
        header("location:tbtravel.php");
        
    }
?>

<?php if(isset($_GET["id"])){
    echo $id=$_GET["id"];
}
?>
<?php $sql="select * from travel where id = $id";
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
                <h1 class="page-title">Cập nhật một địa điểm du lịch </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Cập nhật một địa điểm du lịch </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Các thông tin</div>
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
                                            <label>Regions</label>
                                            <input class="form-control" type="text" value="<?php echo $rows['regions'] ?>" placeholder="Vùng" name="regions">
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
                                            <label>Nội dung 1</label>
                                            <input  class="form-control" rows="2" type="textarea" value="<?php echo $rows['content'] ?>" placeholder="nội dung" value="<?php echo $rows['content'] ?>" name="content"></input>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                            <label>Nội dung 2</label>
                                            <input  class="form-control" rows="2" type="textarea" value="<?php echo $rows['content1'] ?>" placeholder="nội dung" value="<?php echo $rows['content1'] ?>" name="content1"></input>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                            <label>Nội dung 3</label>
                                            <input  class="form-control" rows="2" type="textarea" value="<?php echo $rows['scontent'] ?>" placeholder="nội dung" value="<?php echo $rows['scontent'] ?>" name="scontent"></input>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Nguồn (Tác giả) </label>
                                            <input class="form-control" type="text" value="<?php echo $rows['author'] ?>" placeholder="" name="author">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" value="<?php echo $rows['address'] ?>" placeholder="Địa chỉ" name="address">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Like</label>
                                            <input class="form-control" type="number" placeholder="123" value="<?php echo $rows['like'] ?>" name="like">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Link Map</label>
                                            <input class="form-control" type="text" placeholder="" value="<?php echo $rows['map'] ?>" name="map">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Link Video Review </label>
                                            <input class="form-control" type="text" value="<?php echo $rows['yt'] ?>" placeholder="Link Video Youtube" name="yt">
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