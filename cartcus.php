<?php
require_once "Handlers/dbconn.php";
$sum = 0;
session_start();
$userid = $_SESSION['userId'];
?>

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
        .success-btn1,.cancel-btn1{
            margin:15px;
        }
        .cancel-btn,.success-btn1,.cancel-btn1,.update_btn{
            padding: 5px 10px;
            background-color: #ff6347;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline:none;
        }
        .success-btn1 {
            background-color: #32cd32;
        }
        .cancel-btn,.cancel-btn1{
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
        h3{
            text-align: center;
            font-weight: normal;
            margin:12px 0;
        }


    </style>
</head>
<?php

$sql ="SELECT * FROM `cart` as c INNER JOIN `products` as p
        ON c.Ord_product_id = p.product_id";
$result = mysqli_query($conn,$sql);

?>
<body>

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Reservation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="event.php">Events & Promo</a></li>
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
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Quantity</th>
                <th>Product Origin</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>


                <tr>
                    <td><?php echo $row['Ord_id']?></td>
                    <td><?php echo $row['Product_name']?></td>
                    <td><?php echo $row['Product_Price']?></td>
                    <td><?php echo $row['Ord_qty']?></td>
                    <td><?php echo $row['Product_Origin']?></td>
                    <?php
                    $sum += $row['Ord_qty'] * $row['Product_Price']
                    ?>


                    <td class="action-buttons">

                        <button class="update_btn" onclick="updatehandle(<?php echo $row['Ord_id']?>)">Update</button>
                        <button class="cancel-btn" onclick="removehandle(<?php echo $row['Ord_id']?>)">Remove</button>
                    </td>
                </tr>


                <?php
            }
            ?>
            </tbody>
        </table>
    </main>
    <div>
        <div>
            <h3>Total Of the Cart : Rs <b><?php echo $sum?></b> </h3>
            <button class="success-btn1" onclick="window.location.href='Handlers/carttoorder.php?key=<?php echo $userid ?>'">Place Orders</button>
            <button class="cancel-btn1" onclick="window.location.href = 'Handlers/delcart.php?key=key=<?php echo $userid ?>'">Empty Cart</button>
        </div>
    </div>


    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="text-center p-3">
            <center><b><p>© 2024 The Gallery Café.All Rights Reserved.<p></b></center>
        </div>
    </footer>
    <script>
        function updatehandle(val){
            var update = prompt("Enter Quantity : ");
            window.location.href = "Handlers/updateQty.php?key="+ val+"&count="+update;
        }
        function removehandle(val){
            var confirm_st = confirm("Do You Want to remove this item :");
            if(confirm_st){
                window.location.href = "Handlers/delcartitem.php?key="+ val;
            }
            else{
                window.location.href = "#";
            }
        }
    </script>

</body>
</html>


