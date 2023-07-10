<?php
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php','_self')</script>";
}
else {

?>
<head>
<style type="text/css">
table{border: 2px solid black;}
th {border-bottom:2px solid;}
</style>
</head>
<table width="797"  cellpadding="8" style="text-align:center; background:#ffffff;">
	
	<tr style="text-align:center; margin-top:10px;">
		<td colspan="10" style="border-bottom:2px solid;"><h2>View All Customers</h2></td>
	</tr>
	
	<tr>
		<th>No.</th>
		<th>Name</th>
		<th>User</th>
		<th>Image</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
		include("includes/db.php");
		
		$i=0;
		
		$get_c = "select * from customers";
		
		$run_c = mysqli_query($con, $get_c);
		
		while($row_c=mysqli_fetch_array($run_c)){
			
			$id       = $row_c['C_Id'];
			$name     = $row_c['C_Name'];
			$user     = $row_c['C_user'];
			$image    = $row_c['C_Image'];
			$email    = $row_c['C_email'];
			$pass     = $row_c['C_pass'];
			$addr     = $row_c['C_address'];
			$dist     = $row_c['C_district'];
			$cont     = $row_c['C_contact'];
			$i++;
			
	?>
	
	<tr style="text-align:center;">
		<td><?php echo $i; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $user; ?></td>
		<td><img src="../customers/images/<?php echo $image; ?>" width="100" height="100"/></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $addr; ?></td>
		<td><?php echo $cont; ?></td>
		<td><a href="index.php?edit_cust=<?php echo $id;?>">Edit</a></td>
		<td><a href="delete_customers.php?delete_c=<?php echo $id;?>">Delete</a></td>
	</tr>
	<?php } ?> 
</table>
<?php } ?>