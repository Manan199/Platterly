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
	
	<tr style="margin-top:10px; float:center;">
		<td colspan="8" style="border-bottom:2px solid; text-align:center;"><h2>View All Orders</h2></td>
	</tr>
	
	<tr style="float:center; background-color:cyan;">
		<th>S No.</th>
		<th>Invoice No</th>
		<th>Customer User</th>
		<th>Tiffin Vendor</th>
		<th>Spice Choice</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>GST(18%)</th>
		<th>Packing Charges</th>
		<th>Grand Total</th>
	</tr>
	<?php
		include("includes/db.php");
		
		$i=0;
		
		$get_order = "select * from bill_det";
		
		$run_order = mysqli_query($con, $get_order);
		
		while($row_order=mysqli_fetch_array($run_order)){
			
			$invoice  = $row_order['Invoice_No'];
			$user   = $row_order['C_user'];
			$vname   = $row_order['V_name'];
			$choice    = $row_order['S_choice'];
			$qty    = $row_order['Qty'];
			$price    = $row_order['Price'];
			$gst    = $row_order['Tax'];
			$pack    = $row_order['Packing'];
			$g_tot    = $row_order['G_total'];
			
			$i++;
	?>
	
	<tr style="text-align:center">
		<td><?php echo $i; ?></td>
		<td><?php echo $invoice; ?></td>
		<td><?php echo $user;?></td>
		<td><?php echo $vname;?></td>
		<td><?php echo $choice;?></td>
		<td><?php echo $qty; ?></td>
		<td><?php echo $price; ?></td>
		<td><?php echo $gst; ?></td>
		<td><?php echo $pack; ?></td>
		<td><?php echo $g_tot; ?></td>
	</tr>
	<?php } ?> 
</table>
<?php } ?>