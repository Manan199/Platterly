<?php
	
	@session_start();
	include("includes/db.php");
	
	if(isset($_GET['edit_acc'])){
		
		$user = $_SESSION['user'];
		
		$get_customer = "select * from customers where C_user='$user'";
		
		$run_customer = mysqli_query($con, $get_customer);
		
		$row_customer = mysqli_fetch_array($run_customer);
		
		$id = $row_customer['C_Id'];
		$name = $row_customer['C_Name'];
		$c_user = $row_customer['C_user'];
		$image = $row_customer['C_Image'];
		$email = $row_customer['C_email'];
		$pass = $row_customer['C_pass'];
		$addr = $row_customer['C_address'];
		$dis = $row_customer['C_district'];
		$contact = $row_customer['C_contact'];
	}
?>
<link rel="stylesheet" href="css/my_acc.css">
<form action="" method="post" enctype="multipart/form-data" class="edt-acc" style="margin-top:-40px;">	  
	<table width="750" cellspacing="12" cellpadding="5">
		<tr style="text-align:center;">
			<td colspan="4"><h2 style="text-align:center; margin-left:150px; padding-top:20px; padding-bottom:20px; font-size:40px; color:blue;">Edit your Account Details</h2></td>
		</tr>
		<tr>
			<td style="text-align:right; padding-bottom:15px;">Customer Name : </td>
			<td><input type="text" name="C_Name" value="<?php echo $name;?>" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" size=25 /></td>
		</tr>
				
		<tr>
			<td style="text-align:right; padding-bottom:15px;">Customer User Name : </td>
			<td><input type="text" name="C_user" value="<?php echo $c_user;?>" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" size=25 readonly="true"/></td>
		</tr>
		
		<tr>
			<td style="text-align:right; padding-bottom:15px;">Customer Image : </td>
			<td> <img src="images/<?php echo $image; ?>" style="margin-left:12px; margin-bottom:15px;" width="110" height="110"/> 
			<input type="file" name="C_Image" style="margin-bottom:15px;" value="<?php echo $image; ?>"></td>
		</tr>
								
		<tr>
			<td style="text-align:right; padding-bottom:15px;">Customer E-mail : </td>
			<td><input type="text" name="C_email" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" value="<?php echo $email;?>" readonly="true"/></td>
		</tr>
								
		<tr>
			<td style="text-align:right; padding-bottom:15px;">Customer Password : </td>
			<td><input type="password" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" name="C_pass" value="<?php echo $pass; ?>" readonly="true"/></td>
		</tr>

		<tr>
			<td style="text-align:right; padding-bottom:15px;">Customer Address : </td>
			<td><input type="text" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" name="C_address" value="<?php echo $addr;?>"/></td>
		</tr>
		
		<tr>
		<td style="text-align:right; padding-bottom:15px;">District: </td>
		<td><select name="C_district" style="padding-left:5px; margin-left:12px; margin-bottom:15px;">
		<option value="<?php echo $dis;?>"> <?php echo $dis;?> </option>
            <option> Central Delhi </option>
            <option> East Delhi </option>
            <option> New Delhi </option>
            <option> North Delhi </option>
            <option> North East Delhi </option>
            <option> North West Delhi </option>
            <option> Shahdra </option>
            <option> South Delhi </option>
            <option> South East Delhi </option>
            <option> South West Delhi </option>
            <option> West Delhi </option>
            </select></td>
		</tr>

		<tr>
			<td style="text-align:right; padding-bottom:15px;">Contact No.: </td>
			<td><input type="text" name="C_contact" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" value="<?php echo $contact;?>"/></td>
		</tr>
		<tr style="text-align:center;">
			<td colspan="6"><input type="submit" name="update" value="Update Account" style="height:55px; width:200px; margin-right:90px; margin-top:20px;	outline:none; border:none; background:yellow; font-size:20px; font-weight:600; border-radius:15px; cursor:pointer;"/></td>
		</tr>
		
	</table>
</form>

<?php

	if(isset($_POST['update'])) {
		
		$ip = getIp();

		$c_id = $id;
		$c_name = $_POST['C_Name'];
		$c_user = $_POST['C_user'];
		$c_image = $_FILES['C_Image']['name'];
		$c_image_tmp = $_FILES ['C_Image']['tmp_name'];
		$c_email = $_POST['C_email'];
		$c_pass = $_POST['C_pass'];
		$c_addr = $_POST['C_address'];
		$c_dis = $_POST['C_district'];
		$c_contact = $_POST['C_contact'];
		
		move_uploaded_file($c_image_tmp,"images/$c_image");
	
		if($_FILES['C_Image']['name']){
			$update_c = "UPDATE customers SET C_Name='$c_name',C_Image='$c_image',C_address='$c_addr',C_district='$c_dis',C_contact='$c_contact' where C_Id='$c_id'";
		}
		else {
		$update_c = "UPDATE customers SET C_Name='$c_name',C_address='$c_addr',C_district='$c_dis',C_contact='$c_contact' where C_Id='$c_id'";
		}
		$run_update = mysqli_query($con, $update_c);
		
		if($run_update) {
			echo "<script>alert('Your account successfully updated');</script>";
			echo "<script>window.open('my_acc.php','_self')</script>";
		}
	

		
	}

?>
