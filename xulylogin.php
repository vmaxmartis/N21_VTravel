<?php
    session_start();
    if(isset($_POST['login'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    //kết nối sql
    $kn  = mysqli_connect("localhost", "root", "", "tms") or die("không kết nối được");
    //quy định bản mã
    mysqli_query($kn,"SET NAMES 'utf8'");
    //xây dựng câu lệnh truy vấn
    if($email =="" || $password==""){
        $tb = "kcdl";
        header("location:login.php?dl=$tb");
    }else{
        $caulenh = "select * from user where email='".$email."'";
        //thực hiện truy vấn.
        $kq = mysqli_query($kn,$caulenh);
        if ($kqdl = mysqli_fetch_array($kq))
        {
            if($kqdl['password']==$password)
            {
                $id = $kqdl['id'];
                $name = $kqdl['name'];
                $avatar = $kqdl['avatar'];
                $address = $kqdl['address'];
                $_SESSION['user'] = $name;
                $_SESSION['id'] = $id;
                $_SESSION['avatar'] = $avatar;
                $_SESSION['email'] = $email;
                $_SESSION['address'] = $address;
                header("location:index.php");
            }
            else
            {
                $tb = "smk";
                header("location:login.php?dl=$tb");
            }
    
        }
        else{
            $tb = "stk";
                header("location:login.php?dl=$tb");
        }
    }

}
?>