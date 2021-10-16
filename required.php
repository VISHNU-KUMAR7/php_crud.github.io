<?php
session_start();


$name_1="";
$name_2="";
$phone_no="";
$email="";
$age="";
$gender="";
$url="";
$errors=array();

$server_name = "localhost";
$user_name = "root";
$password = "root";
$db_name = "user_management";

$conn = mysqli_connect($server_name,$user_name,$password,$db_name);

if(!$conn){
	die("Connection Failed". mysqli_connect_error());
}
//register user and to receive value from user
if(isset($_POST['register_user'])){
$name_1=mysqli_real_escape_string($conn,$_POST['name_1']);
$name_2=mysqli_real_escape_string($conn,$_POST['name_2']);
$phone_no=mysqli_real_escape_string($conn,$_POST['phone_no']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password_1=mysqli_real_escape_string($conn,$_POST['password_1']);
$password_2=mysqli_real_escape_string($conn,$_POST['password_2']);
$age=mysqli_real_escape_string($conn,$_POST['age']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$url=mysqli_real_escape_string($conn,$_POST['url']);
//required field
//print_r($_POST);
//die();
if(empty($name_1)){
	array_push($errors,"username is empty");
}
if(empty($name_2)){
	array_push($errors,"username is empty");
}
if(empty($phone_no)){
	array_push($errors,"phone number is empty");
}
if(empty($email)){
	array_push($errors,"E-mail is empty");
}
if(empty($age)){
	array_push($errors,"age is empty");
}
if(empty($gender)){
	array_push($errors,"gender is not choosen");
}
if(empty($url)){
	array_push($errors,"url is empty");
}
if(empty($password_1)){
array_push($errors,"password is empty");
}
if($password_1 != $password_2){
	array_push($errors,"passwords need to be same.");
}
//check whether the input data(name_1 and name_2) is already present in database or not during registeration

$user_check="SELECT * FROM register WHERE name_1='$name_1'or name_2='$name_2' LIMIT 1";
$results=mysqli_query($conn,$user_check);
$user=mysqli_fetch_assoc($results);//fetch the full username that matches with the database
//print_r($user);
//die();
if($user)
{
	if($user['name_1']===$name_1){
		array_push($errors,"username already exists");
	}
	if($user['name_2']===$name_2){
		array_push($errors,"username already exists");
	}
}
//Finally register if no errors
if(count($errors)==0){
	$password=md5($password_1);//this encrypt the password
	
	$sql = "INSERT INTO register(name_1,name_2,phone_no,email,password_1,age,gender,url)VALUES ('$_POST[name_1]','$_POST[name_2]','$_POST[phone_no]','$_POST[email]','$password','$_POST[age]','$_POST[gender]','$_POST[url]')";


	 mysqli_query($conn,$sql);
	
	$_SESSION['username']=$name_1;
	$_SESSION['success']="You are logged in !!!! ";
	header("location:login.php");

}
}

//Login user checking email and password
//print_r($_POST);
//die();

if(isset($_POST['login_user'])){
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$password_1=mysqli_real_escape_string($conn,$_POST['password_1']);
	if(empty($email)){
	array_push($errors,"E-mail is empty");
}
if(empty($password_1)){
	array_push($errors,"password is empty");
}
if(count($errors)==0){
	$password=md5($password_1);
	$user_query="SELECT * FROM register WHERE email='$email'and password_1='$password'";
if(!$results=mysqli_query($conn,$user_query)){   //result is over here
	die(mysqli_error($conn));
}

if(mysqli_num_rows($results)>0){
	//echo "user found";
	$row = mysqli_fetch_assoc($results);
	$_SESSION['username']=$row['name_1'];
	$_SESSION['user_id']=$row['id'];
	$_SESSION['success']="You are logged in !!!! ";
	
	header("location:index.php");

}
else{
	echo "wrong ceredentials";
}
//die();
//$user=mysqli_fetch_assoc($results);//fetch the full username that matches with the database
//print_r($user);
//die();
//if(mysqli_num_results($results)){
	//die();
//	$_SESSION['username']=$name_1;
//	$_SESSION['success']="You are logged in !!!! ";
//	header("location:index.php");
//}
//else{
//	array_push($errors,"wrong ceredentials");
//}
}
}
?>


