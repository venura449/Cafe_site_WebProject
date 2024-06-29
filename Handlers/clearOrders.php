<?php
$userid = $_GET['key'];
require_once "dbconn.php";

$sql = "DELETE FROM `orders` WHERE `Ord_user_id`='$userid' ";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../order.php");
}
?>
