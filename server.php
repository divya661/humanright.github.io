<?php


include('dbcon.php');
?>

<style type="text/css">
	input,textarea{
		position:relative;
		left:150px;
		margin:10px;
		padding:5px;
		width:750px;
		color: blue;
		font-weight: bold;
	}

	select{
		margin:10px;
		padding:5px;
	}
	body{
		background-image: url("w2.jpg");
		background-size: 100%;
		background-attachment: fixed;
		background-repeat: no-repeat;
		font-family:Andalus;
	}
	.nav{
		position: relative;
		top:80px;
		background-color: #000066;
		width: 1400px;
		margin: auto;
		opacity: 0.8;
		height:1320px;
		
			}

		td, th{
			width:350px;
			color:blue;
			font-weight: bold;
			font-size:20px;
			
			
		}
		table{margin-top:90px;
				style:"width:50%;
			}
		
		h1,h2{
			color:white;
		}
		
		button{
			height:60px;
			width:150px;
			margin:20px;
			padding:5px;
			font-size:30px;
		}

</style>
<body><center>
	<div class="nav">
	<h1>Non-Governmental Organisation(NGO) Registration</h1>
<form method = "post" action ="server.php" enctype ="multipart/form-data">
<div class="tab">
<table align="center">

<tr>

<td><input type="text" name ="name" placeholder ="Enter your name" required></td>
</tr>
<tr>

<tr>
<td><input type="text" name ="foundedin" placeholder ="Enter your street" required></td>
</tr>
<tr>

<td><input type="text" name ="email" placeholder="Email-id" required></td>
</tr>
<tr>

<td><input type="text" name ="city" placeholder="City" required></td>
</tr>
<tr>

<td><input type="text" name ="state" placeholder="State" required></td>
</tr>
<tr>

<td><input type="text" name ="address" placeholder="Enter your Address" required></td>
</tr>
<tr>

<td><textarea name ="proofid" placeholder="proofid" required></textArea></td>
</tr>

<tr>

<td><input type="number" name ="contact" placeholder="Contact no" required></td>
</tr>
<tr>

<td><input type="file" name ="photo" ></td>
</tr>
<tr>

<td><h2>Choose your concerns:</h2></td>
</tr>
<tr><th rowspan="6">Voilation of what kind of human right NGO is concered for</th></tr><tr>
<td><input type="checkbox" name="concern1" value="The right to life" checked>The right to life</td>
</tr>
<tr>
<td><input type="checkbox" name="concern2" value="The right to liberty and freedom,The right to freedom of speech">The right to liberty and freedom,The right to freedom of speech</td></tr>

<tr>
<td><input type="checkbox" name="concern3" value="The right to live your life free of discrimination">The right to live your life free of discrimination</td></tr>

<tr>
<td><input type="checkbox"  name="concern4" value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</td></tr>

<tr>
<td><input type="checkbox"  name="concern5" value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</td></tr>

<tr>
<td><input type="checkbox"  name="concern6" value="The right to be free from torture,slavery">The right to be free from torture,slavery</td></tr>


<tr><td colspan="2" align ="center">

<button name="submit">Submit</button></td></tr>
</table>
</div>
</form>
</div>
</body>
<?php
include('dbcon.php');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
	$photo = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
$contact=$_POST['contact'];
$foundedin=$_POST['foundedin'];
$address=$_POST['address'];
$city=$_POST['city'];
$proofid=$_POST['proofid'];
$state=$_POST['state'];
$concern1=$_POST['concern1'];
$concern2=$_POST['concern2'];
$concern3=$_POST['concern3'];
$concern4=$_POST['concern4'];
$concern5=$_POST['concern5'];
$concern6=$_POST['concern6'];
		move_uploaded_file($tempname,"images/$photo");
$query = "INSERT INTO `ngo`( `name`, `contact`, `email`, `address`, `city`, `state`, `logo`, `proofid`, `foundedin`, `concern1`, `concern2`, `concern3`, `concern4`, `concern5`, `concern6`) VALUES ('$name', '$contact', '$email', '$address', '$city', '$state', '$photo', '$proofid', '$foundedin', '$concern1', '$concern2', '$concern3', '$concern4', '$concern5', '$concern6')" ; 
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