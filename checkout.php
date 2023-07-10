<!doctype html>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php");
?>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/checkout.css">
 </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">PLATTERLY</a>
        <div class="d-flex">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i>&nbsp;</a>
              </li>
              <li class="nav-item">
                <?php
					        if(isset($_SESSION['user'])){
						        echo" <a class='nav-link active' href='customers/my_acc.php'><h4 style='color:yellow;text-decoration:underline;'>Hi! &nbsp;".$_SESSION['user'].'(My Account)'."</h4></a>";
					        }
					        else {
						        echo"<a class='nav-link' href='customers/login.php'>Login</a>";
					        }
				        ?>
				      </li>
              <li class="nav-item">
                <?php
					        if(isset($_SESSION['user'])){
						        echo" <a class='nav-link active' href='logout.php'>Logout</a>";
					        }
                ?>      
              </li>
              <li><a class='nav-link' href='regional.php'>Tiffin Vendors</a></li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
           </div>
          </div>
        </div>
      </nav>
	  

<h2 style="text-align:center">Checkout Form</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post">
                <?php

                if(isset($_SESSION['user'])){
                              
                  $c_user = $_SESSION['user'];
                              
                  $get_img = "select * from customers where C_user='$c_user'";
                              
                  $run_img = mysqli_query($con, $get_img);
                              
                  $row_img = mysqli_fetch_array($run_img);
                              
                  $name = $row_img['C_user'];
                  $mail = $row_img['C_email'];
                  $addr = $row_img['C_address'];
                  $dist = $row_img['C_district'];
                }


                  ?>
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> User Name</label>
            <input type="text" id="fname" name="username" value="<?php echo $name ?>" readonly="true">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $mail ?>" readonly="true">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" value="<?php echo $addr ?>" readonly="true">
            

            <div class="row">
              <div class="col-50">
                <label for="state">District</label>
                <input type="text" id="district" name="district" value="<?php echo $dist ?>" readonly="true">
              </div>
              
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
              <?php  echo"NOW()" ?>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Your Name" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
       
        <input type="submit" name="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
 
</div>

</body>
</html>
<?php
if(isset($_POST['submit'])){

  
		
		$name = $_POST['username'];
		$mail = $_POST['email'];
		$addr = $_POST['address'];
    $dist = $_POST['district'];
		$cno = $_POST['cardnumber'];
		$year = $_POST['expyear'];
		
    $insert_p = "insert into payment_det
		(User_Name,Email,Address,District,Card_no,Year,Payment_date) 
		values ('$name','$mail','$addr','$dist','$cno','$year',NOW())";
		$run_p = mysqli_query($con, $insert_p); 
    
    echo "<script>alert('Payment sucessful, Thanks!!!')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}