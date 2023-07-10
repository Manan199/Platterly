<!DOCTYPE html>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/my_acc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PLATTERLY</title>
</head>
<body>
    <!--Navbar Starts Here-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">PLATTERLY</a>
        <div class="d-flex">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php"><i class="fas fa-home"></i>&nbsp;</a>
              </li>
              <li class="nav-item">
                <?php
					        if(isset($_SESSION['user'])){
						        echo" <a class='nav-link active' href='my_acc.php'><h4 style='color:yellow;text-decoration:underline;'>Hi! &nbsp;".$_SESSION['user'].'(My Account)'."</h4></a>";
					        }
					        else {
						        echo"<a class='nav-link' href='login.php'>Login</a>";
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
              <li><a class='nav-link' href='../regional.php'>Tiffin Vendors</a></li>
              <li class="nav-item">
                <a class="nav-link" href="../about.html">About Us</a>
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

    <!----- User ------>
    <div class="page-wrapper">
      <div class="content clearfix">
       <div class="user-bg">
       <div class="box-2">
            <div><h2 style="background:black; color:white; height:60px; padding:5px 38px;">My Account</h2></div>
            <ul id="account_det">
                <?php
					if(isset($_SESSION['user'])){
							
                    $c_user = $_SESSION['user'];
                                
                    $get_img = "select * from customers where C_user='$c_user'";
                                
                    $run_img = mysqli_query($con, $get_img);
                                
                    $row_img = mysqli_fetch_array($run_img);
                                
                    $c_image = $row_img['C_Image'];
                                    
                    $c_name = $row_img['C_Name']; 
                                
                    echo "<img src='images/$c_image' width='150' height='150'alt='User Image'/>";

			        }
		        ?>
            <li><a href="my_acc.php">My Account</a></li>
            <li><a href="my_acc.php?my_tiffin">My Tiffin</a></li>
            <li><a href="my_acc.php?edit_acc">Edit Details</a></li>
            <li><a href="my_acc.php?change_pass">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        
        <div class="box-3">
        
            <ul>
                <li>
                <?php
                  if(isset($_SESSION['user'])){
                    $c_user = $_SESSION['user'];
                                
                    $get_det = "select * from customers where C_user='$c_user'";
                                
                    $run_det = mysqli_query($con, $get_det);
                                
                    $row_det = mysqli_fetch_array($run_det);
                                
                    $c_name = $row_det['C_Name']; 
                                
                    echo" <a class='nav-link' href='#'><h2 style='text-decoration:underline;'>Welcome &ensp;".$c_name."</h2></a>
                    <h5>In this section, you can view your orders, update details or credentials.</h5>

                    ";

                  }
                ?>
                </li>
            </ul>
        
            
            <?php
            if(isset($_GET['my_tiffin'])){
                include("my_tiffin.php");
            }
            if(isset($_GET['edit_acc'])){
                include("edit_acc.php");
            }
            if(isset($_GET['change_pass'])){
                include("change_pass.php");
            }
            if(isset($_GET['delete_account'])){
                include("delete_account.php");
            }
            ?>
            
        </div>

        </div>
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
