<?php
	
include("includes/db.php");
include("../functions/functions.php");
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {
	if(isset($_GET['edit_cust'])){
		$edit_id = $_GET['edit_cust'];
		
		$get_edit = "select * from customers where C_Id='$edit_id'";
		$run_edit = mysqli_query($con, $get_edit);
		$row_edit = mysqli_fetch_array($run_edit);
		
		$update_id = $row_edit['C_Id'];
		
		$id = $row_edit['C_Id'];
		$name = $row_edit['C_Name'];
		$user = $row_edit['C_user'];
		$image = $row_edit['C_Image'];
		$email = $row_edit['C_email'];
		$addr = $row_edit['C_address'];
		$dist = $row_edit['C_district'];
		$cont = $row_edit['C_contact'];
	}
?>

<!DOCTYPE>
<html>
<title>Document</title>
<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/insert.css">
</head>

<body>
  <div class="product-back">
  		<div class="product-form">

        <form action="#" method="post" enctype="multipart/form-data" class="product">
          <h1>EDIT DETAILS</h1>
               <fieldset>
                 <div class="product-box">
										
					<div class="product-label">
                        <h4>Name</h4>
                    </div>
                    <input type="text" name="cname" value="<?php echo $name; ?>" class="input-response" /><br><br>
					
					<div class="product-label">
						<h4>User</h4>
                    
                    <input type="text" name="user" value="<?php echo $user; ?>" class="input-response"/><br><br>
					</div>
                    <div class="product-label">Image</div>
                    <input type="file" name="image" class="inputs-response"/><img src="../customers/images/<?php echo $image; ?>" width="150" height="90"/> <br>
                     &emsp;
					 <div class="product-label">
                      <h4>Email</h4>
                        <input type="text" name="email" value="<?php echo $email; ?>" class="input-response" /><br><br>
                      </div> 
					  <div class="product-label">
                      <h4>Address</h4>
                        <input type="text" name="address" value="<?php echo $addr; ?>" class="input-response" /><br><br>
                      </div> 
					  <div class="product-label">
                      <h4>District</h4>
                        <select class="input-response" name="district">
						<option value="<?php echo $dist; ?>"> <?php echo $dist;?> </option>
						<option> Select your District </option>
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
						</select><br><br>
                      </div> 
					  <div class="product-label">
                      <h4>Contact</h4>
                        <input type="text" name="contact" value="<?php echo $cont; ?>" class="input-response" /><br><br>
                      </div> 
                     <input type="submit" name="update" value="Update" class="sub-btn">
                </div>
            </fieldset>
      </form>
	  </div>
</div>
</body>
</html>

<?php

	if(isset($_POST['update'])) {
		
		$ip = getIp();
		$c_id = $id;
		$c_name = $_POST['cname'];
		$c_user = $_POST['user'];
		$c_image = $_FILES['image']['name'];
		$c_image_tmp = $_FILES ['image']['tmp_name'];
		$c_email = $_POST['email'];
		$c_addr = $_POST['address'];
		$c_dis = $_POST['district'];
		$c_contact = $_POST['contact'];
		
		move_uploaded_file($c_image_tmp,"images/$c_image");
	
		if($_FILES['C_Image']['name']){
			$update_c = "UPDATE customers SET C_Name='$c_name',C_user='$c_user',C_Image='$c_image',C_address='$c_addr',C_district='$c_dis',C_contact='$c_contact' where C_Id='$c_id'";
		}
		else {
		$update_c = "UPDATE customers SET C_Name='$c_name',C_user='$c_user',C_address='$c_addr',C_district='$c_dis',C_contact='$c_contact' where C_Id='$c_id'";
		}
		$run_update = mysqli_query($con, $update_c);
		
		if($run_update) {
			echo "<script>alert('Your account successfully updated')</script>";
			echo "<script>window.open('index.php?view_customers','_self')</script>";
		}
	}

?>
<?php } ?>