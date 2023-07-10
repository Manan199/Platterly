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
<table style="float:center; color:teal;"width="795"  cellpadding="8">
	
	<tr style="text-align:center; margin-top:10px;">
		<td colspan="8" style="border-bottom:2px solid;"><h2>View All Payments</h2></td>
	</tr>
	
	<tr style="background-color:cyan">
		<th>S_no</th>
		<th>Payment Id</th>
		<th>User</th>
		<th>Card No</th>
		<th>Payment Date</th>
	</tr>
	<?php
		include("includes/db.php");
		
		$i=0;
		
		$get_payments = "select * from payment_det";
		
		$run_payments = mysqli_query($con, $get_payments);
		
		while($row_payments=mysqli_fetch_array($run_payments)){
			
			$id            = $row_payments['Payment_id'];
			$user          = $row_payments['User_Name'];
			$cno   		   = $row_payments['Card_no'];
			$date          = $row_payments['Payment_date'];
			
			$i++;
	?>
	
	<tr style="text-align:center">
		<td><?php echo $i; ?></td>
		<td><?php echo $id; ?></td>
		<td><?php echo $user; ?></td>
		<td><?php echo $cno; ?></td>
		<td><?php echo $date; ?></td>
	</tr>
	<?php } ?> 
</table>
<?php } ?>