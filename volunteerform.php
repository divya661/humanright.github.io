
<?php

include('title.php');
include('dbcon.php');


?>

<style>
	body{
		background-image:url("vol.jpg");
		background-size:1700px 850px;
		background-color:red;
		background-attachment: fixed;
		font-weight:bold;
	}
	
	
	td,.pic{
		font-family:Andalus;
		height:50px;
		font-size:20px;
		margin:10px;
		color:white;
	}
	
	input,button{
		height:30px;
		width:300px;
		padding:5px;
		margin:10px;
		font-family:Andalus;
		font-size:20px;
		color:black;
	}
	
	.box{
		position:absolute;
		top:15%;
		left:35%;
		background-color:#000066;
		height:730px;
		width:600px;
		border-radius:10%;
		opacity:0.8;
		padding:20px;
		color:white;
	}
</style>

<body>
<div class="box"><center>
<form method = "post" action ="volunteerform.php" enctype ="multipart/form-data">
<table align="center" style="width:80%; margin-top:90px;">

<tr>
<td>NAME</td>
<td><input type="text" name ="name" placeholder ="enter name" required></td>
</tr>
<tr>
<td>STREET</td>
<td><input type="text" name ="street" placeholder ="enter street" required></td>
</tr>
<tr>
<td>E-MAIL</td>
<td><input type="email" name ="email" placeholder="enter e-mail id" required></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name ="city" placeholder="enter city" required></td>
</tr>
<tr>
<td>STATE</td>
<td><input type="text" name ="state" placeholder="enter state" required></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name ="username" placeholder="enter username" required></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name ="password" placeholder="enter password" required></td>
</tr>

<tr>
<td>Contact No</td>
<td><input type="number" name ="contact" placeholder="enter contact no" required></td>
</tr>
<tr>
<td>PHOTO</td>
<td><input type="file" name ="photo" ></td>
</tr>

<tr><td colspan="2" align ="center">

<input type ="submit" value="submit" name="submit"></td></tr>
</table>
</form></div>
</body>
</html><?php 
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$username =$_POST['username'];
	$password =$_POST['password'];
	$name =$_POST['name'];
	$street =$_POST['street'];
	$city =$_POST['city'];
	$state= $_POST['state'];
	$contact=$_POST['contact'];
	$photo = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
	$email = $_POST['email'];
	move_uploaded_file($tempname,"images/$photo");
	
	$query = "INSERT INTO `volunteer`( `name`, `city`, `state`, `street`, `contact`,`email`,`photo`,`username`,`password`) VALUES ('$name','$city','$state','$street','$contact','$email','$photo','$username','$password')";

	$run = mysqli_query($con,$query);
	if( $run== true){
		?>
		<script>
		alert('Now you are a volunteer');
		</script>
	<?php }else{
		?>
		<script>
		alert('Try Again');
		</script>
		<?php
	}
	
	}
?>

