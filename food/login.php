<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from admin where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						header("Location: admin.php");
						die;
					}
				}
			}
			
		}
if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						header("Location: student.php");
						die;
					}
				}
			}
			
			echo
			'<script>alert("Enter correct username and password")</script>';
		}
        else
		{
			echo "wrong username or password!";
		}
}

 ?>

<!DOCTYPE html>
<html>
<head>
<title>LOG IN</title>
<link rel="stylesheet" href="login.css">
<body>
<div class="div1">
<h2>Hostel Management</h2>
</div>
<div class="index">
<h1>Log in</h1>
<form method="post">
<p>Username</p>
<input type="text" name="user_name" placeholder="Enter Username">
<p>Password</p>
<input type="Password" name="password" placeholder="Enter Password">
<input type="Submit" name="" value="login"> <br>
<a href="registration.php"> Register now</a><br>

</form>
</body>
</head>
