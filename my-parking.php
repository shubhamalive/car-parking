<?php
session_start();
$session_id=$_SESSION['user_id'];
$session_mobile=$_SESSION['user_mobile'];
if(!$_SESSION['login-check']){
   header("location:login.php");     
   die;
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parking Status</title>
	<!---- External CSS Links ---->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">

	
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center bg-dark text-white"><h2>Your Parking</h2></div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<?php
				include ('connection.php');
				$query="SELECT * FROM parking_lot JOIN status ON parking_lot.parking_id=status.parking_id WHERE parking_lot.user_id='$session_id' ";
				$result=mysqli_query($conn,$query);
				while ($row=mysqli_fetch_array($result)){

					$id=$row['id'];
					$name=$row['name'];
					$parking_status=$row['parking_status'];
					$parking_color=$row['parking_color'];

				echo '<div class="col-md-12 text-center text-white" style="border: solid white 2px; height: 100px; background-color: '.$parking_color.';"><p>'.$name.'</p><span>'.$parking_status.'</span></div>';
				}
				?>
			</div>
			<div class="col-md-9">
				<a href="unpark.php?selected_parking_slot=<?php echo $name ?>">Unpark Vehicle</a>
			</div>
		</div>
	</div>

<!---- External JS Links ---->

	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/bootstrap.bundle.js" type="text/javascript"></script>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>