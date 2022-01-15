<?php
    if(isset($_POST['dangky'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    //kết nối sql
    $kn  = mysqli_connect("localhost", "root", "", "tms") or die("không kết nối được");
    //quy định bản mã
    mysqli_query($kn,"SET NAMES 'utf8'");
    //xây dựng câu lệnh truy vấn
        if($password == $password2){
            $caulenh = "select * from user where email='".$email."'";
            $kq = mysqli_query($kn,$caulenh);
            if ($kqdl = mysqli_fetch_array($kq))
            {
                $tb = "tkno";
                header("location:dangky.php?dl=$tb");
            }
            else{
            $caulenh = "INSERT INTO user (`email`,`password`,`name`,`avatar`,`phonenumber`,`address`) VALUES ('$email','$password','$name','avt.jpg','$phonenumber','$address')";
            //thực hiện truy vấn.
            $kq = mysqli_query($kn,$caulenh);
            $tb = "ok";
            header("location:dangky.php?dl=$tb");
            }
        }else{
            $tb = "p2";
            header("location:dangky.php?dl=$tb");
        }

}
?>