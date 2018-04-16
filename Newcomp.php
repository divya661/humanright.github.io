
<?php
$con = mysqli_connect('localhost','root','','humanright');

if($con == false){
echo "connection is not done";}


?>


<html>
<body bgcolor="pink">
<center>
<form method="post" action ="Newcomp.php" enctype ="multipart/form-data">
<table border="1" bgcolor="#00CCFF">
<tr><td>Name</td>
<td><input type="text" name="name"/></td>
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

<tr><td rowspan="6">Voilation of what kind of human right</td>
<td><input type="radio" name="voilation" value="The right to life"/>The right to life</td>
<tr>
<td><input type="radio" name="voilation" value="The right to liberty and freedom,The right to freedom of speech"/>The right to liberty and freedom,The right to freedom of speech</td></tr>
</tr>
<tr>
<td><input type="radio" name="voilation" value="The right to live your life free of discrimination"/>The right to live your life free of discrimination</td></tr>
</tr>
<tr>
<td><input type="radio" name="voilation" value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs"/>The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</td></tr>
</tr>
<tr>
<td><input type="radio" name="voilation" value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex"/>The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</td></tr>
</tr>
<tr>
<td><input type="radio" name="voilation" value="The right to be free from torture,slavery"/>The right to be free from torture,slavery</td></tr>
</tr>
<tr><td rowspan="2">Action Required:</td>
 <td> <label><input type="radio" name="action" value="urgent" checked>Urgent</label></td>
<tr><td>  <label><input type="radio" name="action" value="Action to be taken">Action To Be Taken</label></td></tr>
<tr><td rowspan="2">Progress:</td>
 <td> <label><input type="radio" name="progress" value="not yet started" checked />Not yet started</label></td>
<tr><td>  <label><input type="radio" name="progress" value="Started" />Started</label></td></tr>
  <tr>
<td>Photo</td>
<td><input type="file" name ="photo" placeholder ="upload photo to identify" ></td>
</tr>
<tr><td><input type="submit" name="submit" value="Submit"/></td></tr>
</table>
</form>
</center>
</body>
</html>
<?php
include('dbcon.php');
if(@$_POST['submit'])
{@$voilation =$_POST['voilation'];
@$name=$_POST['name'];
@$age=$_POST['age'];
	@$photo = $_FILES['photo']['name'];
	@$tempname = $_FILES['photo']['tmp_name'];
@$contact=$_POST['contact'];
@$date=$_POST['date'];
@$description=$_POST['description'];
@$action=$_POST['action'];
@$address=$_POST['address'];
@$progress=$_POST['progress'];
		move_uploaded_file($tempname,"images/$photo");
echo $name."<br>";
echo $voilation."<br>";
echo $address."<br>";
echo $description."<br>";
echo $date."<br>";
echo $tempname."<br>";
echo $age."<br>";
echo $photo."<br>";
echo $contact."<br>";
echo $action."<br>";
echo $progress."<br>";
$query = "INSERT INTO `complain`(`Voilation`, `address`, `description`, `date`, `name`, `age`, `photo`, `contact`, `action`, `progress`) VALUES ('$voilation','$address','$description','$date','$name','$age','$photo','$contact','$action','$progress')";


	$run = mysqli_query($con,"INSERT INTO `complain`(`Voilation`, `address`, `description`, `date`, `name`, `age`, `photo`, `contact`, `action`, `progress` ) VALUES ('$voilation','$address','$description','$date','$name','$age','$photo','$contact','$action','$progress')");
	if($run){echo "run";}
	if( mysqli_query($con,$query)== true){
		?>
		<script>
		alert('Now you are a volunteer');
		</script>
		<?php
	}


}
?> 