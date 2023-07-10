<?php 
session_start();
include("../functions/functions.php");
include("../includes/db.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
	
    <form class="modal-content" method="post" action="#">
	<div class="imgcontainer">
            <img src="images/logo_n.png" alt="Avatar" class="avatar">
        </div>
		<div class="container">
		<h1 style="color:#D6A5DA; text-align:center">LOGIN - WELCOME TO PLATTERLY</h1>
            <label><b>User Name</b></label>
            <input type="text" placeholder="Enter your User Name" name="user" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter your Password" name="pass" required>

            <button type="submit" name="u_login" >LOGIN</button>
			
			<span><a href="signup.php">Don't have an Account? Sign up</a></span>
			
        </div>

    </form>

</body>

</html>

<?php
	
		if(isset($_POST['u_login'])) {
			
			$c_user = $_POST['user'];
			$c_pass = $_POST['pass'];
			
			$sel_c ="select * from customers where C_pass='$c_pass' AND C_user='$c_user'";
			
			$run_c = mysqli_query($con, $sel_c);
			$check_customer = mysqli_num_rows($run_c);
			
			
			if($check_customer==0) {
				
				echo "<script>alert('Password or email is incorrect, Please Try Again!')</script>";
				exit();
			}
			$ip = getIp();	
			$_SESSION['user']=$c_user;
				echo "<script>alert('You logged in successfully, Thanks! $c_user')</script>";
				echo "<script>window.open('../index.php','_self')</script>";
			
	// 		$ip = getIp();
	// 		$sel_cart = "select * from cart where ip_add='$ip'";
		
	// 		$run_cart = mysqli_query($con, $sel_cart); 
		
	// 		$check_cart = mysqli_num_rows($run_cart); 
		
	// 		if($check_customer>0 AND $check_cart==0){
				
	// 			$_SESSION['email']=$v_mail;
			// echo "<script>alert('You logged in successfully, Thanks!')</script>";
			// echo "<script>window.open('my_acct.php?','_self')</script>";
	// }
			
	// 		else {
				
	// 			$_SESSION['email']=$v_mail;
 			
	// 			echo "<script>alert('You logged in successfully, You can order now!')</script>";
	// 			echo "<script>window.open('../checkout.php','_self')</script>";
	// 		}
		}
	
	?>