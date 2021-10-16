<?php
include 'database.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	$id = $_GET['user_id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gmail = $_POST['gmail'];
	$phone_no = $_POST['phone'];
	$gender = $_POST['sex'];
	$age = $_POST['age'];
	$linkedid = $_POST['url'];
	$sql = "UPDATE register SET name_1 = '$fname', name_2 = '$lname', email = '$gmail', phone_no = '$phone_no', gender = '$gender', age = '$age', url = '$linkedid' WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
		header("location:index.php");
	}
	else{
		echo mysqli_error($conn) ;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
</head>
<style>
	body{
		background-color: lightblue;
	}
</style>

<body class='edit' >
	<table >
	    <tr>
		    <th>First Name </th>
		    <th>Last Name </th>
		    <th>Gmail Id </th>
		    <th>Phone No </th>
		    <th>Gender </th>
		    <th>Age </th>
		    <th>Linked Id </th>
	    </tr>

    <?php

    $user_name = $_GET['user_id'];
    $sql = "SELECT * FROM register WHERE id='$user_name'";
    $result = mysqli_query($conn,$sql);
    if($result){
    	if(mysqli_num_rows($result)>0){
    		$row = mysqli_fetch_assoc($result);
    	}
    }

    ?>
    	<form action="" method="post">
		    <tr>
		    	<?php $sex = $row['gender']; ?> 
		        <td><input type="text" name="fname" id="first_name" value = '<?php echo $row['name_1'] ?>' required></td><br>
		        <td><input type="text" name="lname" id="last_name" value = '<?php echo $row['name_2'] ?> 'required></td><br>
		        <td><input type="email" name="gmail" id = "GmailId" value = '<?php echo $row['email'] ?>' required></td><br>
		        <td><input type="tel" name="phone" id="Phone_No"  value =  '<?php echo $row['phone_no'] ?>'  required></td><br>
		        <td>
		        	<label for="Male">male</label>
					<input type="radio" name="sex" value = "male" id="Male"  <?php echo ($sex== 'male' ? 'checked=checked':''); ?>><br>  <!-- sir how to checked the radio button using the condition -->
					<label for="Female">female</label>
					<input type="radio" name="sex" value = "female" id="Female" <?php echo ($sex== 'female' ? 'checked=checked':''); ?>><br>
					<label for="Other">prefered not to say</label>
					<input type="radio" name="sex" value = "prefered not to say" id="Other" <?php echo ($sex== 'prefered not to say' ? 'checked=checked':''); ?>>
				</td><br>
		        
		        <td><input type="number" id="Age" name="age" min="0" max="100" value="<?php echo $row['age'] ?>"></td><br>
		        <td><input type="url" id="homepage" name="url" value="<?php echo $row['url'] ?>"></td>
		    </tr><br>
		    
	</table>

	<input type="submit"><!-- sir how to put submit button down the t_able      -->
		</form>


    <a href="index.php">Back</a>


</body>
</html>