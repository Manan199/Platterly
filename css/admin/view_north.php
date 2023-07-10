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
		<th>Logo</th>
        <th>Email</th>
		<th>Address</th>
		<th>District</th>
		<th>Contact</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
		include("includes/db.php");
		
		$i=0;
		
		$get_v = "select * from vendors where V_regional='North Indian'";
		
		$run_v = mysqli_query($con, $get_v);
		
		while($row_v=mysqli_fetch_array($run_v)){
			
			$id       = $row_v['V_id'];
			$name     = $row_v['V_name'];
			$logo     = $row_v['V_logo'];
			$email    = $row_v['V_email'];
			$pass     = $row_v['V_pass'];
			$addr     = $row_v['V_addrs'];
			$dist     = $row_v['V_distrt'];
			$cont     = $row_v['V_contact'];
			$i++;
			
	?>
	
	<tr style="text-align:center;">
		<td><?php echo $i; ?></td>
		<td><?php echo $name; ?></td>
		<td><img src="../tiffin_vendors/images/<?php echo $logo; ?>" width="100" height="100"/></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $addr; ?></td>
        <td><?php echo $dist; ?></td>
		<td><?php echo $cont; ?></td>
		<td><a href="index.php?edit_north=<?php echo $id;?>">Edit</a></td>
		<td><a href="delete_north.php?north_v=<?php echo $id;?>">Delete</a></td>
	</tr>
	<?php } ?> 
</table>
<?php } ?>