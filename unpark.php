<?php
session_start();
$session_id=$_SESSION['user_id'];
$session_mobile=$_SESSION['user_mobile'];

if(!$_SESSION['login-check']){
   header("location:login.php");     
   die;
   }

$selected_parking_slot=$_GET['selected_parking_slot'];

include ('connection.php');
$empty_parking_lot="UPDATE parking_lot SET parking_id='2', user_id='NULL' WHERE name='$selected_parking_slot'";

if(mysqli_query($conn, $empty_parking_lot))

	$update_user_status_query="UPDATE users SET user_parking_lot='' WHERE user_id='$session_id'";

							if(mysqli_query($conn, $update_user_status_query))
							{
								echo "<script>
								alert('Unpark Successful!');
								window.location.href='show.php';
								</script>";
							}
session_destroy();
?>