<?php
session_start();
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
            font-family: Arial, sans-serif;
            margin: 0; 
            padding: 0;
        }

        .navbar {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            z-index: 1000; 
            position: relative; 
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
        }.splash-screen {
            position: relative;
            height: 60vh;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            overflow: hidden;
            background-image: url('images/pexels-chevanon-324028.jpg');
            background-size: cover;
            background-position: center;
            margin-bottom: 30px;
        }

        .splash-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1; 
        }

        .splash-content {
            position: relative;
            z-index: 2; 
        }

        .splash-content h1 {
            font-size: 5em;
            font-family: 'Rastanty Cortez', serif;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
            margin-bottom: 10px;
        }

        
        .splash-content p1 {
            font-size: 0.5em;
            font-family: 'Papyrus', sans-serif;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.6);
        }

        .splash-text {
            position: absolute;
            top: 10px;
            left: 20px;
            font-size: 1em;
            font-family: 'Arial', sans-serif;
            z-index: 3; 
        }
    </style>
</head>

<body>

    
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><i id="ico" class='bx bxs-bowl-hot'></i>The Gallery Café</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="admin.php">Admin Home</a></li>
                <li class="nav-item"><a class="nav-link" href="areservation.php">Reservation</a></li>
                <li class="nav-item"><a class="nav-link" href="aevent.php">Events & Promotions</a></li>
                <li class="nav-item"><a class="nav-link" href="aproduct.php">Products</a></li>
                <?php
                if(isset($_SESSION['adminId'])){
                    echo '<a class="nav-link" href="Handlers/logout.php"> <li class="nav-item"> LogOut</li></a>';
                }
                else{
                    echo '<a class="nav-link" href="login1.php"><li class="nav-item"> Login/Register</li></a>';
                }


                ?>
            </ul>
        </div>
    </nav>

    
    <div class="splash-screen">
        <div class="splash-overlay"></div>
        <div class="splash-text">
        </div>
        <div class="splash-content">
           
            <h1>ADMIN DASHBOARD</h1>
            <p1>AWAY &nbsp;&nbsp;&nbsp;&nbsp;FROM &nbsp;&nbsp;&nbsp;&nbsp;HOME</p1>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>