
<?php include('dbcon.php');
?>
<?php include('dbcon.php');
	@$name =$_POST['name'];
	@$age =$_POST['age'];
	
	@$contact =$_POST['contact'];
	@$date =$_POST['date'];
	@$address =$_POST['address'];
	@$action= $_POST['action'];
		
	@$description=$_POST['description'];
	@$photo = $_FILES['photo']['name'];
	@$tempname = $_FILES['photo']['tmp_name'];

if(@$_POST['submit'])
{
	

	move_uploaded_file($tempname,"images/$photo");
	$query="INSERT INTO `complain`( `address`, `description`, `date`, `name`, `age`, `photo`, `contact`, `action`) VALUES ('$address','$description','$date','$name','$age','$photo','$contact','$action')";
	if( mysqli_query($con,$query)== true){
		?>
		<script>
		alert('Now   registerd');
		</script>
		<?php
	}else{?>
		<script>
		alert('Not   registerd');
		</script><?php
	}
	
	}
?>
<form method = "post" action ="registercomplain.php" enctype ="multipart/form-data">
<table align="center" style="margin-top:90px;">

<tr>
<td>Name</td>
<td><input type="text" name ="name"  required></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name ="age"  required></td>
</tr>




<tr>
<td>Date</td>
<td><input type="text" name ="date"  required></td>
</tr>
<tr>

<tr>
<td>Description</td>
<td><input type="text" name ="description"  required></td>
</tr>
<tr>
<td>Contact No</td>
<td><input type="number" name ="contact" required ></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name ="address" required ></td>
</tr>
<tr>
<tr>Action Required:<td>
  <label><input type="radio" name="action" value="urgent" checked>Urgent</label>
  <label><input type="radio" name="action" value="Action to be taken">Action To Be Taken</label></td>
  <tr>
<td>Photo</td>
<td><input type="file" name ="photo" placeholder ="upload photo to identify" ></td>
</tr>
<tr><td colspan="2" align ="center"><input type ="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</body>

</html>