<!DOCTYPE html>
<?php
include("includes/db.php");
$v_id="";
if(isset($_GET['Lunch'])){
		$vid = $_GET['Lunch'];
		
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
    <title>Product Listing- Lunch</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <main>
        <form class="product-form" id="Lunchproduct-form" action="" method="POST">
            <div class="form-header">
                <h1><b>Add Products for Lunch</b></h1>
            </div
            <div class="form-body">
            <div class="horizontal-group">
                    <div class="form-group">
                        <br>
                        <label for="VendorId" class="label-title" name ="id" style="float:left;" readonly><b>Vendor Id = <?php echo $v_id;?> </b></label>
                        <br><br>
                        <label for="l1" class="label-title"><b>Dish Name 1 *</b></label>
                        <input type="text" id="l1" name="l1" placeholder="Enter the name of Dish- Monday lunch" required style="width: 80%;" />
                        <br><br>

                        <label for="l2" class="label-title"><b>Dish Name 2 *</b></label>
                        <input type="text" id="l2" name="l2" placeholder="Enter the name of Dish- Tuesday lunch" required style="width: 80%;"/>
                        <br><br>

                        <label for="l3" class="label-title"><b>Dish Name 3 *</b></label>
                        <input type="text" id="l3" name="l3" placeholder="Enter the name of Dish- Wednesday lunch" required style="width: 80%;"/>
                        <br><br>

                        <label for="l4" class="label-title"><b>Dish Name 4 *</b></label>
                        <input type="text" id="l4" name="l4" placeholder="Enter the name of Dish- Thursday lunch" required style="width: 80%;"/>
                        <br><br>

                        <label for="l5" class="label-title"><b>Dish Name 5 *</b></label>
                        <input type="text" id="l5" name="l5" placeholder="Enter the name of Dish- Friday lunch" required style="width: 80%;"/>
                        <br><br>

                        <label for="l6" class="label-title"><b>Dish Name 6 *</b></label>
                        <input type="text" id="l6" name="l6" placeholder="Enter the name of Dish- Saturday lunch" required style="width: 80%;"/>
                    </div>
                </div>
                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="fullPrice-lunch"><b>Full Plate Price: *</b></label>
                        <input type="number" placeholder="Enter price for full plate" id="fullPrice-lunch" class="form-input" name="fullPrice-lunch" min="0" required>
                    </div>
                    <div class="form-group right">
                        <label for="halfPrice-lunch"><b>Half Plate Price: *</b></label>
                        <input type="number" placeholder="Enter price for half plate" id="halfPrice-lunch" class="form-input" name="halfPrice-lunch" min="0" required>
                    </div>
                </div>
            </div>
            
            <div class="form-footer">
                <button type="submit" style="width: 150px; height: 40px; margin-bottom: 10px; " id="SubmitlunchItem" name='register'>Next</button>
                
            </div>
        </form>
        <script src="javascript.js"></script>
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
		$l1=$_POST['l1'];
        $l2=$_POST['l2'];
        $l3=$_POST['l3'];
        $l4=$_POST['l4'];
        $l5=$_POST['l5'];
        $l6=$_POST['l6'];
        $Flrate=$_POST['fullPrice-lunch'];
        $Hlrate=$_POST['halfPrice-lunch'];

        $_SESSION["mealtype"] = "Lunch";
        $_SESSION["day1"] = "Monday";
        $_SESSION["day2"] = "Tuesday";
        $_SESSION["day3"] = "Wednesday";
        $_SESSION["day4"] = "Thursday";
        $_SESSION["day5"] = "Friday";
        $_SESSION["day6"] = "Saturday";

        //inserting dishes names
        $insert_l1 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$l1."', '".$_SESSION["day1"]."')";
        $insert_l2 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$l2."', '".$_SESSION["day2"]."')";
        $insert_l3 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$l3."', '".$_SESSION["day3"]."')";
        $insert_l4 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$l4."', '".$_SESSION["day4"]."')";
        $insert_l5 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$l5."', '".$_SESSION["day5"]."')";
        $insert_l6 = "insert into meals (M_type, V_id, M_item, M_day) values ('".$_SESSION["mealtype"]."', ".$v_id." , '".$l6."', '".$_SESSION["day6"]."')";
        
		
		$run_l1 = mysqli_query($con, $insert_l1);
        $run_l2 = mysqli_query($con, $insert_l2);
        $run_l3 = mysqli_query($con, $insert_l3);
        $run_l4 = mysqli_query($con, $insert_l4);
        $run_l5 = mysqli_query($con, $insert_l5);
        $run_l6 = mysqli_query($con, $insert_l6); 

        //inserting dishes rates
        $insert_rates= "insert into rate (V_id, M_type, Half, Full ) values (".$v_id.", '".$_SESSION["mealtype"]."', $Flrate, $Hlrate)";
        $run_lrate =  mysqli_query($con, $insert_rates);

        if($run_l1 && $run_l2 && $run_l3 && $run_l4 && $run_l5 && $run_l6 && $run_lrate ) {
			
            echo "<script>alert('Your lunch dishes successfully inserted');</script>";
            //header("Location: LunchItems.php");
		}


    }
?>
