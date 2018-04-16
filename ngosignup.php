<?php 
include('dbcon.php');
?>

<?php


// initializing variables

$name = ""; 
$proofid="";
$email="";
$contact="";
$city="";
$state="";
$address="";
$logo="";
$foundin="";
$concern="";
// connect to the database
?>




<h1 align ="center">NGO LOGIN</h1>
<form action = "ngosignup.php" method = "post" enctype="multipart/form-data">

<table align = "center">
<tr>
<td>ProofId</td><td><input  type ="text" name = "proofid"  required\></td>
</tr>
<tr>
<td>Name</td><td><input  type ="text" name = "name"   required\></td>
</tr>
<tr>
<td>City</td><td><input  type ="text" name = "city"   required\></td>
</tr>
<tr>
<td>State</td><td><input  type ="text" name = "state"   required\></td>
</tr>
<tr>
<td>Logo</td><td><input  type ="file" name = "logo" placeholder="upload logo of ngo"  required\></td>
</tr>

<tr>
<td>Found in</td><td><input  type ="date" name = "foundin"    required\></td>
</tr>
<tr>
<td>Contact</td><td><input  type ="text" name = "contact"  required\></td>
</tr>
<tr>
<td>Email</td><td><input  type ="text" name = "email"   required\></td>
</tr>
<tr>
<td>Address</td><td><input  type ="text" name = "address"   required\></td>
</tr>

<tr><th>Select your priority concerns of human right</th>
<td> <select name="concern1" >

  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom,The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td></tr><tr><th>Select your priority concerns of human right</th>
<td> <select name="concern2" >
 <option value="none">none</option>
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom,The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td></tr><tr><th>Select your priority concerns of human right</th>
<td> <select name="concern3" >
 <option value="none">none</option>
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom,The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td></tr><tr><th>Select your priority concerns of human right</th>

<td> <select name="concern4" >
 <option value="none">none</option>
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom,The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td>
</tr>
<tr>
<th>Select your priority concerns of human right</th>
<td> <select name="concern5" >
 <option value="none">none</option>
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom,The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td>
</tr>
<tr>
<th>Select your priority concerns of human right</th>
<td> <select name="concern6" >
 <option value="none">none</option>
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom,The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td>
</tr>
<tr>
<td><input type = "submit" value ="submit" name = "submit"></td>
</tr>
</table>
</form>




<?php

if (isset($_POST['submit'])) {
 
  
  $con = mysqli_connect('localhost','root','','humanright');

if($con == false){
echo "connection is not done";}

  $name = $_POST['name'];
  
	$contact =$_POST['contact'];
	$address = $_POST['address'];
	$email =$_POST['email'];
		$concern1 =$_POST['concern1'];
		$concern2 =$_POST['concern2'];
		$concern3 =$_POST['concern3'];
		$concern4 =$_POST['concern4'];
		$concern5 =$_POST['concern5'];
		$concern6 =$_POST['concern6'];
	$proofid = $_POST['proofid'];
	$state =$_POST['state'];
	$city = $_POST['city'];

	$foundin = $_POST['foundin'];
	$logo = $_FILES['logo']['name'];
	$tempname = $_FILES['logo']['tmp_name'];
		move_uploaded_file($tempname,"images/$photo");
  

  	$query = "INSERT INTO `ngo` (`name`,` contact`, `email`,`address`,`city`,`state`,`logo`,`proofid`,`foundedin`,`concern1`,`concern2`,`concern3`,`concern4`,`concern5`,`concern6`) 
  			  VALUES('$name', '$contact','$email','$address','$city','$state' ,'$logo','$proofid','$foundin','$concern1','$concern1','$concern2','$concern3','$concern4','$concern5','$concern6')";
 
	if(mysqli_query($con,$query) == true){
		?>
		<script>
		alert('Data inserted successfully');
	
		</script>
	<?php}
		else{?>
			<script>
		alert('Data not inserted ');
	
		</script><?php
		}
	}

  ?></body>
</html>