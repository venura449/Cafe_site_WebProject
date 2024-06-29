<?php

session_start();
require_once "dbconn.php";

$userId = $_SESSION['userId'];
$qty = 1;
$productid = $_GET['key'];

$sql1 = "SELECT * FROM `cart` WHERE `Ord_user_id`='$userId' AND `Ord_product_id`='$productid'";
$result1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($result1);
if($row['Ord_qty']==NULL){
    $qty = 1;
    $sql = "INSERT INTO `cart`(`Ord_product_id`, `Ord_user_id`, `Ord_qty`) VALUES ('$productid','$userId',' $qty')";
    $result = mysqli_query($conn,$sql);
}
else{
    $qty = $row['Ord_qty'] + 1;
    $sql2 = "UPDATE `cart` SET `Ord_qty` = '$qty'";
    $result2 = mysqli_query($conn,$sql2);
}


if($result2 OR $result){
    header("Location:../menu1.php#table");
}
else{
    echo '<script>alert("An Error Occurred !")</script>';
}
?>