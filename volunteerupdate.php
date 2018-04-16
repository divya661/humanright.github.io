
<?php
	include('dbcon.php');
session_start();
if(isset($_SESSION['username']))
{
	echo "";
}
else{
	header('location:volunteerlogin.php'); 
}

?>

<?php

include('title.php');
$username= "";
$password="";
$name="";
$city="";
$street="";
$state="";
$email="";
$contact="";
$photo="";


?>

<table align = "center">
<form action = "volunteerupdate.php" method="post" enctype = "multipart/form-data">
<tr align ="center">
<th>Username</th>
<td><input type = "text" name ="username" placeholder = "enter username" required ="required"/></td>
</tr>
<tr align = "center"><th>Password</th>
<td>
<input type = "password" name = "password" placeholder = "enter password" required = "required"/></td>
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

<td>Contact No</td>
<td><input type="number" name ="contact"  required></td>
</tr>
<tr>
<td>Email id</td>
<td><input type="text" name ="email"  required></td>
</tr>

<tr>
<td>Identity Photo</td>
<td><input type="file" name ="photo"  ></td>
</tr>

<tr><td colspan="2" align ="center">

<input type ="submit" value="submit" name="submit"></td></tr>
</form>
</table>

<?php

if(isset($_POST['submit'])){

	$username =$_POST['username'];
	$password =$_POST['password'];
	$name =$_POST['name'];
	$city =$_POST['city'];
	$state =$_POST['state'];
	$street= $_POST['street'];
	$email= $_POST['email'];
	$contact=$_POST['contact'];
	$photo = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
	

	
	move_uploaded_file($tempname,"images/$photo");

	


$sql="UPDATE `volunteer` SET `name`='$name',`email`='$email',`contact`='$contact',`street`='$street',
	`city`='$city',`state`='$state',`photo`='$photo' WHERE`username`='$username' AND`password`='$password'";
	
$run = mysqli_query($con,$sql);
	if($run == true){
		?>
		<script>
		alert('Data inserted successfully');
		</script>
		<?php
	}
	


mysqli_close($con);}
?>
</body>
</html>



