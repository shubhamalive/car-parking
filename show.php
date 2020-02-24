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

	<meta http-equiv="refresh" content="5" > 
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center bg-dark text-white"><h2>Parking Status</h2></div>
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
		<div class=" text-center">
			<a href="login.php"><button class="btn btn-primary" style="height: 70px; width: 190px;">Park Your Vehicle</button></a>
		</div>
	</div>

<!---- External JS Links ---->

	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/bootstrap.bundle.js" type="text/javascript"></script>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>