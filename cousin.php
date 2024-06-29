<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gallery Café</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body { background-color:#fcfffc;
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
            background-image: url('pexels-chevanon-324028.jpg');
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
        <a class="navbar-brand" href="#">Type of Foods</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="menu1.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="cousin.html">Cousin types</a></li>
           
                
            </ul>
        </div>
    </nav>

    
    <div class="splash-screen">

        <div class="splash-overlay"></div>
        <div class="splash-text">
            <p>gallery@gmail.com    |   0112 220 2020</p>
        </div>
        <div class="splash-content">

           
            <h1>The Gallery Café</h1>
            <p1>AWAY &nbsp;&nbsp;&nbsp;&nbsp;FROM &nbsp;&nbsp;&nbsp;&nbsp;HOME</p1>
        </div>

    </div>
    
  
    <div>
    
        <div>
                    <!-- Cart section -->
    
                    <div class="nav container" style="left: 80rem; top:94px;position: absolute;">
                        <div class="cart-section">
                             <!-- Cart icon and count -->
                             <a href="cart.html">
                                 <i class='bx bx-shopping-bag' id='cart-icon'></i>
                                 <span class="iconCount">0</span>
                             </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
        <!-- Product items section -->
    
        <div class="shopProducts">
    
        
        <!-- Individual product items -->


      

        <div class="item">
            <img src="./images/spa.jpg" alt="item" class="itemImage">
            <h2>Spagetti</h2>
            <h3>per person</h3>
            <h3>RS.1500</h3>
            <div class="addToCartPrice">
                <button class="addToCart" onclick="itemsAddShoppingCart(`Spagetti`,1.50)">Add To Cart </button>
                
         
            </div>
        </div>

        <div class="item">
            <img src="./images/piz.jpg" alt="item" class="itemImage">
            <h2> cheesy pizza (M) </h2>
            <h3>RS.2850</h3>
            <div class="addToCartPrice">
                <button class="addToCart" onclick="itemsAddShoppingCart(`pizza`,12)">Add To Cart </button>
              
            </div>
        </div>
        <div class="item">
            <img src="./images/lasan.jpg" alt="item" class="itemImage">
            <h2>Lasagna (M) </h2>
            <h3> per person </h3> 
            <h3>Rs. 1700</h3>
            <div class="addToCartPrice">
                <button class="addToCart"  onclick="itemsAddShoppingCart(`Lasagna`,19)">Add To Cart </button>
              
            </div>
        </div>
        
        <div class="item">
            <img src="./images/ri.jpg" alt="item" class="itemImage">
            <h2> Risotto</h2>
            <h3> 1 person</h3>
            <h3> Rs.1700 </h3>
            <div class="addToCartPrice">
                <button class="addToCart"  onclick="itemsAddShoppingCart(`Risotto`,7.50)">Add To Cart </button>
                
            </div>
        </div>
        <div class="item">
            <img src="./images/hop.jpg" alt="item" class="itemImage">
            <h2>Egg Hopper</h2>
            <h3>Qnty - 15</h3>
            <h3>Rs.1000</h3>
            <div class="addToCartPrice">
                <button class="addToCart" onclick="itemsAddShoppingCart(`Aqua Purse`,8)">Add To Cart </button>
               
            </div>
        </div>
        
        <div class="item">
            <img src="./images/shopper1.jpg" alt="item" height="250px" class="itemImage">
            <h2>String Hoppers -10</h2>
            <h3>Qnty - 15 </h3> 
            <h3> Rs.550</h3> 
            <div class="addToCartPrice">
                <button class="addToCart" onclick="itemsAddShoppingCart(`Ocean Tee`,14)">Add To Cart </button>
                
            </div>
        </div>
        <div class="item">
            <img src="./images/rice.jpg" alt="item" class="itemImage">
            <h2>Rice & Curry </h2>
            <h3 >1 Person</h3>
            <h3 >Rs.850</h3>
            <div class="addToCartPrice">
                <button class="addToCart" onclick="itemsAddShoppingCart(`Eco Tag`,5)">Add To Cart </button>
                
            </div>
        </div>
        
        <div class="item">
            <img src="./images/roti.jpg" height="260px" alt="item" class="itemImage">
            <h2>Pol Roti</h2>
            <h3 >Qanty - 2 </h3>
            <h3 >Rs.300</h3>
            <div class="addToCartPrice">
                <button class="addToCart" onclick="itemsAddShoppingCart(`Summer Sandals`,12)">Add To Cart </button>
               
            </div>
        </div>

        <div class="item">
            <img src="./images/sichuan.jpg" height="260px" alt="item" class="itemImage">
            <h2>Sichuan</h2>
            <h3 >1 person</h3>
            <h3 >Rs.1750</h3>
            <div class="addToCartPrice">
                <button class="addToCart" onclick="itemsAddShoppingCart(`Summer Sandals`,12)">Add To Cart </button>
               
            </div>
        </div>

        <div class="item">
            <img src="./images/shandong.jpg" height="260px" alt="item" class="itemImage">
            <h2>shandong</h2>
            <h3> 1 PERSON</h3> 
            <h3 >Rs.1600</h3>
            <div class="addToCartPrice">
                <button class="addToCart" onclick="itemsAddShoppingCart(`Summer Sandals`,12)">Add To Cart </button>
                
                </h3>
            </div>

            



        </div>


            <div class="item">
                <img src="./images/huaiyang.jpg" height="260px" alt="item" class="itemImage">
                <h2>huaiyang</h2>
                <h3 >1 person</h3>
                <h3 >Rs.1550</h3>
                <div class="addToCartPrice">
                    <button class="addToCart" onclick="itemsAddShoppingCart(`Summer Sandals`,12)">Add To Cart </button>
               
                    
                    </h3>
                </div>

        </div>

        <div class="item">
            <img src="./images/chinarice.jpg" height="260px" alt="item" class="itemImage">
            <h2>Chinese Rice Hot</h2>
            <h3 >1 person</h3>
            <h3 >Rs.2200</h3>
            <div class="addToCartPrice">
                <button class="addToCart" onclick="itemsAddShoppingCart(`Summer Sandals`,12)">Add To Cart </button>
                
                </h3>
            </div>




        </div>



    </div> 
       
                <!-- Footer-->


    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="text-center p-3">
          <center><b><p>© 2024 The Gallery Café.All Rights Reserved.<p></b></center>  
        </div>
    </footer>

    <!-- Script for ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Link to shop.js script -->
    <script src="./JS/shop.js"></script>
    <!-- Link to NavAndFooter.js script -->
    <script src="./JS/NavAndFooter.js"></script>
</body>
</html>
