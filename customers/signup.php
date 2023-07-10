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
            <h1>Register - Create a New Account</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="name"><b>Name</b></label><br>
            <input type="text" placeholder="Enter Name" name="name" id="name" required>

            <label for="user-name"><b>User Name</b></label><br>
            <input type="text" placeholder="Enter User Name" name="user" id="name" required>

            <label for="image"><b>Image</b></label><br><br>
            <input type="file" name="image" id="image-upload"><br><br>

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
            <p>By creating an account you agree to our <a href="../policy.html">Terms & Privacy</a>.</p>

            <button type="submit" name='register' class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </form>

</body>

</html>

<?php

	if(isset($_POST['register'])) {
		
		$ip = getIp();
		
		$C_name = $_POST['name'];
		$C_user = $_POST['user'];
		$C_image = $_FILES['image']['name'];
		$C_image_tmp = $_FILES['image']['tmp_name'];
		$C_email = $_POST['email'];
		$C_pass = $_POST['psw'];
		$C_add = $_POST['address'];
        $C_dist = $_POST['district'];
        $C_contact = $_POST['contact'];
		
		
		move_uploaded_file($C_image_tmp,"images/$C_image");
		
		
		$insert_c = "insert into customers
		(C_Ip,C_Name,C_user,C_Image,C_email,C_pass,C_address,C_district,C_contact) 
		values ('$ip','$C_user','$C_name','$C_image','$C_email','$C_pass','$C_add','$C_dist','$C_contact')";
		
		$run_c = mysqli_query($con, $insert_c); 
		
        echo "<script>alert('Account has been created successfully, Thanks!')</script>";
	    echo "<script>window.open('login.php','_self')</script>";
            
	}
?>