<!DOCTYPE html>
<?php 
include("functions/functions.php");
include("includes/db.php");
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>

    <form action="#" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>Tiffin Vendors Registration</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="name"><b>Name</b></label><br>
            <input type="text" placeholder="Enter Name" name="name" id="name" required>

            <label for="image"><b>Logo</b></label><br><br>
            <input type="file" name="image" id="image-upload"><br><br>
            <!--div id="logoContainer" name="VendorLogo"></div>
                    <br>
                    <input type="button" value="CreateLogo" onclick="submitForm()">
                    <br-->

            <div class="form-group">
                    <p><b>Please select regional cuisine : *</b></p>
                    <input type="radio" id="NorthIndian" name="type" value="North Indian">
                    <label for="NorthIndian">North Indian</label><br>
                    <input type="radio" id="SouthIndian" name="type" value="South Indian">
                    <label for="SouthIndian">South Indian</label><br>
                    <input type="radio" id="WestIndian" name="type" value="West Indian">
                    <label for="WestIndian">West Indian</label><br>
                    <br>
            </div>

            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="address"><b>Address</b></label><br>
            <input type="text" placeholder="Enter Address" name="address" id="address" required>
            
            <label for="district"><b>District</b></label><br><br>
            <select class="sel-loc" name="district">
            <option selected disabled> Select your District </option>
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

            <label for="contact"><b>Contact No.</b></label><br>
            <input type="text" placeholder="Enter Contact No." name="contact" id="contact" required>

            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button type="submit" name='register' class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="index.php">Login</a></p>
        </div>
    </form>
    <footer>
      <p>Copyright © 2023 Vendor Listing</p>
    </footer>
    <!--script src="javascript2.js"></script-->

</body>

</html>

<?php

	if(isset($_POST['register'])) {
		
		$ip = getIp();
		
		$v_name = $_POST['name'];
		$v_image = $_FILES['image']['name'];
        $v_image_tmp = $_FILES['image']['tmp_name'];
        $v_reg = $_POST['type'];
		$v_email = $_POST['email'];
		$v_pass = $_POST['psw'];
		$v_add = $_POST['address'];
        $v_dist = $_POST['district'];
        $v_contact = $_POST['contact'];
		
		
		move_uploaded_file($v_image_tmp,"images/$v_image");
		
		
		$insert_v = "insert into vendors
         (V_ip,V_name,V_logo,V_regional,V_email,V_pass,V_addrs,V_distrt,V_contact) 
		values ('$ip','$v_name','$v_image','$v_reg','$v_email','$v_pass','$v_add','$v_dist','$v_contact')";
		$run_v = mysqli_query($con, $insert_v); 
		
        echo "<script>alert('Account has been created successfully, Thanks! $v_name')</script>";
	    echo "<script>window.open('index.php','_self')</script>";
	}
?>
