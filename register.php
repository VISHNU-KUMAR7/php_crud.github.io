		<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'required.php';
}

/*include 'database.php';


if(isset($_POST['name_1'])){
	$sql = "INSERT INTO register(name_1,name_2,phone_no,email,password_1,age,gender,url)VALUES ('$_POST[name_1]','$_POST[name_2]','$_POST[phone_no]','$_POST[email]','$_POST[password_1]','$_POST[age]','$_POST[gender]','$_POST[url]')";

	if(mysqli_query($conn,$sql)){
		// echo "Successfully Done.";
		header("location:register.php?success=true");
	}
	else{
		// header("location:register.php?success=false");		
		echo "Error" .$sql. "<br>" .mysqli_error($conn);
	}
	mysqli_close($conn);

}


if (isset($_GET['success']) && count($_GET) > 0 ){
	$success  = true;	
}else{
	$success  = false;
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Yourself</title>
</head>
<style>
body{
	background-color: lightblue;
}
</style>

<body>
	<form action="" method="post">
		<h1>Registration</h1><br>
		<?php 

			//if(@$success){
			//	echo "insert success <br>";				
			//}
		 ?>

		First_Name:<input type="text" name="name_1" required><br><br>

		Last_Name:<input type="text" name="name_2" required><br><br>
		Phone_Number:<input type="tel" name="phone_no" required><br><br>
		E-mail:<input type="email"name="email" required><br><br>
		Password:<input type="password"name="password_1" required><br><br>
		Reconfirm_Password:<input type="password" name="password_2" required><br><br>
		Age:<input type="number" name="age" required><br><br>
		Gender:
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="prefered not to say">Prefered not to say<br><br>
		URL:<input type="url"name="url" required><br><br>
		<input type="submit" name="register_user" required><br>
			<p>Already a user?<a href="login.php"><b>login here</b></a></p>
		</form>


</body>
</html>