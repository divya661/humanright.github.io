<?php

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
			window.open('volunteerupdateform.php?sid=<?php echo $username;?>','_self');
		</script>
		<?php
	}

	

?>