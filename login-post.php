	<?php
			include ('connection.php');
			$mobile=$_GET['mobile'];

			// Check if the user exists in db.
			$query="SELECT * from users WHERE user_mobile='$mobile'";
			$result=mysqli_query($conn,$query);
			$row=mysqli_fetch_array($result);
			
				$user_id=$row['user_id'];
				$user_mobile=$row['user_mobile'];

				// Conditions to apply as per status of user. 
				if ($user_mobile==$mobile) {
					// If user exist, start session ans take to parking selection page.
				    session_start();
					$_SESSION['user_id']=$user_id;
					$_SESSION['user_mobile']=$user_mobile;
					$_SESSION['login-check'] = true;
					$_SESSION['select-parking-access'] = true;

					header('location:select-parking.php');

				} else {
					// If user dose not exist, create user and chech again.
				    $query_insert="INSERT into users (user_mobile) VALUES ('$mobile')";
				    if (mysqli_query ($conn,$query_insert)){
				    	header("location:login-post.php?mobile=$mobile");
				    }
				}
	?>