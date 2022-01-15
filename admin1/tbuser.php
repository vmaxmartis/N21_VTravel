<!DOCTYPE html>
<html lang="en">

<?php include("./head.php") ?>

<body class="fixed-navbar">
    <?php include("./form.php") ?>
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Người dùng và bình luận</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    
                </ol>
            </div>
            <div class="page-content fade-in-up">
            <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Danh sách người dùng</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                    <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Mail</th>
                                        <th>Tên người dùng</th>
                                        <th>Ảnh đại diện</th>
                                        <th>Số điện thoại</th>
                                        <th>Mật khẩu</th>
                                        <th>Địa chỉ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php
                        //Xác định số dòng trên 1 trang
                        $sodong=10;
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
                        $lldl= "select * from user";
                        $kqdl=mysqli_query($kn,$lldl);
                        $sodongdl=mysqli_num_rows($kqdl);
                        $sotrangdl=$sodongdl/$sodong;
                        $vtbd=$page*$sodong;
                        ?>
                        <?php 
                        $lpt="select * from user limit {$vtbd},{$sodong}";
                        $kqpt=mysqli_query($kn,$lpt);
                        ?>
                        <?php 
                        while ($row_pro=mysqli_fetch_array($kqpt)){
                            $machon=$row_pro['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td> <?php echo $row_pro['id'] ?></td>
                                    <td> <?php echo $row_pro['email'] ?></td>
                                    <td> <?php echo $row_pro['name'] ?></td>
                                     <td> <img style="width: 100px; height: 60px" src="../bdesign/images/img_avatar/<?php echo $row_pro['avatar'] ?>"> </td>
                                     <td> <?php echo $row_pro['phonenumber'] ?></td>
                                     <td> <?php echo $row_pro['password'] ?></td>
                                     <td> <?php echo $row_pro['address'] ?></td>
                                     <td> 
                                        <a href="deleteuser.php?id=<?php echo $row_pro['id'] ?>" style=" margin-left: 20px;" onclick="abc()" class="text-warning">Xóa</a>
                                         <script>
                                              function v1(){
                                              if(alert("Xóa người dùng <?php echo $row_pro['name'] ?> thành công!") == true){
                                              }
                                           }
                                         </script>
                                    </td></td>
                                </tr>
                            </tbody>
                            <?php 
                    
                    }
                    
                    ?>
                        </table>
                                            <?php 
                        for ($i=0;$i<$sotrangdl;$i++)
                        {
                            echo "<a href='tbuser.php?trang=$i'>Trang $i></a>";
                        }
                        ?>

<table class="table">
<div class="ibox-head">
                        <div class="ibox-title">Danh sách bình luận Nhà Hàng</div>
                    </div>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nội dung</th>
                                        <th>ID bài viết</th>
                                        <th>Tháng</th>
                                        <th>Năm</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php
                        //Xác định số dòng trên 1 trang
                        $sodong=10;
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
                        $lldl= "select * from comment_hotel";
                        $kqdl=mysqli_query($kn,$lldl);
                        $sodongdl=mysqli_num_rows($kqdl);
                        $sotrangdl=$sodongdl/$sodong;
                        $vtbd=$page*$sodong;
                        ?>
                        <?php 
                        $lpt="select * from comment_hotel limit {$vtbd},{$sodong}";
                        $kqpt=mysqli_query($kn,$lpt);
                        ?>
                        <?php 
                        while ($row_pro=mysqli_fetch_array($kqpt)){
                            $machon=$row_pro['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td> <?php echo $row_pro['id'] ?></td>
                                    <td> <?php echo $row_pro['cmt'] ?></td>
                                    <td> <?php echo $row_pro['star'] ?></td>
                                    <td> <?php echo $row_pro['month'] ?></td>
                                    <td> <?php echo $row_pro['year'] ?></td>
                                    <td> 
                                        <a href="deletecmthotel.php?id=<?php echo $row_pro['id'] ?>" style=" margin-left: 20px;" onclick="abc()" class="text-warning">Xóa</a>
                                         <script>
                                              function abc(){
                                              if(alert("Xóa bình luận thành công!") == true){
                                              }
                                           }
                                         </script>
                                    </td></td>
                                </tr>
                            </tbody>
                                    <?php 
                            
                            }
                            
                            ?>
                    </table>    
                    </div>
                </div>
            </div>
            <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Danh sách bình luận Điểm du lịch</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tháng</th>
                                        <th>ID bài viết</th>
                                        <th>Tháng</th>
                                        <th>Năm</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php
                        //Xác định số dòng trên 1 trang
                        $sodong=10;
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
                        $lldl= "select * from comment_travel";
                        $kqdl=mysqli_query($kn,$lldl);
                        $sodongdl=mysqli_num_rows($kqdl);
                        $sotrangdl=$sodongdl/$sodong;
                        $vtbd=$page*$sodong;
                        ?>
                        <?php 
                        $lpt="select * from comment_travel limit {$vtbd},{$sodong}";
                        $kqpt=mysqli_query($kn,$lpt);
                        ?>
                        <?php 
                        while ($row_pro=mysqli_fetch_array($kqpt)){
                            $machon=$row_pro['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td> <?php echo $row_pro['id'] ?></td>
                                    <td> <?php echo $row_pro['cmt'] ?></td>
                                    <td> <?php echo $row_pro['star'] ?></td>
                                    <td> <?php echo $row_pro['month'] ?></td>
                                    <td> <?php echo $row_pro['year'] ?></td>
                                    <td> 
                                        <a href="deletecmttravel.php?id=<?php echo $row_pro['id'] ?>" style=" margin-left: 20px;" onclick="abc()" class="text-warning">Xóa</a>
                                         <script>
                                              function v2(){
                                              if(alert("Xóa bình luận  thành công!") == true){
                                              }
                                           }
                                         </script>
                                    </td></td>
                                </tr>
                            </tbody>
                                    <?php 
                            
                            }
                            
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          

            <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Danh sách bình luận Nhà Hàng</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                    <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nội dung</th>
                                        <th>ID bài viết</th>
                                        <th>Tháng</th>
                                        <th>Năm</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php
                        //Xác định số dòng trên 1 trang
                        $sodong=10;
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
                        $lldl= "select * from comment_hotel";
                        $kqdl=mysqli_query($kn,$lldl);
                        $sodongdl=mysqli_num_rows($kqdl);
                        $sotrangdl=$sodongdl/$sodong;
                        $vtbd=$page*$sodong;
                        ?>
                        <?php 
                        $lpt="select * from comment_hotel limit {$vtbd},{$sodong}";
                        $kqpt=mysqli_query($kn,$lpt);
                        ?>
                        <?php 
                        while ($row_pro=mysqli_fetch_array($kqpt)){
                            $machon=$row_pro['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td> <?php echo $row_pro['id'] ?></td>
                                    <td> <?php echo $row_pro['cmt'] ?></td>
                                    <td> <?php echo $row_pro['star'] ?></td>
                                    <td> <?php echo $row_pro['month'] ?></td>
                                    <td> <?php echo $row_pro['year'] ?></td>
                                    <td> 
                                        <a href="deleteuser.php?id=<?php echo $row_pro['id'] ?>" style=" margin-left: 20px;" onclick="abc()" class="text-warning">Xóa</a>
                                         <script>
                                              function abc(){
                                              if(alert("Xóa thành công!") == true){
                                              }
                                           }
                                         </script>
                                    </td></td>
                                </tr>
                            </tbody>
                                    <?php 
                            
                            }
                            
                            ?>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
           
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <div class="theme-config">
        <div class="theme-config-toggle"><i class="fa fa-cog theme-config-show"></i><i class="ti-close theme-config-close"></i></div>
        <div class="theme-config-box">
            <div class="text-center font-18 m-b-20">SETTINGS</div>
            <div class="font-strong">LAYOUT OPTIONS</div>
            <div class="check-list m-b-20 m-t-10">
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedNavbar" type="checkbox" checked>
                    <span class="input-span"></span>Fixed navbar</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedlayout" type="checkbox">
                    <span class="input-span"></span>Fixed layout</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input class="js-sidebar-toggler" type="checkbox">
                    <span class="input-span"></span>Collapse sidebar</label>
            </div>
            <div class="font-strong">LAYOUT STYLE</div>
            <div class="m-t-10">
                <label class="ui-radio ui-radio-gray m-r-10">
                    <input type="radio" name="layout-style" value="" checked="">
                    <span class="input-span"></span>Fluid</label>
                <label class="ui-radio ui-radio-gray">
                    <input type="radio" name="layout-style" value="1">
                    <span class="input-span"></span>Boxed</label>
            </div>
            <div class="m-t-10 m-b-10 font-strong">THEME COLORS</div>
            <div class="d-flex m-b-20">
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Default">
                    <label>
                        <input type="radio" name="setting-theme" value="default" checked="">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-white"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue">
                    <label>
                        <input type="radio" name="setting-theme" value="blue">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-blue"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green">
                    <label>
                        <input type="radio" name="setting-theme" value="green">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-green"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple">
                    <label>
                        <input type="radio" name="setting-theme" value="purple">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-purple"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Orange">
                    <label>
                        <input type="radio" name="setting-theme" value="orange">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-orange"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Pink">
                    <label>
                        <input type="radio" name="setting-theme" value="pink">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-pink"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
            </div>
            <div class="d-flex">
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="White">
                    <label>
                        <input type="radio" name="setting-theme" value="white">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue light">
                    <label>
                        <input type="radio" name="setting-theme" value="blue-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-blue"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green light">
                    <label>
                        <input type="radio" name="setting-theme" value="green-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-green"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple light">
                    <label>
                        <input type="radio" name="setting-theme" value="purple-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-purple"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Orange light">
                    <label>
                        <input type="radio" name="setting-theme" value="orange-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-orange"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Pink light">
                    <label>
                        <input type="radio" name="setting-theme" value="pink-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-pink"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
            </div>
        </div>
    </div>
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
    <script src="./assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
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