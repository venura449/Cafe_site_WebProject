<?php

//requesting data base conncetion
require_once('dbconn.php');
session_start();




if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    // Get data from post request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hashedpass = password_hash($password,PASSWORD_BCRYPT);


        // Check if user already exists
        $check_username = "SELECT *  FROM `user` WHERE `username` = '$username'  
                                    OR `email`='$email'";
        $check = $conn->query($check_username);

        // If user already exists, show error message
        if ($check->num_rows > 0) {
            header("../signup.php");
            exit();
        }

        //writing to Database
        else {
            $sql = "INSERT INTO `user`( `username`, `email`, `pass`) VALUES ('$username','$email','$hashedpass')";
            $result = $conn->query($sql);

            //successfull messsage
            if ($result == TRUE) {
                echo "Register successful!";
                header("Location:../login1.php");
                exit;
            } else {

                header("Location: ../signup.php");
                exit();
            }
        }
    }
}
?>c