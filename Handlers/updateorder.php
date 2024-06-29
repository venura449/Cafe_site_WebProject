<?php
require_once "dbconn.php";
$key = $_GET['key'];


$sql = "UPDATE `orders` SET `Ord_state`='Completed' WHERE `Ord_id`='$key'";
$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../sorder.php");
}
?>
