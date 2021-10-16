<?php
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['user_id']))
{
	//$_SESSION['msg']="You have to login";
	header("location:login.php");
}
//if(isset($_GET['logout'])){
//	session_destroy();
//	usset($_SESSION['username']);
//	header("location:login.php");
//}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>welcome page</title>
	</head>
	<style>
	body{
		background-color: lightblue;
	}
</style>

	<body>
		<h1>WELCOME</h1>
		<?php
		if(isset($_SESSION['success'])):
		
			echo $_SESSION['success'];

			unset($_SESSION['success']);
		endif ?>

		<?php
		if(isset($_SESSION['username'])){ ?>
			
			<h4>WELCOME USER <strong><?php print_r($_SESSION['username']); ?></strong></h4>
			<table >
			    <tr>
				    <th>ID</th>
				    <th>First Name</th>
				    <th>Last Name</th>
				    <th>Gmail Id</th>
				    <th>Phone No</th>
				    <th>Gender</th>
				    <th>Age</th>
				    <th>Linked Id</th>
				    <th>Edit</th>
				    <th>Delete</th>
			    </tr>
		    <?php 
		    	include 'database.php';
				$user_id = $_SESSION['user_id'];
				$sql = "SELECT * FROM register WHERE id <> '$user_id'";
				$result = mysqli_query($conn, $sql);
				//echo @$password;
				//print_r($result);
				if(mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_assoc($result)){
			?>
				        <tr>
					        <td><?php echo $row['id'] ?></td>
					        <td><?php echo $row['name_1'] ?></td>
					        <td><?php echo $row['name_2'] ?></td>
					        <td><?php echo $row['email'] ?></td>
					        <td><?php echo $row['phone_no'] ?></td>
					        <td><?php echo $row['gender'] ?></td>
					        <td><?php echo $row['age'] ?></td>
					        <td><?php echo $row['url'] ?></td>
					         <td ><a href = 'edit.php?user_id=<?php echo $row['id'] ?>&action=edit'>'Edit'</a></td>
					        <td ><a href = 'delete.php?user_id=<?php echo $row['id'] ?>&action=delete'>'Delete'</a></td>
				        </tr>
				    <?php
				    }
				}
				?>
			</table>
			<button><a href ="logout.php?logout">Logout</a></button>
		<?php
		}
		?>
	</body>
</html>