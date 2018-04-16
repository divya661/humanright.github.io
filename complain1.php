<?php 
$con = mysqli_connect('localhost','root','','humanright');
	if($con == false){
echo "connection is not done";}

	
	$name =$_POST['name'];
	$address =$_POST['address'];
	$description =$_POST['description'];
	$age = $_POST['age'];
	$contact=$_POST['contact'];
		$date=$_POST['date'];
		$voilation=$_POST['voilation'];
	$image = $_FILES['image']['name'];
	$tempname = $_FILES['image']['tmp_name'];
	
	move_uploaded_file($tempname,"images/$image");
$query= "INSERT INTO `complain` (`Voilation`, `address`, `description`, `date`, `name`, `age`,`photo`,`contact`)
	VALUES ('$voilation','$address','$description','$date','$name','$age','$image','$contact')";
$run = mysqli_query($con,$query);
	if($run==true)
	{
		?>
		<script>
		alert('Data inserted successfully');
		</script>
		<?php
	}

?>