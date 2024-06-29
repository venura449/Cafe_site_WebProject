<?php
require_once "dbconn.php";

$key = $_GET['key'];

$sql = "DELETE FROM `cart` WHERE `Ord_id`= '$key'";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../cartcus.php");
}
?>
