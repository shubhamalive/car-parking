<?php
session_start();
$session_id=$_SESSION['user_id'];
$session_mobile=$_SESSION['user_mobile'];

if(!empty($_SESSION['select-parking-access'])){
    unset($_SESSION['select-parking-access']);
   }else {
    header("location:my-parking.php");      
   }

if(!$_SESSION['login-check']){
   header("location:login.php");     
   die;
   }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Select Praking</title>
	<!---- External CSS Links ---->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">

	
</head>
<body>

	<div class="container bg-warning">
		<div class="row">
			<div class="col-md-12 text-center bg-dark text-white"><h2>Select Parking Slot</h2></div>
		</div>
		<div class="row">
			<form method="GET" action="parking-post.php">
				<br>
				<div class="form-content">
					<label>Select Parking :</label>
					<select name="selected_parking_slot">
                                <?php

                                	include ('connection.php');
                                    $query= "SELECT * FROM parking_lot JOIN status ON parking_lot.parking_id=status.parking_id";
                                    $result=mysqli_query($conn,$query);
                                    while ($array=mysqli_fetch_array($result))
                                    {
                                    	if ($array['parking_id'] == '1')
                                        {
                                            $value = 'disabled';
                                        }
                                        else
                                        {
                                            $value = '';
                                        }
                                    echo ('<option value="'.$array['name'].'" '.$value.'>'.$array['name'].' - '.$array['parking_status'].'</option>');
                                    }
                                ?>
                            </select>
				</div>
				<div class="form-content">
					<input type="submit" name="submit" value="Park" class="form-control bg-success text-white">
				</div>
			</form>
		</div>
		<div class="row">
			<?php
			include ('connection.php');
			$query="SELECT * FROM parking_lot JOIN status ON parking_lot.parking_id=status.parking_id";
			$result=mysqli_query($conn,$query);
			while ($row=mysqli_fetch_array($result)){

				$id=$row['id'];
				$name=$row['name'];
				$parking_status=$row['parking_status'];
				$parking_color=$row['parking_color'];

			echo '<div class="col-md-2 text-center text-white" style="border: solid white 2px; height: 100px; background-color: '.$parking_color.';"><p>'.$name.'</p><span>'.$parking_status.'</span></div>';
			}
			?>
			
		</div>
	</div>

<!---- External JS Links ---->

	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/bootstrap.bundle.js" type="text/javascript"></script>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>