
<?php
require_once "Handlers/dbconn.php";

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
        }
        .data{
            display: flex;
            gap:8px;
            padding:20px;
            width:600px;
            margin:30px auto 30px auto;
            height:200px;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            background: #e0e0e0;
            box-shadow:  20px 20px 60px #929292,
            -20px -20px 60px #ffffff;
        }
        h2{
            text-align: center;
            margin-top: 30px;
        }

    </style>
</head>

<body>
     
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><i id="ico" class='bx bxs-bowl-hot'></i>The Galler Cafe'</a>
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

    <h2>....Following Events Are Waiting For You.....</h2>

    <?php

    $sql = "SELECT * FROM `event`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
    ?>

    <div class="data">
       <div>
            <img style="width:200px;height:120px;object-fit: cover;border-radius: 20px;" src = "Handlers/<?php echo $row['event_image'];?>">
       </div>

        <div>
            <div>
                <h5><?php echo $row['event_name'];?></h5>
                <p><?php echo $row['event_desc'];?></p>
                <h6><b>Starting From : <?php echo $row['event_start_date'];?> - <?php echo $row['event_end_date'];?></b></h6>
            </div>
        </div>
    </div>

<?php

    }
?>
    
   

  
    <div>
        
        <footer class="bg-light text-center text-lg-start mt-4">
            <div class="text-center p-3">
              <center><b><p>© 2024 The Gallery Café.All Rights Reserved.<p></b></center>  
            </div>
        </footer>
        
        
        
        
        
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>