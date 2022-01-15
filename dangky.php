
<meta charset="utf-8">
<html>
<?php include("./v1/css.php") ?>
<?php include("./v1/header.php") ?>
<?php
  if(isset($_GET['dl'])){
   
  $tb=$_GET['dl'];
  if($tb=='ok'){
    $nhantb2 ="Đăng ký thành công!";
}
if($tb=='p2'){
    $nhantb ="Nhập lại mật khẩu chưa đúng!";
}
if($tb=='tkno'){
    $nhantb ="Email đã được sử dụng!";
}
}
?>
<body body  background="bdesign/images/185289.jpg"> 
<br><br>
<section class="registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="registration-box">
                    <div class="reg-top">
                        <h3 style="color: #f2f2f2;" >Đăng ký tài khoản.</h3>
                        <p style="color: #f2f2f2;" >Trải nghiệm nhiều hơn với V Travel  </p>
                    </div>
    
    <form class="reg-form" method="POST" action="xulydangky.php" >
    
        <div class="col-md-12 name">
        <label for="" style="color: #f2f2f2;" >Tên người dùng</label>
            <input type="text" class="form-control"   id="name" required=""autocomplete="off" placeholder="Vmax Martis" name="name">
        </div>
        <div class="col-md-12 name">
            <label for="" style="color: #f2f2f2;">Email</label>
            <input type="email" class="form-control" id="email" required=""autocomplete="off" placeholder="vm@gmail.com" name="email">
        </div>
    <div id="emaill" style="color: #f00; line-height: 14px; margin-bottom: 10px; margin-top: -5px; font-size: 14px"></div>
        <div class="col-md-12 name">
            <label for="" style="color: #f2f2f2;">Password</label>
            <input type="password" class="form-control"  id="password"autocomplete="off"  placeholder="Nhập mật khẩu" name="password">
        </div>
        <div class="col-md-12 name">
            <label for="" style="color: #f2f2f2;">Confirm password</label>
            <input type="password" class="form-control"  id="password2"autocomplete="off" required="" placeholder="Nhập lại mật khẩu" name="password2">
        </div>
         <div id="passerror" style="color: #f00; line-height: 14px; margin-bottom: 10px; margin-top: -5px; font-size: 14px"></div>
        <div class="col-md-12 name">
            <label for="" style="color: #f2f2f2;">Số điện thoại</label>
            <input type="text" class="form-control" id="phonenumber"autocomplete="off"  required="" placeholder="0387397253" name="phonenumber">
        </div>
    <div id="sdt" style="color: #f00; line-height: 14px; margin-bottom: 10px; margin-top: -5px; font-size: 14px"></div>
        <div class="col-md-12 name">
            <label for="" style="color: #f2f2f2;">Địa Chỉ</label>
            <input type="text" class="form-control" id="address"   required="" autocomplete="off"  placeholder="18 - Tư Ân Vệ - Thị trấn CHiêm Ngư" name="address">
        </div>
        <div style="text-align: center"><button style="margin-top: 10px;" name="dangky" class="btn btn-secondary">Đăng ký</button></div>
        <label style="color:#E00004 "><?php if(isset($nhantb)){echo $nhantb;} ?></label>
        <label style="color:#F0F00C "><?php if(isset($nhantb2)){echo $nhantb2;} ?></label>
        <div  style="text-align: right"><a href="./login.php" class="btn-linklogin">Đăng nhập</a></div>
    </form>
                </div>
            </div>
        </div>
    </div> 
</section>


<?php include("./v1/scrip.php") ?>
<?php (require_once"./v1/footer.php");?>
</html>
<!-- =======================


</body>
</div>
<br><br><br><br>