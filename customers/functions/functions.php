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

/*function getNvendor() {
	
	global $con;
	
	$get_nvend = "select * from n_tiffin_vendors order by RAND() LIMIT 1";
	
	$run_nvend = mysqli_query($con, $get_nvend);
	
	while($row_nvend = mysqli_fetch_array($run_nvend)) {
		
		$bg_image = $row_nvend ['bg_image'];
		$bg_head = $row_nvend ['bg_head'];
		$bg_con = $row_nvend ['bg_con'];
		
		echo" 
			<div class='post'>
				<img src='images/$bg_image' class='post-image'/>
				<div class='post-preview'>
				<p class='preview-text'>
				<h2 class='single.html' style='color: black; text-align: center'>$bg_head</h2>
				<br>$bg_con
				</p>
				
               </div>
             </div>
			";
	}
}
*/


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
