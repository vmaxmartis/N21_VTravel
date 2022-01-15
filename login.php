<!DOCTYPE>
<html>
<head>
        <meta charset="utf-8">  
        <?php include("./v1/css.php") ?>
        
      
</head>
<body body  background="bdesign/images/185289.jpg">
    <?php include("./v1/header.php") ?>  
<?php
  if(isset($_GET['dl'])){
   
  $tb=$_GET['dl'];
  if($tb=='smk'){
      $nhantb ="Sai mật khẩu!";
  }
  if($tb=='stk'){
    $nhantb ="Không tìm thấy tài khoản của bạn!";
}
if($tb=='kcdl'){
    $nhantb ="Bạn chưa nhập đầy đủ thông tin!";
}
  }
?>
    <?php if(isset($_SESSION['email'])) {
        echo '<H1 style=" margin-left: 570px; color:#f22 ">Bạn đang đăng nhập</H1>';
        echo ' <script>
        var timer = setTimeout(function() {
            window.location="./"
        }, 991);
    </script>';
        die();
    } ?>
    
    <section class="login-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="login-box">
                            <div class="login-top">
                                <h3>Chào mừng đến với V Travel</h3>
                                <p>Trọn vẹn từng phút giây trên hàng ngàn điểm đến </p>
                            </div>
                            <form class="login-form" method="POST" action="xulylogin.php">
                                <div class="row">
                                    <div class="col-md-12 email">
                                        <label>Email</label>
                                        <input  type="text" id="email" name="email" placeholder="Nhập Email của bạn . . . ">
                                    </div>
                                    <div class="col-md-12 password">
                                        <label>Password</label>
                                        <input  id="password" type="password" name="password" placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <div class="chqbox">
                                            <input type="checkbox" name="rememberme" id="rmme">
                                            <label for="rmme">Lưu thông tin</label>
                                        </div>
                                        <div class="forget-btn">
                                            <a href="#">Quên mật khẩu?</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="login">Đăng nhập</button>
                                    </div>
                                    
                                </div>
                                <label style="color:#E00004 "><?php if(isset($nhantb)){echo $nhantb;} ?></label>
                            </form>

                            <div style="text-align: right"><a href="./dangky.php" style="" class="btn-linklogin">Đăng ký tại đây !!!</a>
                            <div class="login-btm text-center">
                                <p>or Đăng nhập bằng</p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>  
</body>
<?php include("./v1/scrip.php") ?>
<?php (require_once"./v1/footer.php");?>
</html>


