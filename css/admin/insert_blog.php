<?php
	
include("includes/db.php");
include("../functions/functions.php");
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<!DOCTYPE>
<html>
<title>Document</title>
<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/insert_blog.css">
</head>

<body>
<div class="blog-back">
		<div class="blog-form">

      <form action="#" method="post" enctype="multipart/form-data" class="blog">
				<h1>CREATE NEW BLOG</h1>
						 <fieldset>
							 <legend>Details</legend>

								<div class="blog-box">
									 <h4>Name</h4>
									 </div>
									 <input type="text" name="bg_name" placeholder="E.g. Bender" class="input-response" required><br><br>
									<h4>Email</h4>
									 <input type="text" name="bg_email" placeholder="E.g. Bender@iplay.in" class="input-response" required><br><br>
									 <div class="blog-label"> Upload Image</div>
									 <input type="file" name="bg_image" class="inputs-response" required><br><br>
						 
									<div class="blog-label"> Blog Title</div>
									<input type="text" name="bg_head" placeholder="E.g. Bender" class="input-response" required><br><br>
									 <div class="blog-label">Blog Content</div>
									 <textarea id="bg_con" cols="59" rows="7" required> </textarea><br>
									 <input type="submit" name="submit" value="Sumbit" class="blog-btn">
							 
					 </fieldset>
					 
		 </div>
		 </form>
	 </div>
</body>
</html>

<?php

	if(isset($_POST['submit'])) {
		
		$ip = getIp();
		
		$bg_name = $_POST['bg_name'];
		$bg_email = $_POST['bg_email'];
		$bg_name = $_POST['bg_name'];
		$bg_image = $_FILES['bg_image']['name'];
		$bg_image_tmp = $_FILES['bg_image']['tmp_name'];
		$bg_head = $_POST['bg_head'];
		$bg_con = $_POST['bg_con'];
		
		move_uploaded_file($bg_image_tmp,"images/$bg_image");
		
		$insert_bg = "insert into blogs (bg_ip,bg_name,bg_email,bg_image,bg_head,bg_con) 
		values ('$ip','$bg_name','$bg_email','$bg_image','$bg_head','$bg_con')";
		
		$run_bg = mysqli_query($con, $insert_bg);
		
		if($run_bg){
			echo "<script>alert('Your blog has been added sucesfully!')</script>";
			echo "<script>window.open('insert_blog.php?create_new_blog','_self')</script>";
			
		}
	}

?>
<?php } ?>
