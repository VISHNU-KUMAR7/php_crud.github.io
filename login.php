<?php
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['user_id']))
{
	//$_SESSION['msg']="You have to login";
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Yourself</title>
</head>
<style>
body{
	background-color: lightblue;
}
</style>

<body>
	<form action="required.php" method="post">
		<h1>Login</h1><br>
		
		
		E-mail:<input type="email"name="email" required><br><br>
		Password:<input type="password"name="password_1" required><br><br>
		
		<button type="submit" name="login_user">Log In</button><br>
		<p>Not a user?<a href="register.php"><b>Register here</b></a></p>

		</form>

</body>
</html>