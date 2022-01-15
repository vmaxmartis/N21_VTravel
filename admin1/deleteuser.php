<?php require_once 'conn.php' ?>
<?php if(isset($_GET["id"])){
     $id=$_GET["id"];
}
?>
<?php
        if($conn -> query("DELETE FROM user WHERE id='$id'")){
        }

    $conn -> close();
    header("location:tbuser.php")
?>
