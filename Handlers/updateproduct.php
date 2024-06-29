<?php

require_once "dbconn.php";

$count = $_GET['value'];
$cartid = $_GET['key'];

$sql = "UPDATE `products` SET `Product_Qty`='$count' WHERE `Product_id` = '$cartid'";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../aproduct.php");
}


?>