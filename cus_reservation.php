<?php
require_once "Handlers/dbconn.php";


session_start();

$userId = $_SESSION['userId'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gallery Café</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'><i id="ico" class='bx bxs-bowl-hot'></i>
    <style>

        body {
            background-image: url('./images/pb.jpg');
            background-size: cover;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        /* navigation bar*/
        .navbar {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);

        }


        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.8em;
            font-weight: bold;
            color: #333;
        }

        .navbar-nav .nav-link {
            color: #333;
            transition: color 0.3s, background-color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #fff;
            background-color: #ffc107;
            border-radius: 5px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .cancel-btn, .success-btn ,.update_btn{
            padding: 5px 10px;
            background-color: #ff6347;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .success-btn {
            background-color: #32cd32;
        }
        .cancel-btn{
            background-color: red;
        }
        .update_btn{
            background-color: #2196F3;
        }


        /* search box*/
        .topnav input[type="text"] {
            width: 200px; /* Increase or decrease as needed */
            padding: 6px;
            border: none;
            margin-top: 8px;
            margin-right: 16px;
            font-size: 17px;
            background-color: #f9f9f9; /* Light gray background */
            border-radius: 5px;
        }
        .topnav button[type="submit"] {
            background-color: #2196F3; /* Blue button color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }


    </style>
</head>
<?php

$sql ="SELECT * FROM `reservation` WHERE `Res_user_id`='$userId'";
$result = mysqli_query($conn,$sql);

?>
<body>

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><i id="ico" class='bx bxs-bowl-hot'></i>The Gallery Cafe'</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="promotion.php">Events & Promo</a></li>
                <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
                <li class="nav-item"><a class="nav-link" href="cus_reservation.php">Reservations</a></li>
                <li class="nav-item"><a class="nav-link" href="cartcus.php">My Cart</a></li>
                <li class="nav-item"><a class="nav-link" href="order.php">My Orders</a></li>
            </ul>
        </div>
    </nav>



    <main>
        <table class="table01">
            <thead>
            <tr>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Date</th>
                <th>Time Ranges</th>
                <th>Reservation Venue</th>
                <th>Reservation State</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>


                <tr>
                    <td><?php echo $row['Res_Per_name']?></td>
                    <td><?php echo $row['Res_Contact']?></td>
                    <td><?php echo $row['Res_Date']?></td>
                    <td><?php echo $row['Res_Time']?></td>
                    <td><?php echo $row['Res_Table']?></td>
                    <td><?php if($row['Res_states']==NULL){
                            echo "Pending...";
                        }
                        else{
                            echo "Approved";
                        }


                        ?></td>



                    <td class="action-buttons">

                        <button class="update_btn" onclick="">Update</button>
                        <button class="cancel-btn" onclick="">Cancel</button>
                    </td>
                </tr>


                <?php
            }
            ?>
            </tbody>
        </table>

    </main>



    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="text-center p-3">
            <center><b><p>© 2024 The Gallery Café.All Rights Reserved.<p></b></center>
        </div>
    </footer>

</body>
</html>


