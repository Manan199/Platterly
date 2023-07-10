<?php

$con = mysqli_connect("localhost:3308","root",'',"platterly");

if (mysqli_connect_errno()) {
	
	echo "Failed to connect to MySQL :" .mysqli_connect_errno();
}

//getting ip address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

// wallpapers for homepage	
function getRegional()
{

	global $con;

	$get_regional = "select * from regional";

	$run_regional = mysqli_query($con, $get_regional);

	while ($row_regional = mysqli_fetch_array($run_regional)) {

		$s_no = $row_regional['S_No'];
		$t_name = $row_regional['Regional_Tiffins'];
		$t_image = $row_regional['Image'];
	}

}
		/*echo"			
			<div class='box'>
				<img src='images/$t_image' style='height:200px;' />
			</div>
		";
	
	//return $run_regional;*/
	
		
// games page	

function getNvendor() {
	
	global $con;
	
	$get_nvend = "select * from vendors where V_regional='North Indian' order by RAND() LIMIT 1";
	
	$run_nvend = mysqli_query($con, $get_nvend);
	
	while($row_nvend = mysqli_fetch_array($run_nvend)) {
		
		$nv_name = $row_nvend ['V_name'];
		$nv_image = $row_nvend['V_logo'];
		
		
		echo" 
		<img  src='images/$nv_image' class='box-4'>
		<div class='post-preview'>
		<h2 class='single.html'style='color: black; text-align:center;'>$nv_name</a></h2><br>
		<p class='preview-text'>
		 All North Indian Cuisines <br>
		 Special Offer: <s>3900/-</s> 3640/-<br><br>
		 <button style='border:none; background:none;'><h4><a href='northvendors.php' style='text-decoration:none;'>Show More..</h4></a></button>
		</p>
		</div>
			";
	}
}


function getSvendor() {
	
	global $con;
	
	$get_svend = "select * from vendors where V_regional='South Indian' order by RAND() LIMIT 1";
	
	$run_svend = mysqli_query($con, $get_svend);
	
	while($row_svend = mysqli_fetch_array($run_svend)) {
		
		$sv_name = $row_svend ['V_name'];
		$sv_logo = $row_svend['V_logo'];
		
		
		echo" 
		<img  src='images/$sv_logo' class='box-4' >
		<div class='post-preview'>
		<h2 class='single.html'style='color: black; text-align:center;'>$sv_name</a></h2><br>
		<p class='preview-text'>
		 All South Indian Cuisines <br>
		 Special Offer: <s>3900/-</s> 3640/-<br><br>
		 <button style='border:none; background:none;'><h4><a href='southvendors.php' style='text-decoration:none;'>Show More..</h4></a></button>
		</p>
		</div>
			";
	}
}

function getWvendor() {
	
	global $con;
	
	$get_wvend = "select * from vendors where V_regional='West Indian' order by RAND() LIMIT 1";
	
	$run_wvend = mysqli_query($con, $get_wvend);
	
	while($row_wvend = mysqli_fetch_array($run_wvend)) {
		
		$wv_name = $row_wvend ['V_name'];
		$wv_logo = $row_wvend['V_logo'];
		
		
		echo" 
		<img  src='images/$wv_logo' class='box-4'>
		<div class='post-preview'>
		<h2 class='single.html'style='color: black; text-align:center;'>$wv_name</a></h2><br>
		<p class='preview-text'>
		 All South Indian Cuisines<br>
		 Special Offer: <s>3900/-</s> 3640/-<br><br>
		 <button style='border:none; background:none;'><h4><a href='westvendors.php' style='text-decoration:none;'>Show More..</h4></a></button>
		</p>
		</div>
			";
		}
}


function test(){
	return "Success";
}


function cart() {
		if(isset($_GET['add_cart'])){
			
			global $con; 
			
			$ip = getIp();
			
			$p_id = $_GET['add_cart'];
			
			$check_pro = "select * from cart where ip_add='$ip' AND p_id='$p_id'";
			
			$run_check = mysqli_query($con, $check_pro); 
			
			if(mysqli_num_rows($run_check)>0){
				
				echo "";
			}
			else {
	
				$insert_pro = "insert into cart (p_id,ip_add) values ('$p_id','$ip')";
	
				$run_pro = mysqli_query($con, $insert_pro); 
	
				echo "<script>window.open('cart.php','_self')</script>";
			}
			
		}
	}
	
// getting the total added items
 
 function total_items(){
 
	if(isset($_GET['add_cart'])){
	
		global $con; 
		
		$ip = getIp(); 
		
		$get_items = "select * from cart where ip_add='$ip'";
		
		$run_items = mysqli_query($con, $get_items); 
		
		$count_items = mysqli_num_rows($run_items);
		
		}
		
		else {
		
		global $con; 
		
		$ip = getIp(); 
		
		$get_items = "select * from cart where ip_add='$ip'";
		
		$run_items = mysqli_query($con, $get_items); 
		
		$count_items = mysqli_num_rows($run_items);
		
		}
	
		echo $count_items;
}

// total price of items
function total_price() {
	
	$total = 0;
	
	global $con;
	
	$ip = getIp();
	
	$sel_price = "select * from cart where ip_add='$ip'";
	
	$run_price = mysqli_query($con, $sel_price);
	
	while($p_price=mysqli_fetch_array($run_price)){
		
		$p_id = $p_price['p_id'];
		
		$pro_price = "select * from products where p_id='$p_id'";
		
		$run_pro_price = mysqli_query($con, $pro_price);
		
		while($pp_price = mysqli_fetch_array($run_pro_price)) {
			
			$product_price = array($pp_price['p_price']);
			
			$values = array_sum($product_price);
			
			$total += $values;
		}
	}
	echo "₹ " . $total."/-";
}

?>
