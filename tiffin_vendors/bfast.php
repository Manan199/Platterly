<!DOCTYPE html>
<?php
include("includes/db.php");
$v_id="";
if(isset($_GET['bfast'])){
		$vid = $_GET['bfast'];
		
        $v_mail = $_SESSION['email'];
        $get_det = "select * from vendors where V_email='$v_mail'";
                    
        $run_det = mysqli_query($con, $get_det);
                    
        $row_det = mysqli_fetch_array($run_det);
                    
        $v_name = $row_det['V_name'];
        $v_id = $row_det['V_id'];
        
        }
		
?>


<html>
  <head>
    <title>Product Listing- Breakfast</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <main>
        <form class="product-form" id="bfproduct-form" action="" method="post">
            <div class="form-header">
                <h1><b>Add Products for Breakfast</b></h1>
            </div>
            <div class="form-body">
                <div class="horizontal-group">
                    <div class="form-group">
                        <br>
                        <label for="VendorId" class="label-title" name ="id" style="float:left;" readonly><b>Vendor Id = <?php echo $v_id;?> </b></label>
                        
                        <br><br>
                        <label for="bfDishName1" class="label-title"><b>Dish Name 1 *</b></label>
                        <input type="text" id="bfDishName1" name="bfDishName1" placeholder="Enter the name of Dish- Monday bf" required style="width: 80%;" />
                        <br><br>

                        <label for="bfDishName2" class="label-title"><b>Dish Name 2 *</b></label>
                        <input type="text" id="bfDishName2" name="bfDishName2" placeholder="Enter the name of Dish- Tuesday bf" required style="width: 80%;"/>
                        <br><br>

                        <label for="bfDishName3" class="label-title"><b>Dish Name 3 *</b></label>
                        <input type="text" id="bfDishName3" name="bfDishName3" placeholder="Enter the name of Dish- Wednesday bf" required style="width: 80%;"/>
                        <br><br>

                        <label for="bfDishName4" class="label-title"><b>Dish Name 4 *</b></label>
                        <input type="text" id="bfDishName4" name="bfDishName4" placeholder="Enter the name of Dish- Thursday bf" required style="width: 80%;"/>
                        <br><br>

                        <label for="bfDishName5" class="label-title"><b>Dish Name 5 *</b></label>
                        <input type="text" id="bfDishName5" name="bfDishName5" placeholder="Enter the name of Dish- Friday bf" required style="width: 80%;"/>
                        <br><br>

                        <label for="bfDishName6" class="label-title"><b>Dish Name 6 *</b></label>
                        <input type="text" id="bfDishName6" name="bfDishName6" placeholder="Enter the name of Dish- Saturday bf" required style="width: 80%;"/>
                    </div>
                </div>
                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="fullPrice-bf"><b>Full Plate Price: *</b></label>
                        <input type="number" placeholder="Enter price for full plate" id="fullPrice-bf" class="form-input" name="fullPrice-bf" min="0" required>
                    </div>
                    <div class="form-group right">
                        <label for="halfPrice-bf"><b>Half Plate Price: *</b></label>
                        <input type="number" placeholder="Enter price for half plate" id="halfPrice-bf" class="form-input" name="halfPrice-bf" min="0" required>
                    </div>
                </div>
            </div>
            
            <div class="form-footer">
                <button type="submit" style="width: 150px; height: 40px; margin-bottom: 10px;" id="SubmitbfItem" name='register'>Next</button>
                
            </div>
        </form>
    
    <script src="javascript.js"></script>
    </main>
  </body>
</html>

<?php
	
	if(isset($_POST['register'])){

        $v_mail = $_SESSION['email'];
        $get_det = "select * from vendors where V_email='$v_mail'";
        $run_det = mysqli_query($con, $get_det);
        $row_det = mysqli_fetch_array($run_det);
        $v_id = $row_det['V_id'];
        //var_dump($_POST)
		$bf1=$_POST['bfDishName1'];
        $bf2=$_POST['bfDishName2'];
        $bf3=$_POST['bfDishName3'];
        $bf4=$_POST['bfDishName4'];
        $bf5=$_POST['bfDishName5'];
        $bf6=$_POST['bfDishName6'];
        $Fbfrate=$_POST['fullPrice-bf'];
        $Hbfrate=$_POST['halfPrice-bf'];

        $_SESSION["mealtype"] = "Breakfast";
        $_SESSION["day1"] = "Monday";
        $_SESSION["day2"] = "Tuesday";
        $_SESSION["day3"] = "Wednesday";
        $_SESSION["day4"] = "Thursday";
        $_SESSION["day5"] = "Friday";
        $_SESSION["day6"] = "Saturday";

        //inserting dishes names
        $insert_bf1 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$bf1."', '".$_SESSION["day1"]."')";
        $insert_bf2 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$bf2."', '".$_SESSION["day2"]."')";
        $insert_bf3 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$bf3."', '".$_SESSION["day3"]."')";
        $insert_bf4 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$bf4."', '".$_SESSION["day4"]."')";
        $insert_bf5 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$bf5."', '".$_SESSION["day5"]."')";
        $insert_bf6 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$bf6."', '".$_SESSION["day6"]."')";
        
		
		$run_Bf1 = mysqli_query($con, $insert_bf1);
        $run_Bf2 = mysqli_query($con, $insert_bf2);
        $run_Bf3 = mysqli_query($con, $insert_bf3);
        $run_Bf4 = mysqli_query($con, $insert_bf4);
        $run_Bf5 = mysqli_query($con, $insert_bf5);
        $run_Bf6 = mysqli_query($con, $insert_bf6); 

        //inserting dishes rates
        $insert_rates= "insert into rate (V_id, M_type, Half, Full ) values (".$v_id.", '".$_SESSION["mealtype"]."', $Fbfrate, $Hbfrate)";
        $run_bfrate =  mysqli_query($con, $insert_rates);

        if($run_Bf1 && $run_Bf2 && $run_Bf3 && $run_Bf4 && $run_Bf5 && $run_Bf6 && $run_bfrate ) {
			
            echo "<script>alert('Your breakfast dishes successfully inserted');</script>";
            //header("Location: LunchItems.php");
		}


    }
?>
