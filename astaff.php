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
    background-image: url('./images/pb.jpg');
    background-size: cover;
}
.container {
    max-width: 1200px;
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
        <a class="navbar-brand" href="#"><i id="ico" class='bx bxs-bowl-hot'></i>The Gallery Cafe'</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="admin.php">Admin Home</a></li>
                <li class="nav-item"><a class="nav-link" href="areservation.php">Reservation</a></li>
                <li class="nav-item"><a class="nav-link" href="aevent.php">Events & Promotions</a></li>
                <li class="nav-item"><a class="nav-link" href="astaff.php">Staff</a></li>
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

    
    
    
    <main>
            <p></p>
        <section class="search-bar">

    </section>

 

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Change</th>
                
            </tr>
        </thead>
        <tbody>
            <!-- Table rows with data (you can add dynamic content here) -->
            <tr>
                <td>1234</td>
                <td>5678</td>
                <td>John Doe</td>
                <td>123 Elm St</td>
                
                <td class="action-buttons">
                    <button class="cancel-btn">Edit</button>
                    <button class="success-btn">Delete</button>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
               
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              
            </tr>


            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
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


</body>
</html>