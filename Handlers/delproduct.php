<?php
require_once "dbconn.php";
$pid = $_GET['key'];
$sql = "DELETE FROM `products` WHERE `Product_id`=$pid";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../aproduct.php");
}
?>