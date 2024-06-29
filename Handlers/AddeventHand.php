<?php
session_start();
require_once("dbconn.php");

$eventname = $_POST['name'];
$eventDesc = $_POST['desc'];
$stdate = $_POST['start'];
$endDate = $_POST['end'];
$image = $_FILES['image'];


$target_dir = "../uploads/";
$target_file = $target_dir . basename($image["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


$check = getimagesize($image["tmp_name"]);
if($check === false) {
    die("File is not an image.");
}


if (file_exists($target_file)) {
    die("Sorry, file already exists.");
}


if ($image["size"] > 5000000) {
    die("Sorry, your file is too large.");
}


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
}


if (move_uploaded_file($image["tmp_name"], $target_file)) {

    $sql = "INSERT INTO `event` (event_start_date, event_end_date, event_name, event_desc, event_image)
            VALUES ('$stdate', '$endDate', '$eventname', '$eventDesc', '$target_file')";

    if (mysqli_query($conn, $sql)) {
        header("Location:../aevent.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Sorry, there was an error uploading your file.";
}

mysqli_close($conn);
?>
