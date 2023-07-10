<?php
include("includes/db.php");

	if(isset($_GET['delete_c'])){
		
		$delete_id = $_GET['delete_c'];
		
		$delete_pro = "delete from customers where C_Id='$delete_id'"; 
	
		$run_delete = mysqli_query($con, $delete_pro); 
	
		if($run_delete){
	
		echo "<script>alert('Customer has been deleted from the records!')</script>";
		echo "<script>window.open('index.php?view_customers','_self')</script>";
		}
	}



?> 