<?php
require_once "dbconn.php";
$userid = $_GET['key'];
$sql = "DELETE FROM `cart` WHERE `Ord_user_id`=$userid";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../cartcus.php");
}
?>