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
    if(isset($_POST['them'])){
        $city = $_POST['city'];
        $regions = $_POST['regions'];
        $title = $_POST['title'];
        $iva1 = $_POST['iva1'];
        $iva2 = $_POST['iva2'];
        $iva3 = $_POST['iva3'];
        $iva4 = $_POST['iva4'];
        $iva5 = $_POST['iva5'];
        $content = $_POST['content'];
        $content1 = $_POST['content1'];
        $scontent = $_POST['scontent'];
        $author = $_POST['author'];
        $address = $_POST['address'];
        $like = $_POST['like'];
        $map = $_POST['map'];
        $yt = $_POST['yt'];
        if($conn -> query("INSERT INTO `travel`( `city`, `regions`, `title`, `iva1`, `iva2`, `iva3`, `iva4`, `iva5`, `address`, `author`, `content`, `content1`, `scontent`, `like`, `map`, `yt`) VALUES ( '$city', '$regions', '$title', '$iva1', '$iva2', '$iva3', '$iva4', '$iva5', '$address', '$author', '$content', '$content1', '$scontent', '$like', '$map', '$yt')")){
        }

    }$conn -> close();
?>
<body class="fixed-navbar">
<?php include("./form.php") ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Th??m m???t ?????a ??i???m du l???ch m???i</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Th??m m???t ?????a ??i???m du l???ch m???i</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">C??c th??ng tin</div>
                            </div>
                            <div class="ibox-body" style="">
                                <form method="POST" action="#">
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Th??nh ph??? </label>
                                            <input class="form-control" type="text" placeholder="City" name="city">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Regions</label>
                                            <input class="form-control" type="text" placeholder="v??ng mi???n" name="regions">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Ti??u ?????</label>
                                            <input class="form-control" type="text" placeholder="title" name="title">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>???nh ?????i di???n</label>
                                        <input class="form-control" type="file" name="iva1">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>???nh 1</label>
                                        <input class="form-control" type="file" name="iva2">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>???nh 2</label>
                                        <input class="form-control" type="file" name="iva3">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>???nh 3</label>
                                        <input class="form-control" type="file" name="iva4">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>???nh 4</label>
                                        <input class="form-control" type="file" name="iva5">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-6 form-group">
                                            <label>N???i dung 1</label>
                                            <textarea class="form-control" rows="2" name="content"></textarea>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                            <label>N???i dung 2 (N???u c??)</label>
                                            <textarea class="form-control" rows="2" name="content1"></textarea>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-6 form-group">
                                            <label>N???i dung 3 (N???u c??)</label>
                                            <textarea class="form-control" rows="2" name="scontent"></textarea>
                                    </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Ngu???n (T??c gi??? )</label>
                                            <input class="form-control" type="text" placeholder="" name="author">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Address </label>
                                            <input class="form-control" type="text" placeholder="?????a ch???" name="address">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Like</label>
                                            <input class="form-control" type="number" placeholder="123" name="like">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Link Map</label>
                                            <input class="form-control" type="text" placeholder="link map" name="map">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Link Video Review</label>
                                            <input class="form-control" type="text" placeholder="link video youtube" name="yt">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <button name="them" onclick="abc()" class="btn btn-outline-success">L??u v??o</button>
                                    <script>
                                              function abc(){
                                              if(alert("Th??m ?????a ??i???m du l???ch th??nh c??ng!") == true){
                                              }
                                           }
                                    </script>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
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