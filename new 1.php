<html><head><style>

body{
		background-image:url('complain.jpg');
		background-size:100%;
		 background-attachment: fixed;
		background-repeat: no-repeat;
	}
	.tab{
		height:1300px;
		width:1200px;
		margin:80px;
		opacity:0.8;
		background-color:white;
		
	}

	h1{
		font-size: 50px;
		margin:50px;
	}

	.mm{
		width:20px;
	}
	table,tr,td{
		border-collapse:collapse;
		font-size:25px;
		font-weight: bold;
	}

	input{
		height:30px;
		width:350px;
		font-size:25px;
		font-weight: bold;
	}
</style></head><body>
<?php
$con = mysqli_connect('localhost','root','','humanright');

if($con == false){
echo "connection is not done";}


?>



<body >
<center>
<form method="post" action ="new 1.php" enctype ="multipart/form-data">
<h1>Complain</h1>

<div class="tab">
<table cellpadding="10px">
<tr><td>Name</td>
<td><input type="text" name="name"/></td>
</tr>


<tr>
<td>Age</td>
<td><input type="number" name ="age"  required></td>
</tr>
<tr>
<td>Date</td>
<td><input type="date" name ="date"  required></td>
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
<td><input type="radio"class="mm" name="voilation" value="The right to life"/>The right to life</td>
<tr>
<td><input type="radio"class="mm" name="voilation" value="The right to liberty and freedom,The right to freedom of speech"/>The right to liberty and freedom,The right to freedom of speech</td></tr>
</tr>
<tr>
<td><input type="radio"class="mm" name="voilation" value="The right to live your life free of discrimination"/>The right to live your life free of discrimination</td></tr>
</tr>
<tr>
<td><input type="radio" class="mm"  name="voilation" value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs"/>The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</td></tr>
</tr>
<tr>
<td><input type="radio"  class="mm" name="voilation" value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex"/>The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</td></tr>
</tr>
<tr>
<td><input type="radio" class="mm" name="voilation" value="The right to be free from torture,slavery"/>The right to be free from torture,slavery</td></tr>
</tr>
<tr><td rowspan="2">Action Required:</td>
 <td> <label><input class="mm" type="radio" name="a" value="urgent" checked>Urgent</label></td>
<tr><td>  <label><input class="mm" type="radio" name="a" value="Action to be taken">Action To Be Taken</label></td></tr>
  
  	<tr><td rowspan="2">Progress:</td>
 <td> <label><input class="mm" type="radio" name="progress" value="urgent" checked>Started</label></td>
 <td> <label><input class="mm" type="radio" name="progress" value="on-progress" >On-progress</label></td>
<td>  <label><input class="mm" type="radio" name="progress" value="not started">Not Started</label></td>
  </tr>
<td>Photo</td>
<td><input type="file" name ="photo" placeholder ="upload photo to identify" ></td>
</tr>
<tr><td><input type="submit" name="submit" value="Submit"/></td></tr>
</table></div>
</form>
</center>
</body>
</html>
<?php
include('dbcon.php');

if(isset($_POST['submit']))
{$voilation =$_POST['voilation'];
$name=$_POST['name'];
$age=$_POST['age'];
	$photo = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
$contact=$_POST['contact'];
$date=$_POST['date'];
$description=$_POST['description'];
$a=$_POST['a'];
$address=$_POST['address'];
$progress=$_POST['progress'];
		move_uploaded_file($tempname,"images/$photo");

$query="INSERT INTO `complain`(`Voilation`, `address`, `description`, `date`, `name`, `age`, `photo`, `contact`, `action`,`progress`) VALUES ('$voilation','$address','$description','$date','$name','$age','$photo','$contact','$a','$progress')";
 $run = mysqli_query($con,$query);

if($run== true){
		?>
		<script>
		alert(' registerd');
		</script>
		<?php
	}else{?>
		<script>
		alert('Try Again');
		</script><?php
	}
	


}
?> 