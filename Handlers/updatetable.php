<?php
require_once "dbconn.php";
$table = $_GET['value'];
$key = $_GET['key'];


$sql = "UPDATE `reservation` SET `Res_Table`='$table' WHERE `Res_id`='$key'";
$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../areservation.php");
}
?>
