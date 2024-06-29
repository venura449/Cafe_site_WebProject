<?php
require_once "dbconn.php";
$userid = $_GET['key'];
$sql = "DELETE FROM `reservation` WHERE `Res_id`=$userid";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../areservation.php");
}
?>