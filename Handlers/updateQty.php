<?php

require_once "dbconn.php";

$count = $_GET['count'];
$cartid = $_GET['key'];

$sql = "UPDATE `cart` SET `Ord_qty`='$count' WHERE `Ord_id` = '$cartid'";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../cartcus.php");
}


?>