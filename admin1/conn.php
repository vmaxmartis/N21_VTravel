<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tms";

$conn=mysqli_connect($servername,$username,$password,$dbname);
mysqli_query($conn,"SET NAMES 'utf8'");
if(!$conn){
    echo("nice!");

}else 
    echo("Mất kết nối sql!");
?>