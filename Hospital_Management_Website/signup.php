<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$email = $_POST['email'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$user_type = $_POST['user_type'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,name,email,user_name,password,user_type) values ('$user_id','$name','$email','$user_name','$password','$user_type')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="style1.css">
</head>

<body>
<div class="form-container">

	<form action="" method="post">
		<h3>register now</h3>
		<input type="text" name="name" required placeholder="Enter your name">
      	<input type="email" name="email" required placeholder="Enter your email">
		<input type="text" name="user_name" required placeholder="Enter your username">
		<input type="password" name="password" required placeholder="Enter your password">
		<select name="user_type">
         <option value="user">Patient</option>
         <option value="admin">Doctor</option>
      	</select>
		<input type="submit" name="submit" value="register now" class="form-btn">
		<p>already have an account? <a href="login.php">login now</a></p>
	</form>

</div>
</body>
</html>