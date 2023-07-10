<!DOCTYPE html>
<?php
include("includes/db.php");
$v_id="";
if(isset($_GET['Dinner'])){
		$vid = $_GET['Dinner'];
		
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
    <title>Product Listing- Dinner</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <main>
        <form class="product-form" id="Dinnerproduct-form" action="" method="POST">
            <div class="form-header">
                <h1><b>Add Products for Dinner</b></h1>
    </div>
            <div class="form-body">
                <div class="horizontal-group">
                    <div class="form-group">
                        <br><br>
                        <label for="VendorId" class="label-title" name ="id" style="float:left;" readonly><b>Vendor Id = <?php echo $v_id;?> </b></label>
                        <br><br>
                        <label for="DinnerDishName1" class="label-title"><b>Dish Name 1 *</b></label>
                        <input type="text" id="DinnerDishName1" name="DinnerDishName1" placeholder="Enter the name of Dish- Monday Dinner" required style="width: 80%;" />
                        <br><br>

                        <label for="DinnerDishName2" class="label-title"><b>Dish Name 2 *</b></label>
                        <input type="text" id="DinnerDishName2" name="DinnerDishName2" placeholder="Enter the name of Dish- Tuesday Dinner" required style="width: 80%;"/>
                        <br><br>

                        <label for="DinnerDishName3" class="label-title"><b>Dish Name 3 *</b></label>
                        <input type="text" id="DinnerDishName3" name="DinnerDishName3" placeholder="Enter the name of Dish- Wednesday Dinner" required style="width: 80%;"/>
                        <br><br>

                        <label for="DinnerDishName4" class="label-title"><b>Dish Name 4 *</b></label>
                        <input type="text" id="DinnerDishName4" name="DinnerDishName4" placeholder="Enter the name of Dish- Thursday Dinner" required style="width: 80%;"/>
                        <br><br>

                        <label for="DinnerDishName5" class="label-title"><b>Dish Name 5 *</b></label>
                        <input type="text" id="DinnerDishName5" name="DinnerDishName5" placeholder="Enter the name of Dish- Friday Dinner" required style="width: 80%;"/>
                        <br><br>

                        <label for="DinnerDishName6" class="label-title"><b>Dish Name 6 *</b></label>
                        <input type="text" id="DinnerDishName6" name="DinnerDishName6" placeholder="Enter the name of Dish- Saturday Dinner" required style="width: 80%;"/>
                    </div>
                </div>
                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="fullPrice-dinner"><b>Full Plate Price: *</b></label>
                        <input type="number" placeholder="Enter price for full plate" id="fullPrice-dinner" class="form-input" name="fullPrice-dinner" min="0" required>
                    </div>
                    <div class="form-group right">
                        <label for="halfPrice-dinner"><b>Half Plate Price: *</b></label>
                        <input type="number" placeholder="Enter price for half plate" id="halfPrice-dinner" class="form-input" name="halfPrice-dinner" min="0" required>
                    </div>
                </div>
            </div>
            
            <div class="form-footer">
                <button type="submit" style="width: 150px; height: 40px; margin-bottom: 10px; " id="SubmitlunchItem" name='register'>Next</button>
                
            </div>
    <script src="javascript.js"></script>
    </form>
    </main>
    
  </body>
</html>
<?php
	
	if(isset($_POST['register']))
    {
        $v_mail = $_SESSION['email'];
        $get_det = "select * from vendors where V_email='$v_mail'";
        $run_det = mysqli_query($con, $get_det);
        $row_det = mysqli_fetch_array($run_det);
        $v_id = $row_det['V_id'];

        //var_dump($_POST)
		$d1=$_POST['DinnerDishName1'];
        $d2=$_POST['DinnerDishName2'];
        $d3=$_POST['DinnerDishName3'];
        $d4=$_POST['DinnerDishName4'];
        $d5=$_POST['DinnerDishName5'];
        $d6=$_POST['DinnerDishName6'];
        $Fdrate=$_POST['fullPrice-dinner'];
        $Hdrate=$_POST['halfPrice-dinner'];

        $_SESSION["mealtype"] = "Dinner";
        $_SESSION["day1"] = "Monday";
        $_SESSION["day2"] = "Tuesday";
        $_SESSION["day3"] = "Wednesday";
        $_SESSION["day4"] = "Thursday";
        $_SESSION["day5"] = "Friday";
        $_SESSION["day6"] = "Saturday";

        //inserting dishes names
        $insert_d1 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$d1."', '".$_SESSION["day1"]."')";
        $insert_d2 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$d2."', '".$_SESSION["day2"]."')";
        $insert_d3 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$d3."', '".$_SESSION["day3"]."')";
        $insert_d4 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$d4."', '".$_SESSION["day4"]."')";
        $insert_d5 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$d5."', '".$_SESSION["day5"]."')";
        $insert_d6 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$d6."', '".$_SESSION["day6"]."')";
        
		
		$run_d1 = mysqli_query($con, $insert_d1);
        $run_d2 = mysqli_query($con, $insert_d2);
        $run_d3 = mysqli_query($con, $insert_d3);
        $run_d4 = mysqli_query($con, $insert_d4);
        $run_d5 = mysqli_query($con, $insert_d5);
        $run_d6 = mysqli_query($con, $insert_d6); 

        //inserting dishes rates
        $insert_rates= "insert into rate (V_id, M_type, Half, Full ) values (".$v_id.", '".$_SESSION["mealtype"]."', $Fdrate, $Hdrate)";
        $run_drate =  mysqli_query($con, $insert_rates);

        if($run_d1 && $run_d2 && $run_d3 && $run_d4 && $run_d5 && $run_d6 && $run_drate ) {
			
            echo "<script>alert('Your Dinner dishes successfully inserted');</script>";
            //header("Location: LunchItems.php");
		}


    }
?>
