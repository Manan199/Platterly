<?php
include("includes/db.php");

	if(isset($_GET['delete_c'])){
		
		$delete_id = $_GET['north_v'];
		
		$delete_pro = "delete from vendors where V_id='$delete_id'"; 
	
		$run_delete = mysqli_query($con, $delete_pro); 
	
		if($run_delete){
	
		echo "<script>alert('Vendor has been deleted from the records!')</script>";
		echo "<script>window.open('index.php?view_north','_self')</script>";
		}
	}



?> 