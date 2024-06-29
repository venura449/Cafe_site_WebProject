<?php
session_start();
if(!isset($_SESSION['userId'])){
    header("Location:login1.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gallery Café</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>

body {
    background-image: url(images/ama1.jpg);
    background-size: cover;
}

#reservation-box {
    position: relative;
    margin: 5% auto;
    width: 600px;
    height: 400px;
    background: #ffffff;
    border-radius: 2px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    opacity: 80%;
}
.reserv-btn {
            display: block;
            width: 200px;
            background-color: #ffc107;
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 10px;
        }


.leftt {
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;
}

h1 {
    margin: 0 0 20px 0;
    font-weight: 300;
    font-size: 28px;
    color: #129d2e;
}

input[type="text"] {
    display: block;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 220px;
    height: 32px;
    border: none;
    border-bottom: 1px solid #09752d;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
}

.Reserve_btn{
    margin-top: 10px;
    padding:5px;
    margin-bottom: 10px;
    width: 200px;
    height: 32px;
    background: #16a085;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.1s ease;
    cursor: pointer;
}
.Reserve_btn:hover{
    transform: scale(1.1);
    transition: 0.25s ease-in-out;
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
    .footer{
        width:1200px;
        margin:0 100px 0 -350px;
        text-align: center;

    }
    .res_img{
        height:200px;
        width:300px;
        position: fixed;
        top:43%;
        left:50%;
    }


    </style>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><i id="ico" class='bx bxs-bowl-hot'></i>The Gallery Cafe'</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="menu1.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="reservation.php">Reservations</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="customer.php">My Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

                <?php
                if(isset($_SESSION['username'])){
                    echo '<a class="nav-link" href="Handlers/logout.php"> <li class="nav-item"> LogOut</li></a>';
                }
                else{
                    echo '<a class="nav-link" href="login1.php"><li class="nav-item"> Login/Register</li></a>';
                }


                ?>
        </div>
    </nav>


    <div class="splash-screen">
        <div class="splash-overlay"></div>
        <div class="splash-text">
        </div>
        <div class="splash-content">


        </div>
    </div>

    <div id="reservation-box">
        <div class="leftt">
            <h1><b>Reservation</b></h1>
            <form action="Handlers/ReserveHandler.php" method="post">
                <input type="text" name="Res_name" placeholder="Name" />
                <input type="text" name="Res_con" placeholder="Contact number" />
                <label>Select Date : </label><input type="Date" name="Res_date" placeholder="Date" />
                <br><br>
                <label>Table Selection : </label><select name="Res_table" id="table">
                    <option value="table 1"> Table 01</option>
                    <option value="table 2"> Table 02</option>
                    <option value="table 3"> Table 03</option>

                </select>
                <br>
                <label for="time">Time Ranges : </label>
                <select name="Res_time" id="time">
                    <option value="10.00 - 11.00"> 10.00 - 11.00</option>
                    <option value="1.00 - 2.00"> 1.00 - 2.00</option>
                    <option value="4.00 - 5.00"> 4.00 - 5.00</option>

                </select>
                <button type="submit" class="Reserve_btn" value="submit" >Make a Reservation</button>
            </form>

            <img src="images/res.jpg" class="res_img">






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Foot-->


    <footer class="footer ">
        <div class="text-center">
          <center><b><p>© 2024 The Gallery Café.All Rights Reserved.<p></b></center>
        </div>
    </footer>

</body>
</html>