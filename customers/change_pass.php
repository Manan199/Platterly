
<h2 style="text-align:center;padding-right:250px; padding-top:40px; font-family:Georgia; font-size:40px; color:Green;">Change Your Password</h2><br>
<form action="" method="post">
	<br>
	<table width="700">
	
	<tr>
	<td style="text-align:right; padding-bottom:15px;"><b>Enter Current Password:</b></td>
	<td><input type="password" style="margin-left:25px; margin-bottom:15px;" name="current_pass" required/></td>
	</tr>
	
	<tr>
	<td style="text-align:right; padding-bottom:15px;"><b>Enter New Password:</b></td>
	<td><input type="password" style="margin-left:25px; margin-bottom:15px;" name="new_pass" required/></td>
	</tr>
	
	<tr>
	<td style="text-align:right; padding-bottom:15px;"><b>Re-enter New Password again:</b></td>
	<td><input type="password" style="margin-left:25px; margin-bottom:15px;" name="new_pass_again" required/></td>
	</tr>
	
	<tr>
	<td colspan="8"><input type="submit" name="change_pass" value="Change Password" style="height:55px; width:200px; margin-top:20px; margin-left:280px; outline:none; border:none; background:black; color:white; font-size:20px; font-weight:600; border-radius:15px; cursor:pointer; box-shadow: 0px 5px 10px white;"/></td>
	</tr>
	
	</table>
	
</form>

<?php
include("includes/db.php");


	if(isset($_POST['change_pass'])) {
		
		$user = $_SESSION['user'];
		$current_pass = $_POST['current_pass'];
		$new_pass = $_POST['new_pass'];
		$new_again = $_POST['new_pass_again'];
		
		$sel_pass = "select* from customers where C_pass='$current_pass' AND c_user='$user'";
		
		$run_pass = mysqli_query($con, $sel_pass);
		
		$check_pass = mysqli_num_rows($run_pass);
		
		if($check_pass==0) {
			echo "<script>alert('Your Current Password is wrong!')</script>";
			exit();
		}
		
		
		
		if($new_pass!=$new_again){
			echo "<script>alert('New Password do not match!')</script>";
			exit();
		}
		else{
			$update_pass = "update customers set C_pass='$new_pass' where C_user='$user'";
			
			$run_pass = mysqli_query($con, $update_pass);
			
			echo"<script>alert('Your password was updated succesfully!')</script>";
			echo"<script>window.open('logout.php','_self')</script>";
		}
	}





?>