<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "";
}
else{
	header('location:volunteerlogin.php'); 
}

?>

<?php

include('title.php');
include('dbcon.php');


$sql = "SELECT * FROM `volunteer` WHERE `username`='$username'";

$run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);

?>
<form method = "post" action ="volunteerupdateform.php" enctype ="multipart/form-data">
<table align="center" style="width:80%; margin-top:90px;">
<tr>
<td>UserName</td>
<td><input type="text" name ="username" required></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name ="name"  required></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name ="city"  required></td>
</tr>
<tr>
<td>Street</td>
<td><input type="text" name ="street"  required></td>
</tr>
<tr>
<td>State</td>
<td><input type="text" name ="state"  required></td>
</tr>
<tr>

<tr>
<td>Contact No</td>
<td><input type="number" name ="contact"  required></td>
</tr>
<tr>
<td>Email id</td>
<td><input type="text" name ="email"  required></td>
</tr>
<tr>
<tr>
<td>Identity Photo</td>
<td><input type="file" name ="photo"  ></td>
</tr>

<tr><td colspan="2" align ="center">

<input type ="submit" value="submit" name="submit"></td></tr>
</table>
</form>

<?php
if(isset($_POST['submit'])){
	include('dbcon.php');
	
	$state =$_POST['state'];
	$name =$_POST['name'];
	$city =$_POST['city'];
	$street = $_POST['street'];
	$contact=$_POST['contact'];
	$photo = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	move_uploaded_file($tempname,"images/$photo");
	
	$query = "UPDATE `volunteer` SET `name` = '$name', `city` = '$city', `street` = '$street', `state` = '$state', `photo` = '$photo' ,`contact`='$contact',`email`='$email' WHERE `username` = $username ";

	$run = mysqli_query($con,$query);
	if($run == true){
		?>
		<script>
		alert('Data updatated successfully');
			
		</script>
		<?php
	}

}

?></body>
</html>