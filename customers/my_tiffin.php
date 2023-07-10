<?php
include("includes/db.php");
	
//getting customer id
	$c_user = $_SESSION['user'];
	
	$get_user = "select * from customers where C_user='$c_user'";
	
	$run_user = mysqli_query($con, $get_user);
	
	$row_user = mysqli_fetch_array($run_user);
		
	$user_id = $row_user['C_Id'];
	

?>
<p style="margin-top:30px;"><h2 style="font-size:28px;">Tiffin Details</h2></p>
<p style="margin-right:120px;">
<table width="850" text-align="center" style="text-align:center; margin-top:20px; margin-right:50px; margin-left:380px; padding:40px 40px; background-color:cyan; " >
	
	<tr text-align="center">
		<th>S No.</th>
		<th>Invoice No.</th>
		<th>Tiffin Name</th>
		<th>Spice Choice</th>
		<th>Tiffin Quantity</th>
		<th>Price</th>
		<th>Tax</th>
		<th>Packing Charges</th>
		<th>Total Amount</th>
		
		
	</tr>
	
	<?php
	
	$get_tiffin = "select * from bill_det where C_user='$c_user'";
	
	$run_tiffin = mysqli_query($con, $get_tiffin);
	
	$i=0;
	
	while($row_orders = mysqli_fetch_array($run_tiffin)) {
		
		$invoice = $row_orders['Invoice_No'];
		$c_user = $row_orders['C_user'];
		$v_name = $row_orders['V_name'];
		$s_choice = $row_orders['S_choice'];
		$qty = $row_orders['Qty'];
		$price = $row_orders['Price'];
		$tax = $row_orders['Tax'];
		$pack = $row_orders['Packing'];
		$gtot = $row_orders['G_total'];
		

		$i++;
		
		
			echo"
		<tr text-align='center'>
			<td>$i</td>
			<td>$invoice</td>
			<td>$v_name</td>
			<td>$s_choice</td>
			<td>$qty</td>
			<td>$price</td>
			<td>$tax</td>
			<td>$pack</td>
			<td>$gtot</td>
			
		</tr>";
	}
	?>
</table>
</p>