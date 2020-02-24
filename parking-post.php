<?php
session_start();
$session_id=$_SESSION['user_id'];
$session_mobile=$_SESSION['user_mobile'];
$selected_parking_slot=$_GET['selected_parking_slot'];

$_SESSION['direct_access_denied'] = true;

if(!$_SESSION['login-check']){
   header("location:login.php");     
   die;
   }

include ('connection.php');

$update_query_parking_lot="UPDATE parking_lot 
							SET parking_id='1', user_id='$session_id' WHERE name='$selected_parking_slot'";

if(mysqli_query($conn, $update_query_parking_lot))

	$update_user_status_query="UPDATE users 
							SET user_parking_lot='$selected_parking_slot' WHERE user_id='$session_id'";

							if(mysqli_query($conn, $update_user_status_query))
							{
								echo "<script>
								alert('Parking Succesful!');
								window.location.href='my-parking.php';
								</script>";
							}

							// ?selected_parking_slot='.$selected_parking_slot.'

?>
