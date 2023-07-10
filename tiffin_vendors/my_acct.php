<!DOCTYPE html>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php");
        
?>
<html>
<head>
    <title>Tiffin vendor - Home</title>
    <link rel="stylesheet" type="text/css" href="css/homestyle.css">
</head>
<body>
    <header class="header">
        <img src="images/logo_n.png" alt="Tiffin Delivery logo">
        <h1>Tiffin Delivery - Seller Account</h1>
    </header>
    <nav class="nav">
        <a href="my_acct.php">Home</a>
        <a href="my_acct.php?bfast">Add Breakfast</a>
        <a href="my_acct.php?Lunch">Add Lunch</a>
        <a href="my_acct.php?Dinner">Add Dinner</a>
        <a href="my_acct.php?view_order">View Orders</a>
        <a href="my_acct.php?vendorMenuPage">View Menu</a>
        <a href="my_acct.php?edit_acc">Edit Profile</a>
        <a href="logout.php">Logout</a>
    </nav>
    <main class="main">
        <h2>Welcome to your Seller account</h2>
        <p>In this section, you can manage your orders, view or give feedback(s), and make requests to the admin.</p>
        <div class="box-3">
        <ul>
            <li>
            <?php
              if(isset($_SESSION['email'])){
                $v_mail = $_SESSION['email'];
                $get_det = "select * from vendors where V_email='$v_mail'";
                            
                $run_det = mysqli_query($con, $get_det);
                $row_det = mysqli_fetch_array($run_det);
                $v_name = $row_det['V_name'];
                
                            
                echo"<h4 style='text-decoration:underline; font-size:20px color:red'>Welcome &ensp;".$v_name."</h4>";
              }
            ?>
            </li>
        </ul>
    <div>
        
        <?php
        if(isset($_GET['bfast'])){
            include("bfast.php");
        }
        if(isset($_GET['Lunch']))
        {
            include("Lunch.php");
        }
        if(isset($_GET['Dinner']))
        {
            include("Dinner.php");
        }
        if(isset($_GET['view_order'])){
            include("view_order.php");
        }
        if(isset($_GET['edit_acc'])){
            include("edit_acc.php");
        }
        if(isset($_GET['vendorMenuPage'])){
            include("vendorMenuPage.php");
        }
        if(isset($_GET['delete_account'])){
            include("delete_account.php");
        }
        ?>
        </div>
    </main>
    <footer>
        <p>Platterly Copyright © 2023 Product Listing</p>
    </footer>
</body>
</html>
