<?php
	
	@session_start();
	include("includes/db.php");
	
	if(isset($_GET['edit_acc']))
    {
		
		$v_mail = $_SESSION['email'];
		
		$get_vendor = "select * from vendors where V_email='$v_mail'";
		
		$run_vendor = mysqli_query($con, $get_vendor);
		
		$row_vendor = mysqli_fetch_array($run_vendor);
		
		$id = $row_vendor['V_id'];
		$name = $row_vendor['V_name'];
		$logo = $row_vendor['V_logo'];
		$email = $row_vendor['V_email'];
		$pass = $row_vendor['V_pass'];
		$addr = $row_vendor['V_addrs'];
		$dis = $row_vendor['V_distrt'];
        $reg = $row_vendor['V_regional'];
		$contact = $row_vendor['V_contact'];
	}
?>
<link rel="stylesheet" href="css/my_acc.css">
<form action="" method="post" enctype="multipart/form-data" class="edt-acc" style="margin-top:-40px; padding-left:190px;">	  
	<table width="750" cellspacing="12" cellpadding="5" style="text-align:center;"><br>
		<tr style="text-align:center;">
			<td colspan="4"><h2 style="text-align:center; margin-left:150px; padding-top:20px; padding-bottom:20px; font-size:40px; color:blue;">Edit your Account Details</h2></td>
		</tr>
		<tr>
			<td style="text-align:right; padding-bottom:15px;">Vendor Name : </td>
			<td><input type="text" name="V_Name" value="<?php echo $name;?>" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" size=25 /></td>
		</tr>
		
        <tr>
		<td style="text-align:right; padding-bottom:15px;">Region : </td>
		<td><select name="V_regional" style="padding-left:5px; margin-left:-100px; margin-bottom:15px;">
		    <option value="<?php echo $reg;?>"> <?php echo $reg;?> </option>
            <option> North Indian </option>
            <option> South Indian </option>
            <option> West Indian </option>
            </select>
        </td>
		</tr>

		<tr>
			<td style="text-align:right; padding-bottom:15px;">Vendor Logo : </td>
			<td> <img src="images/<?php echo $logo; ?>" style="margin-left:140px; margin-bottom:15px;" width="110" height="110"/> 
			<input type="file" name="V_logo" style="margin-bottom:15px;" value="<?php echo $logo; ?>"></td>
		</tr>
								
		<tr>
			<td style="text-align:right; padding-bottom:15px;">Vendor E-mail : </td>
			<td><input type="text" name="V_email" style="padding-left:5px; margin-left:-30px; margin-bottom:15px;" value="<?php echo $email;?>" readonly="true"/></td>
		</tr>
								
		<tr>
			<td style="text-align:right; padding-bottom:15px;">Vendor Password : </td>
			<td><input type="password" style="padding-left:5px; margin-left:-30px; margin-bottom:15px;" name="V_pass" value="<?php echo $pass; ?>" readonly="true"/></td>
		</tr>

		<tr>
			<td style="text-align:right; padding-bottom:15px;">Customer Address : </td>
			<td><input type="text" style="padding-left:5px; width:60%; margin-left:130px; margin-bottom:15px;" name="V_addrs" value="<?php echo $addr;?>"/></td>
		</tr>
		
		<tr>
		<td style="text-align:right; padding-bottom:15px;">District: </td>
		<td><select name="V_distrt" style="padding-left:5px; margin-left:130px; width:60%; margin-bottom:15px;">
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
            </select>
        </td>
		</tr>

		<tr>
			<td style="text-align:right; padding-bottom:15px;">Vendor Contact No.: </td>
			<td><input type="text" name="V_contact" style="padding-left:5px; margin-left:-30px; margin-bottom:15px;" value="<?php echo $contact;?>"/></td>
		</tr>
		<tr style="text-align:center;">
			<td colspan="6"><input type="submit" name="update" value="Update Account" style="height:55px; width:200px; margin-right:90px; margin-top:20px;	outline:none; border:none; background:yellow; font-size:20px; font-weight:600; border-radius:15px; cursor:pointer;"/></td>
		</tr>
		
	</table>
</form>

<?php

	if(isset($_POST['update'])) {
		
		$ip = getIp();

		$V_id = $id;
		$V_name = $_POST['V_Name'];
		$V_logo = $_FILES['V_logo']['name'];
		$V_logo_tmp = $_FILES ['V_logo']['tmp_name'];
		$V_email = $_POST['V_email'];
		$V_pass = $_POST['V_pass'];
		$V_addrs = $_POST['V_addrs'];
		$V_distrt = $_POST['V_distrt'];
		$V_contact = $_POST['V_contact'];
        $v_regional = $_POST['V_regional'];
		
		move_uploaded_file($V_logo_tmp,"images/$V_logo");
	
		if($_FILES['V_logo']['V_name']){
			$update_v = "UPDATE vendors SET V_name='$V_name',V_logo='$V_logo',V_addrs='$V_addrs',v_distrt='$V_distrt',V_contact='$V_contact', V_regional='$v_regional' where V_Id='$V_id'";
		}
		else {
		$update_v = "UPDATE vendors SET V_name='$V_name',V_addrs='$V_addrs',V_distrt='$V_distrt',V_contact='$V_contact' where V_Id='$V_id'";
		}
		$run_update = mysqli_query($con, $update_v);
		
		if($run_update) {
			echo "<script>alert('Your account successfully updated');</script>";
			echo "<script>window.open('my_acct.php','_self')</script>";
		}
	

		
	}

?>