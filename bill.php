<!DOCTYPE html>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php");
if(isset($_GET['name'])){
  $vname = $_GET['name'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PLATTERLY</title>
</head>
<body>
    <!--Navbar Starts Here-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-size:21px;">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src=images/logo_n.png style="height:100px;" /></a>
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
      <!--Navbar Ends Here--->
	  
<div class="main-content">
<div class="cart-content">
<h1 style="text-align:center; font-size:60px;">Billing Details!!</h1>
					
        <form action="" method="post">
				<table id="cart_det">
					
					<tr  style="text-align:center">
						<th>Tiffin Vendor Name</th>
						<th>Spice Choice</th>
						<th>Quantity</th>
						<th>Price(per month)</th>
						
						<!--th <colspan="6">Total Price</th-->
					</tr>
          
          <?php
            if(isset($_POST['submit'])){
              
              if(isset($_POST['optradio1']))
                {
                  $choice = $_POST['optradio1'];
                   $price=2860;  
                   $tax=(($price*18)/100);
                   $pack=300;
                   $g_total=$price+$tax+$pack;
                }
                if(isset($_POST['optradio2']))
                {
                  $choice = $_POST['optradio2'];
                  $price=3640;
                  $tax=(($price*18)/100);
                   $pack=400;
                   $g_total=$price+$tax+$pack;
                }
              }
              ?>
          
          <tr style="text-align:center;">
          
						<td><input name="vname" value="<?php echo $vname ?>" style="border:none; margin-right:-120px;" readonly></td>
						<td><label class="radio-inline">
								<input type="radio" name="opt1" value="Spicy"> Spicy
								</label>
                <label class="radio-inline">
                  <input type="radio" name="opt1" value="Non-Spicy"> Non- Spicy
                </label></td>
						<td><input name="choice" value="<?php echo $choice;?>" style="border:none; margin-right:-200px;" readonly></td>
						<td><input name="price" value="<?php echo $price;?>" style="border:none; margin-right:-150px;" readonly></td>
					</tr>
					
					
				</table>
					</div>
			<div class="price-content">
				<table width="100%" style="margin-right:350px"class="total" >
					<tr style="text-align:center">
					<td>Tax(18%)</td>
					<td><input name="tax" value="<?php echo $tax;?>" style="border:none; margin-right:-70px;" readonly></td>
					</tr>
					<tr style="text-align:center">
					<td>Packing </td>
					<td><input name="pack" value="<?php echo $pack;?>" style="border:none; margin-right:-70px;" readonly></td>
					</tr>
					<tr style="text-align:center">
					<td> Grand Total</td>
					<td><input name="gtotal" value="<?php echo $g_total; ?>" style="border:none; margin-right:-70px;" readonly></td>
					</tr>
				
				</table>	
        
			</div>
      <div>
        <a href="terms.html" target="_blank" style="color:black; text-decoration:none;"><input type="button" value="Terms and Conditions" class="btn1" ></a> &nbsp;
        <input class="btn2" type="submit" name="submit" style="color:black;" value="Checkout"/>
      </div>  
			</div>
			
			 <!---------------------------Footer Starts------------------------------->
   <div class="footer">
    <!------------------ Start of content class ------------>
  
             <div class="footer-content">
                 <!--------- 3 Sections of the footer
  
             First section About ---------->
                 <div class="footer-section about">
                     <h1 class="logo-text" style="text-align: left">PLATTERLY</h1><br><br>
                     <p> <b>NEW DELHI, INDIA</b> </p>
  
                     <div class="contact">
                         <p> Phone: +91 999 XXX XXXX </p>
                         <p>Email: &nbsp; info@platerlly.com </p>
                     </div>
                     <div class="socials">
                         <a href="#"><i class= "fab fa-facebook"></i></a>
                         <a href="#"><i class= "fab fa-twitter"></i></a>
                         <a href="#"><i class= "fab fa-instagram"></i></a>
                         <a href="#"><i class= "fab fa-skype"></i></a>
                         <a href="#"><i class= "fab fa-youtube"></i></a>
                     </div>
                 </div>
  
                 <!---------Second Section Useful Links ------------->
  
                 <div class="footer-section links">
                     <h2> Quick Links </h2>
                     <br> </br>
                     <ul>
                         <a href="index.php">
                             <li>Home</li>
                         </a>
                         <a href="#">
                             <li>Login</li>
                         </a>
                         <a href="#">
                             <li>Regional Tiffins</li>
                         </a>
                         <a href="#">
                             <li>Tiffin Vendor Panel</li>
                         </a>
                     </ul>
                 </div>
  
                 <!--------- Third section  Subscribe us-------------->
                 <div class="footer-section subscibe">
                     <h2>New Users</h2> <br>
                     <p> Subscribe below using email-id </p>
                     <form action="subscribe.html" method="post">
                         <input type="email" name="email" class="text-input sub-input" placeholder="Your emaii-id">
                         <button type="button" class="btn-big">Subscribe</button>
  
                     </form>
                 </div>
             </div>
             <!---------- End of Content class -------------->
  
             <!-------------Bottom copyright information-------->
  
             <div class="footer-bottom">
                 &copy; PLATTERLY 2023 All Rights Reserved
             </div>
     </footer>
  
     <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i><i class="icofont-simple-up"></i></a>
  
     <!---------------------------Footer Ends----------------------->
	</body>
			
</html>
<?php
  
  
	if((isset($_POST['submit'])) &&(isset($_POST['opt1']))) {
		
		$ip = getIp();
		$invoice= mt_rand();
		$cuser = $_SESSION['user'];
		$vname = $_POST['vname'];
		$schoice = $_POST['opt1'];
    $qty = $_POST['choice'];
		$price = $_POST['price'];
		$tax = $_POST['tax'];
		$pack = $_POST['pack'];
    $gtot = $_POST['gtotal'];
      
    $insert_b = "insert into bill_det
		(Invoice_No,C_user,C_ip,V_name,S_choice,Qty,Price,Tax,Packing,G_total) 
		values ('$invoice','$cuser','$ip','$vname','$schoice','$qty','$price','$tax','$pack','$gtot')";
		
		$run_b = mysqli_query($con, $insert_b); 
		$status = 'Pending';
      echo "<script>alert('Proceed to Checkout, Thanks!')</script>";
	    echo "<script>window.open('checkout.php','_self')</script>";
          
	}

  else if((isset($_POST['submit'])) &&(isset($_POST['opt2']))) {
		
		$ip = getIp();
		$invoice= mt_rand();
		$cuser = $_SESSION['user'];
		$vname = $_POST['vname'];
		$schoice = $_POST['opt2'];
    $qty = $_POST['choice'];
		$price = $_POST['price'];
		$tax = $_POST['tax'];
		$pack = $_POST['pack'];
    $gtot = $_POST['gtotal'];
        
		$insert_b = "insert into bill_det
		(Invoice_No,C_user,C_ip,V_name,S_choice,Qty,Price,Tax,Packing,G_total) 
		values ('$invoice','$cuser','$ip','$vname','$schoice','$qty','$price','$tax','$pack','$gtot')";
		$run_b = mysqli_query($con, $insert_b); 
    
    echo "<script>alert('Proceed to Checkout, Thanks!')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
            
	}
?>
<!--
Invoice_No.,  '$invoice',
-->