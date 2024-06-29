<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gallery Café</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    max-width: 800px;
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
    text-align: left;
}
th {
    background-color: #f2f2f2;
}
.action-buttons {
    display: flex;
    gap: 10px;
}
.cancel-btn, .success-btn {
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

<body>

    <div class="container">
    
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">THE GALLERY CAFE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="reservation.php">Reservations</a></li>
                <li class="nav-item"><a class="nav-link" href="order.php">Oders</a></li>
                <li class="nav-item"><a class="nav-link" href="signup.php">Login/Register</a></li>
            </ul>
        </div>
    </nav>

    
    <div class="splash-screen">
        <div class="splash-overlay"></div>
        <div class="splash-text">
            <p>amahiru1013@gmail.com    |   076 440 1744</p>
        </div>
        <div class="splash-content">
           
            
        </div>
    </div>
    
    <main>
            
        <section class="search-bar">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
    </section>

 

    <table>
        <thead>
            <tr>
                <th>Order id</th>
                <th>Product id</th>
                <th>Address</th>
                <th>States</th>
                <th>Order date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table rows with data (you can add dynamic content here) -->
            <tr>
                <td>1234</td>
                <td>5678</td>
                <td>John Doe</td>
                <td>123 Elm St</td>
                <td>Shipped</td>
                <td class="action-buttons">
                    <button class="cancel-btn">Cancel</button>
                    <button class="success-btn">Success</button>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="action-buttons">
                    <button class="cancel-btn">Cancel</button>
                    <button class="success-btn">Success</button>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="action-buttons">
                    <button class="cancel-btn">Cancel</button>
                    <button class="success-btn">Success</button>
                </td>
            </tr>


            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="action-buttons">
                    <button class="cancel-btn">Cancel</button>
                    <button class="success-btn">Success</button>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="action-buttons">
                    <button class="cancel-btn">Cancel</button>
                    <button class="success-btn">Success</button>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="action-buttons">
                    <button class="cancel-btn">Cancel</button>
                    <button class="success-btn">Success</button>
                </td>
            </tr>

            <!-- Add more rows as needed -->
        </tbody>
    </table>
</main>



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
