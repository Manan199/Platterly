<!doctype html>
<?php
session_start();
include("includes/db.php");
$v_id="";
if(isset($_GET['email']))
{
    //retreiving vid of person running this.
    //$vid = $_GET['vendorMenuPage'];
    
    $v_mail = $_GET['email'];
    //var_dump($v_mail);die();
    $get_det = "select * from vendors where V_email='$v_mail'";
                
    $run_det = mysqli_query($con, $get_det);
                
    $row_det = mysqli_fetch_array($run_det);
    $v_id = $row_det['V_id']; 
    //var_dump($_POST);
    //joining tables for meals
    $del_join = "DROP TABLE NewJoin";
    $run_del = mysqli_query($con, $del_join);
    $get_join = " CREATE TABLE NewJoin AS SELECT V.V_id, V.V_name, M.M_type, M.M_item, M.M_day 
                    FROM vendors V JOIN meals M on V.V_id=M.V_id where v.v_email='".$v_mail."'
                    ORDER BY V.V_id";
    $run_join = mysqli_query($con, $get_join);
    // if($run_join)
    // {
    //     echo "<script>alert('Joins on tables done');</script>";
    // }

    //will declare bf variables now	
    $getname="SELECT V_name FROM NewJoin WHERE V_id=$v_id";
    $rungetname = mysqli_query($con, $getname);
    $v_name = $row_det['V_name']; 

    $getbf1="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Monday' && M_type='Breakfast'";
    $rungetbf1=mysqli_query($con, $getbf1);
    $row_det = mysqli_fetch_array($rungetbf1);
    $bf1=$row_det['M_item'];

    $getbf2="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Tuesday' && M_type='Breakfast'";
    $rungetbf2=mysqli_query($con, $getbf2);
    $row_det = mysqli_fetch_array($rungetbf2);
    $bf2=$row_det['M_item'];

    $getbf3="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Wednesday'  && M_type='Breakfast'";
    $rungetbf3=mysqli_query($con, $getbf3);
    $row_det = mysqli_fetch_array($rungetbf3);
    $bf3=$row_det['M_item'];

    $getbf4="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Thursday'  && M_type='Breakfast'";
    $rungetbf4=mysqli_query($con, $getbf4);
    $row_det = mysqli_fetch_array($rungetbf4);
    $bf4=$row_det['M_item'];

    $getbf5="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Friday'  && M_type='Breakfast'";
    $rungetbf5=mysqli_query($con, $getbf5);
    $row_det = mysqli_fetch_array($rungetbf5);
    $bf5=$row_det['M_item'];

    $getbf6="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Saturday'  && M_type='Breakfast'";
    $rungetbf6=mysqli_query($con, $getbf6);
    $row_det = mysqli_fetch_array($rungetbf6);
    $bf6=$row_det['M_item'];

    /*if($rungetbf1 && $rungetbf2 && $rungetbf3 && $rungetbf4 && $rungetbf5 && $rungetbf6)
    {
        echo"breakfast dishes fetched";
    }*/

    //will declare lunch variables now	

    $getl1="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Monday' && M_type='Lunch'";
    $rungetl1=mysqli_query($con, $getl1);
    $row_det = mysqli_fetch_array($rungetl1);
    $l1=$row_det['M_item'];

    $getl2="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Tuesday' && M_type='Lunch'";
    $rungetl2=mysqli_query($con, $getl2);
    $row_det = mysqli_fetch_array($rungetl2);
    $l2=$row_det['M_item'];

    $getl3="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Wednesday' && M_type='Lunch'";
    $rungetl3=mysqli_query($con, $getl3);
    $row_det = mysqli_fetch_array($rungetl3);
    $l3=$row_det['M_item'];

    $getl4="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Thursday' && M_type='Lunch'";
    $rungetl4=mysqli_query($con, $getl4);
    $row_det = mysqli_fetch_array($rungetl4);
    $l4=$row_det['M_item'];

    $getl5="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Friday' && M_type='Lunch'";
    $rungetl5=mysqli_query($con, $getl5);
    $row_det = mysqli_fetch_array($rungetl5);
    $l5=$row_det['M_item'];

    $getl6="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Saturday' && M_type='Lunch'";
    $rungetl6=mysqli_query($con, $getl6);
    $row_det = mysqli_fetch_array($rungetl6);
    $l6=$row_det['M_item'];

    /*if($rungetl1 && $rungetl2 && $rungetl3 && $rungetl4 && $rungetl5 && $rungetl6)
    {
        echo"lunch dishes fetched";
    }*/

    //will declare dinner variables now	

    $getd1="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Monday' && M_type='Dinner'";
    $rungetd1=mysqli_query($con, $getd1);
    $row_det = mysqli_fetch_array($rungetd1);
    $d1=$row_det['M_item'];

    $getd2="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Tuesday' && M_type='Dinner'";
    $rungetd2=mysqli_query($con, $getd2);
    $row_det = mysqli_fetch_array($rungetd2);
    $d2=$row_det['M_item'];

    $getd3="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Wednesday' && M_type='Dinner'";
    $rungetd3=mysqli_query($con, $getd3);
    $row_det = mysqli_fetch_array($rungetd3);
    $d3=$row_det['M_item'];

    $getd4="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Thursday' && M_type='Dinner'";
    $rungetd4=mysqli_query($con, $getd4);
    $row_det = mysqli_fetch_array($rungetd4);
    $d4=$row_det['M_item'];

    $getd5="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Friday' && M_type='Dinner'";
    $rungetd5=mysqli_query($con, $getd5);
    $row_det = mysqli_fetch_array($rungetd5);
    $d5=$row_det['M_item'];

    $getd6="SELECT M_item FROM NewJoin WHERE V_id=$v_id && M_day='Saturday' && M_type='Lunch'";
    $rungetd6=mysqli_query($con, $getd6);
    $row_det = mysqli_fetch_array($rungetd6);
    $d6=$row_det['M_item'];

    /*
    if($rungetd1 && $rungetd2 && $rungetd3 && $rungetd4 && $rungetd5 && $rungetd6)
    {
        echo"dinner dishes fetched";
    }*/



    //joining tables for rates
    $del_join = "DROP TABLE Newrates";
    $run_del = mysqli_query($con,$del_join);
    $get_join2 = " CREATE TABLE Newrates AS SELECT R.Half, R.Full, M.V_id, M.M_type FROM rate R JOIN meals M on R.V_id = M.V_id";
    $run_join2 = mysqli_query($con, $get_join2);
    /*if($run_join2)
    {
        echo "<script>alert('Joins on table rates done');</script>";
    }*/

    $gethrb="SELECT Half FROM Newrates WHERE V_id=$v_id && M_type='Breakfast'";
    $runget=mysqli_query($con, $gethrb);
    $row_det = mysqli_fetch_array($runget);
    $hrb=$row_det['Half'];

    $getfrb="SELECT Full FROM Newrates WHERE V_id=$v_id && M_type='Breakfast'";
    $runget=mysqli_query($con, $getfrb);
    $row_det = mysqli_fetch_array($runget);
    $frb=$row_det['Full'];

    $gethrl="SELECT Half FROM Newrates WHERE V_id=$v_id && M_type='Lunch'";
    $runget=mysqli_query($con, $gethrl);
    $row_det = mysqli_fetch_array($runget);
    $hrl=$row_det['Half'];

    $getfrl="SELECT Full FROM Newrates WHERE V_id=$v_id && M_type='Lunch'";
    $runget=mysqli_query($con, $getfrl);
    $row_det = mysqli_fetch_array($runget);
    $frl=$row_det['Full'];

    $gethrd="SELECT Half FROM Newrates WHERE V_id=$v_id && M_type='Dinner'";
    $runget=mysqli_query($con, $gethrd);
    $row_det = mysqli_fetch_array($runget);
    $hrd=$row_det['Half'];

    $getfrd="SELECT Full FROM Newrates WHERE V_id=$v_id && M_type='Dinner'";
    $runget=mysqli_query($con, $getfrd);
    $row_det = mysqli_fetch_array($runget);
    $frd=$row_det['Full'];


}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/north.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PLATTERLY</title>
</head>
<body>
    <!--Navbar Starts Here-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-size:21px;">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src=images/logo_n.png style="height:100px;" /></a>
        <div class="d-flex">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i>&nbsp;</a>
              </li>
              <li class="nav-item">
                <?php
					        if(isset($_SESSION['user'])){
						        echo" <a class='nav-link active' href='customers/my_acc.php'><h4 style='color:yellow;text-decoration:underline;'>Hi! &nbsp;".$_SESSION['user'].'(My Account)'."</h4></a>";
					        }
					        else {
						        echo"<a class='nav-link' href='customers/login.php'>Login</a>";
					        }
				        ?>
				      </li>
              <li class="nav-item">
                <?php
					        if(isset($_SESSION['user'])){
						        echo" <a class='nav-link active' href='logout.php'>Logout</a>";
					        }
                ?>      
              </li>
              <li><a class='nav-link' href='regional.php'>Tiffin Vendors</a></li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
           </div>
          </div>
        </div>
      </nav>
      <!--Navbar Ends Here--->
	<body>
    <form method="post" action="bill.php?name=<?php echo $v_name;?>">
        <h1><?php echo $v_name; ?></h1>
        
        <div>
            
            <table class="regional-container" >
                <tr>
                    <th colspan=2>Breakfast</th>
                    <th>Half</th>
                    <th> Full</th>
                </tr>
                <tr>
                    <td><?php echo $bf1; ?>(Mon)</td>
                    <td><?php echo $bf2; ?>(Tue) </td>
                    <td rowspan=2>Rs<?php echo $hrb; ?></td>
                    <td rowspan=2>Rs<?php echo $frb; ?></td>
                
                </tr>
                <tr>
                    <td><?php echo $bf3; ?>(Wed)</td>
                    <td><?php echo $bf4; ?>(Thu)</td>
                </tr>
                <tr>
                    <td><?php echo $bf5; ?>(Fri)</td>
                    <td><?php echo $bf6; ?>(Sat)</td>
                </tr>
                <tr>
                    <th colspan=2> Lunch</th>
                    <th>Half</th>
                    <th> Full</th>         
                </tr>
                <tr>
                    <td><?php echo $l1; ?>(Mon)</td>
                    <td><?php echo $l2; ?>(Tue)</td>
                    <td rowspan=3>Rs<?php echo $hrl; ?></td>
                    <td rowspan=3>Rs<?php echo $frl; ?></td>
                </tr>
                <tr>
                    <td><?php echo $l3; ?>(Wed)</td>
                    <td><?php echo $l4; ?>(Thu)</td>
                </tr>
                <tr>
                    <td><?php echo $l5; ?>(Fri)</td>
                    <td><?php echo $l6; ?>(Sat)</td>
                </tr>
                <tr>
                    <th colspan=2> Dinner</th>
                    <th>Half</th>
                    <th> Full</th>         
                </tr>
                <tr>
                    <td><?php echo $d1; ?>(Mon)</td>
                    <td><?php echo $d2; ?>(Tue)</td>
                    <td rowspan=3>Rs<?php echo $hrd; ?></td>
                    <td rowspan=3>Rs<?php echo $frd; ?></td>
                </tr>
                <tr>
                    <td><?php echo $d3; ?>(Wed)</td>
                    <td><?php echo $d4; ?>(Thu)</td>
                </tr>
                <tr>
                    <td><?php echo $d5; ?>(Fri)</td>
                    <td><?php echo $d6; ?>(Sat)</td>
                </tr>
                <tr>
                    <th colspan=2>Total</th>
                    <th><label class="radio-inline">
                    <input type="radio" name="optradio1" value="Half"> Half &ensp;(Rs 2860 pm)</label> </th>
                    <th><label class="radio-inline">
                    <input  type="radio" name="optradio2" value="Full">  Full &ensp;(Rs 3640 pm)</label> </th>
                </tr>
            </table>
        </div>
        <div style="text-align:center">
             <button class="btn2" type="submit" name="submit">Proceed to Billing</button>
        </div>
</form>
	</body>
</html>