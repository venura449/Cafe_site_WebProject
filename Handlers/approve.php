<?php
require_once "dbconn.php";

session_start();
$id = $_GET['key'];

$sql = "UPDATE `reservation` SET `Res_states`='Approved' WHERE `Res_id`='$id'";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../areservation.php");
}
?>
