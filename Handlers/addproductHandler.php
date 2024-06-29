<?php
session_start();
require_once("dbconn.php");

$productname = $_POST['name'];
$productprice = $_POST['price'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$type = $_POST['type'];
$origin = $_POST['origin'];
$image = $_FILES['image'];


$target_dir = "../uploads/product/";
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

    $sql = "INSERT INTO `products`(`Product_name`, `Product_Price`, `Product_Qty`, `Product_Origin`, `Product_Type`, `Product_Imge`) VALUES ('$productname','$price','$qty','$origin','$type','$target_file')";

    if (mysqli_query($conn, $sql)) {
        header("Location:../aproduct.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Sorry, there was an error uploading your file.";
}

mysqli_close($conn);
?>
