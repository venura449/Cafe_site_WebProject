<?php
session_start();
require_once("dbconn.php");

$email = $_POST["email"];
$password = $_POST["password"];

// Check for user login
$Sql = "SELECT * FROM `user` WHERE email = ?";
$stmt = $conn->prepare($Sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if ($row['email'] == $email && password_verify($password, $row['pass'])) {
        $_SESSION['userId'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        header("Location: ../welcome.php");
        exit();
    } else {
        echo "Invalid email or password.";
    }
} else {
    // Check if the email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check if the email contains 'gallery.com'
        if (strpos($email, "gallery.com") !== false) {
            if (strpos($email, "staff@gallery.com") !== false) {
                // Check for staff login
                $sqlStaff = "SELECT * FROM `staff` WHERE `email` = ?";
                $stmtStaff = $conn->prepare($sqlStaff);
                $stmtStaff->bind_param("s", $email);
                $stmtStaff->execute();
                $resultStaff = $stmtStaff->get_result();
                if ($resultStaff->num_rows == 1) {
                    $rowStaff = $resultStaff->fetch_assoc();
                    if (password_verify($password, $rowStaff['pass']) OR $password == $rowStaff['pass']) {
                        $_SESSION['staffId'] = $rowStaff['staff_id'];
                        $_SESSION['staffUsername'] = $rowStaff['username'];
                        header("Location: ../staff.php");
                        exit();
                    } else {
                        echo "Invalid staff password.";
                    }
                } else {
                    echo "Staff account not found.";
                }
            } else {
                // Check for admin login
                $sqlAdmin = "SELECT * FROM `admin` WHERE `email` = ?";
                $stmtAdmin = $conn->prepare($sqlAdmin);
                $stmtAdmin->bind_param("s", $email);
                $stmtAdmin->execute();
                $resultAdmin = $stmtAdmin->get_result();
                if ($resultAdmin->num_rows == 1) {
                    $rowAdmin = $resultAdmin->fetch_assoc();
                    if (password_verify($password, $rowAdmin['pass']) OR $password=$rowAdmin['pass'] ) {
                        $_SESSION['adminId'] = $rowAdmin['admin_id'];
                        $_SESSION['adminUsername'] = $rowAdmin['username'];
                        header("Location: ../admin.php");
                        exit();
                    } else {
                        echo "Invalid admin password.";
                    }
                } else {
                    echo "Admin account not found.";
                }
            }
        } else {
            echo "The email is valid but does not contain the specified part.";
        }
    } else {
        echo "The email is not valid.";
    }
}
?>
