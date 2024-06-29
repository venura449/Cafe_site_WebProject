

<?php

session_start();

if(isset($_SESSION['userId'])){
    $userId = $_SESSION['userId'];
    $username = $_SESSION['username'];
}
else{
    //header("Location:../login1.php");
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
            font-family: Arial, sans-serif;
        }

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

        .carousel-item img {
            max-height: 300px; /* Adjust the maximum height of the images */
            object-fit: cover; /* Maintain aspect ratio and cover entire slide */
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent black background for captions */
            color: #fff;
            padding: 20px;
        }

        .carousel-caption h5 {
            font-size: 2em;
            font-weight: bold;
        }

        .carousel-caption p {
            font-size: 1.2em;
        }

        .section-title {
            margin: 40px 0;
        }

        .card-title {
            font-size: 1.2em;
            font-weight: bold;
        }
        .event-img {
            max-width: 100%; 
            max-height: 200px; 
            height: auto; 
        }
        .name_user{
            margin-left:190px;
        }
        .card-img-top{
            height:200px;
            width:300px;
            object-fit: cover;
            margin:10px auto;
        }
        a{
            text-decoration: none;
            color:black;
        }

        
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><i id="ico" class='bx bxs-bowl-hot'></i>The Gallery Cafe`</a>
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

    <!-- Carousel -->
    <div id="carousel_Example_Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel_Example_Indicators" data-slide-to="0" class="active"></li>
            <li data-target="#carousel_Example_Indicators" data-slide-to="1"></li>
            <li data-target="#carousel_Example_Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/SLcu.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Elegant Ambiance</h5>
                    <p>The perfect place to dine and relax.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/SLcu.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Special Beverages</h5>
                    <p>Refreshing and delightful.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src ="images/SLcu2.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Delicious Meals</h5>
                    <p>Experience the taste of perfection.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    
    <div class="container">
        
        <div class="section-title">
            <h2>Types of Meals</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="images/chinese-food-lead.jpg" class="card-img-top" alt="Meal 1">
                    <div class="card-body">
                        <h5 class="card-title">Sri Lankan Cuisine</h5>
                        <p class="card-text">Authentic Sri Lankan dishes with rich flavors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="images/chi.jpg" class="card-img-top" alt="Meal 2">
                    <div class="card-body">
                        <h5 class="card-title">Chinese Cuisine</h5>
                        <p class="card-text">Delicious Chinese meals to satisfy your cravings.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="images/chi.jpg" class="card-img-top" alt="Meal 3">
                    <div class="card-body">
                        <h5 class="card-title">Italian Cuisine</h5>
                        <p class="card-text">Classic Italian dishes with a modern twist.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-title">
            <h2>Special Food and Beverages</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="images/cia.jpg" class ="card-img-top" alt="Special Food">
                    <div class="card-body">
                        <h5 class="card-title">Gourmet Delights</h5>
                        <p class="card-text">Indulge in our chef's special gourmet dishes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src= "images\07130355-rwhkg-darkside-approaching-asian-dream-blood-and-sweet-a-800-days-journey-1_cover_1800x1200.webp" class="card-img-top" alt="Special Beverage">
                    <div class="card-body">
                        <h5 class="card-title">Signature Cocktails</h5>
                        <p class="card-text">Enjoy our exclusive range of cocktails.</p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="section-title">
            <h2>Events and Promotions</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <img src="images\4-Tips-for-Creating-a-Good-Coffee-Shop-Culture-in-Your-Caf-Franchise.jpg" alt="Event">
                    <div class="card-body">
                        <h5 class="card-title">Upcoming Events</h5>
                        <p class="card-text">Join us for special events and promotions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="text-center p-3">
          <center><b>© 2024 The Gallery Café. All Rights Reserved.</b></center>  
        </div>
    </footer>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
