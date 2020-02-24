<?php
session_start();
if(isset($_SESSION['login-check'])){
header("location:my-parking.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div class="col-md-12 cols-sm-12 text-center bg-dark text-white"><h2>Login</h2></div>
		</div>
		<div class="row">
			<form method="GET" action="login-post.php">
				<br>
				<div class="form-content">
					<input type="text" name="mobile" class="form-control" placeholder="Mobile / Vehicle Number" required="yes">
				</div>
				<div class="form-content">
					<input type="submit" name="submit" value="Enter" class="form-control bg-warning text-white">
				</div>
			</form>
		</div>
	</div>

<!---- External JS Links ---->

	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/bootstrap.bundle.js" type="text/javascript"></script>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>