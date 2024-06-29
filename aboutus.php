
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


/* page main  image and details styles*/


.about-page {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 20px;
        }

        .left-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 20px;
        }

        .main-image {
            width: 300px; 
            height: auto;
            margin-bottom: 20px;
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

            </ul>
        </div>
    </nav>

    
    <div class="splash-screen">
        <div class="splash-overlay"></div>
        <div class="splash-text">
        </div>
        <div class="splash-content">
           
            <h1>About Us</h1>
            <p1>AWAY &nbsp;&nbsp;&nbsp;&nbsp;FROM &nbsp;&nbsp;&nbsp;&nbsp;HOME</p1>
        </div>
    </div>
    

  
    <div>
      
 <div>


    <div class="container">
        <div class="about-page">
            <div class="left-column">
                <img src="images/cc3e6f6a18a69fc90aa3f9d21dc4763b.jpg" alt="Main Image" class="main-image">
             
            </div>
            <div class="about-list">
                <h3>Our Story</h3>
              
<P>Welcome to Gallery cafe, Sri Lanka’s largest cafe chain, where excellence in burgers and exceptional 
    customer service have been our pillars for the past 21 years. 
    we have become synonymous with quality and a go-to destination for enthusiasts across the nation.
    At Gallery, we take pride in bringing the authentic taste of Italian ,Chinese ,indidan foods to Sri Lanka. 
    We believe that exceptional customer service is the key to creating memorable moments for our guests. 
    From the moment you walk through our doors, our friendly and attentive staff will greet you with warm smiles
     and assist you in choosing the perfect beverage to suit your taste. We prioritize your comfort and strive to create a welcoming and cozy atmosphere where you can relax, socialize, or find solace in your own thoughts.
    Join us at Gallery Cafe, and let us take you on a sensory 
                      
</P>
                <ul>
                    <li>50 vehicle parking availability</li>
                    <li>availability of upstair facilities celebrating birthday parties,anniversary parties or any other
                    speacial events.
                    </li>
                    <li>Full air condition availability</li>
                    <li>outdoor play area with swmming pool</li>
                    <li>1000 guests dining availability</li>
                    <li>special discounts up to 50% for members with membership card</li>                                   
                </ul>
            </div>


                <footer class="bg-light text-center text-lg-start mt-4">
                    <div class="text-center p-3">
                      <center><b><p>© 2024 The Gallery Café.All Rights Reserved.<p></b></center>  
                    </div>
                </footer>

                
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                </body>
                </html