<?php
require_once "dbconn.php";
$eventid = $_GET['key'];
$sql = "DELETE FROM `event` WHERE `event_id`=$eventid";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location:../aevent.php");
}
?>
