<?php require "./conn.php" ?>  
<?php 
if(isset($_GET["id"])){
$id=$_GET["id"];
}
?>
<?php 
     $sql = "DELETE FROM hotel WHERE id = $id";
     $qr = mysqli_query($conn, $sql);
    
?>