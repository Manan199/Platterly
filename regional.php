<!doctype html>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php");
?>
<html>
	<head>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	   <link rel="stylesheet" href="css/regional.css" />
	</head>
	
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">PLATTERLY</a>
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
	  
	  
	  
	<h1> Regional Tiffins</h1>
					  
	<div >
	 <table   table style='width:80%' class='regional-container'>
		
		<tr>
		   <th>S No.</th>
		   <th>Tiffins</th>
		   <th> Image</th>
		   <th> view</th>
	   
	   	</tr>
			<?php
				$i = 0;

				$get_regional = "select * from regional";

				$run_regional = mysqli_query($con, $get_regional);

				while ($row_regional = mysqli_fetch_array($run_regional)) {

					$s_no = $row_regional['S_No.'];
					$t_name = $row_regional['Regional_Tiffins'];
					$t_image = $row_regional['Image'];
					$t_view = $row_regional['View'];
					$i++;
							
				?>		
					
				<tr>
		  			<td><?php echo $s_no ?> </td>
					<td><?php echo $t_name ?></td>
					<td><img src='images/<?php echo $t_image ?>' width='140' height='65'/></td>
					<td><button><a href = '<?php echo $t_view ?>'>View</a></button> </td>
				</tr>
		
			<?php } ?>	
		</table>
	</div>
	<div style="text-align:center">
		<a href="index.php"><button class="btn1">Home</button></a> 
	</div>
	<div class="footer-bottom">
    	&copy; PLATTERLY 2023 All Rights Reserved
    </div>
     
  
    
	</body>
</html>