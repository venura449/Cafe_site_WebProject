<?php

require_once "dbconn.php";


session_start();

$userId = $_SESSION['userId'];


$Res_name = $_POST['Res_name'];
$Res_con = $_POST['Res_con'];
$Res_date = $_POST['Res_date'];
$Res_table = $_POST['Res_table'];
$Res_time = $_POST['Res_time'];

$SQL = "INSERT INTO `reservation` (Res_place_Date, Res_Per_name, Res_Contact, Res_Date, Res_Table, Res_Time,Res_user_id) VALUES (CURRENT_TIMESTAMP, '$Res_name', '$Res_con', '$Res_date', '$Res_table', '$Res_time','$userId')";

$result = mysqli_query($conn,$SQL);

if($result){
    echo '<script>alert("Reservation Added Succesfully ....")</script>';
    header("Location:../reservation.php");
    exit();
}
else{
    echo 'Rervation Failed';
}


?>