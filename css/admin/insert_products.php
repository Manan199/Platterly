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
		<link rel="stylesheet" href="css/insert_product.css">
</head>

<body>
  <div class="product-back">
  		<div class="product-form">

        <form action="#" method="post" enctype="multipart/form-data" class="product">
          <h1><center>INSERT NEW PRODUCT</center></h1>
               <fieldset>
                 <legend>Product Details</legend>

                 <div class="gamepro-img">
                        <img src="images/game.jpg" alt="Game" class="img-response">
                    </div>
                    <br>
					<div class="product-box">
										
					<div class="product-label">
                        <h4>Category</h4>
                    </div><br>
                    <input type="text" name="p_catg" placeholder="E.g. Games/Wallpapers" class="input-response" required><br><br>
					
					<div class="product-label">
						<h4>Name</h4>
                    
                    <input type="text" name="p_name" placeholder="E.g. Bender" class="input-response" required><br><br>
					</div>
                    <div class="product-label">
                      <h4>Price</h4>
                        <input type="text" name="p_price" placeholder="E.g. ₹5000" class="input-response" required><br><br>
                      </div>

                    <div class="product-label"> Upload Image</div>
                    <input type="file" name="p_image" class="inputs-response"><br>
                     &nbsp;
                     
                     <input type="submit" name="submit" value="Sumbit" class="sub-btn">
                </div>
            </fieldset>
      </form>
	  </div>
</div>
</body>
</html>

<?php

	if(isset($_POST['submit'])) {
		
		$ip = getIp();
		
		$p_catg = $_POST['p_catg'];
		$p_name = $_POST['p_name'];
		$p_price = $_POST['p_price'];
		$p_name = $_POST['p_name'];
		$p_image = $_FILES['p_image']['name'];
		$p_image_tmp = $_FILES['p_image']['tmp_name'];
				
		move_uploaded_file($p_image_tmp,"../images/$p_image");
		
		$insert_prod = "insert into products (p_ip,p_catg,p_name,p_price,p_image) 
		values ('$ip','$p_catg','$p_name','$p_price','$p_image')";
		
		$run_prod = mysqli_query($con, $insert_prod);
		
		if($run_prod){
			echo "<script>alert('Your product has been added sucesfully!')</script>";
			echo "<script>window.open('index.php?insert_products','_self')</script>";
			
		}
	}

?>
<?php } ?>