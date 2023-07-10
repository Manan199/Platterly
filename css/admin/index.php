<?php
session_start();

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php','_self')</script>";
}
else {

?>
<!DOCTYPE>
	
<html>
	<head>
		<title> Admin Panel!</title>
		<link rel="stylesheet" href="css/admin_panel.css" media="all" />	
	</head>
	
	<body>
		<div class="main-wrapper">
		
			<a href="index.php"><div id="header"></div></a>
			
			<div id="right">
				<h2 style="text-align:center; color:white;"> Manage Content </h2>
				
				<a href="index.php">Admin Home Page</a>
				<a href="index.php?view_north">View North Vendor(s)</a>
				<a href="index.php?view_south">View South Vendor(s)</a>
				<a href="index.php?view_west">View West Vendor(s)</a>
				<a href="index.php?view_customers">View Customer(s)</a>
				<a href="index.php?view_orders">View Order(s)</a>
				<a href="index.php?view_payments">View Payment(s)</a>
				<a href="logout.php">Admin Logout</a>
				
			</div>
			
			<div id="left">
			<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
			<?php
				
				if(isset($_GET['view_north'])){
					include("view_north.php");
				}
				if(isset($_GET['view_south'])){
					include("view_south.php");
				}
				if(isset($_GET['view_west'])){
					include("view_west.php");
				}
				if(isset($_GET['view_customers'])){
					include("view_customers.php");
				}
				if(isset($_GET['edit_north'])){
					include("edit_north.php");
				}
				if(isset($_GET['edit_south'])){
					include("edit_south.php");
				}
				if(isset($_GET['edit_west'])){
					include("edit_west.php");
				}
				if(isset($_GET['edit_cust'])){
					include("edit_cust.php");
				}
				if(isset($_GET['view_orders'])){
					include("view_orders.php");
				}
				if(isset($_GET['view_payments'])){
					include("view_payments.php");
				}
				
				?>	
				</div>
		
		
		</div>

		<!--div id="footer"> 

			<h2 style="text-align:center; padding-top:30px;"> &copy; 2020,Servicocity </h2>
		</div-->
	</body>
</html>	
<?php } ?>