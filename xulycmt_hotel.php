<?php
session_start();
$title_cmt = $_GET['title_cmt'] ?? '';
$comment = $_GET['comment'] ?? '';
$star = $_GET['star'] ?? '';
$month = $_GET['month'] ?? '';
$year = $_GET['year'] ?? '';
$gowith = $_GET['gowith'] ?? '';
$ma = $_SESSION['ma'];
if($star == null){
    $thongbao ="Đánh giá không thành công! Vui lòng điền đầy đủ thông tin ";
    $_SESSION['tb'] = $thongbao;
    header("location:hotel-detailed.php?chon=".$ma."");
}
else{
$kn = mysqli_connect("localhost","root","","tms") or die("Không kết nối được");
mysqli_query($kn,"SET NAMES 'utf8'");
$sql = " insert into comment_hotel (cmt_id,id_user,title, cmt,star,gowith,month,year) VALUES ('". $_SESSION['id_hotel']."','". $_SESSION['id']."', '".$title_cmt."', '".$comment."', '".$star."', '".$gowith."', '".$month."', '".$year."')";
$kqdl=mysqli_query($kn,$sql);
$thongbao ="Đánh giá thành công! ";
$_SESSION['tb'] = $thongbao;
header("location:hotel-detailed.php?chon=".$ma."");
}
?>
        <script>
        window.alert("Bình luận thhành công!");
        
        
    </script>
       

