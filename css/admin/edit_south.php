<?php
	
include("includes/db.php");
include("../functions/functions.php");
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {
	if(isset($_GET['edit_south'])){
		$edit_id = $_GET['edit_south'];
		
		$get_edit = "select * from vendors where V_id='$edit_id'";
		$run_edit = mysqli_query($con, $get_edit);
		$row_edit = mysqli_fetch_array($run_edit);
		
		$update_id = $row_edit['V_id'];
		
		$id = $row_edit['V_id'];
		$name = $row_edit['V_name'];
		$image = $row_edit['V_logo'];
		$email = $row_edit['V_email'];
		$addr = $row_edit['V_addrs'];
		$dist = $row_edit['V_distrt'];
		$cont = $row_edit['V_contact'];
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
					
                    <div class="product-label">Image</div>
                    <input type="file" name="image" class="inputs-response"/><img src="../tiffin_vendors/images/<?php echo $image; ?>" width="150" height="90"/> <br>
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
		$v_id = $id;
		$name = $_POST['cname'];
		$image = $_FILES['image']['name'];
		$image_tmp = $_FILES ['image']['tmp_name'];
		$email = $_POST['email'];
		$addr = $_POST['address'];
		$dis = $_POST['district'];
		$contact = $_POST['contact'];
		
		move_uploaded_file($image_tmp,"../tiffin_vendors/images/$image");
	
		if($_FILES['V_logo']['name']){
			$update_c = "UPDATE vendors SET V_name='$name',V_logo='$image',V_addrs='$addr',V_distrt='$dis',C_contact='$contact' where V_id='$id'";
		}
		else {
		$update_c = "UPDATE vendors SET V_name='$name',V_addrs='$addr',V_distrt='$dis',V_contact='$contact' where V_id='$id'";
		}
		$run_update = mysqli_query($con, $update_c);
		
		if($run_update) {
			echo "<script>alert('Your account successfully updated')</script>";
			echo "<script>window.open('index.php?view_south','_self')</script>";
		}
	}

?>
<?php } ?>