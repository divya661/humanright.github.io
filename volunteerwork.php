

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


$username= "";
$password="";
$role="";
$location="";
$help="";
$date="";

$photo="";


?>
    <form action="volunteerwork.php" method="post" enctype="multipart/form-data" >
  <fieldset>
    <legend>Volunteer Work  </legend>

        <div class="elements">
      <label>User Name   :</label>
      <input type="text"  name="username" size="70" />

</div>
    <div class="elements">
      <label >Password  :</label>
      <input type="password"  name="password" size="25" />
</div>

    <div class="elements">
      <label>ROle :</label>
      <input type="text"  name="role" size="25" />
</div>
    <div class="elements">
      <label >Location  :</label>
      <input type="text"  name="location" size="25" />
</div>
    <div class="elements">
      <label >Date :</label>
      <input type="text"  name="date" size="25" />
</div>

    <div class="elements">
      <label >help  :</label>
      <input type="text"  name="help" size="25" />
</div>
            <div class="elements">
      <label for="photo">Photo of event:</label>
 <input type="hidden" name="size" value="350000">
            <input type="file" name="photo" size="25"> 
    </div>

    <div class="submit">
 <button name="submit"  type="submit" class="pure-button pure-button-primary" value="Submit">Submit</button>
    </div>
  </fieldset>
</form>
</body>
<?php 
     

     // connect to the database
    

     // check if the form has been submitted. If it has, start to process the form and save it to the database
     if (isset($_POST['submit']) && !empty($_FILES['photo']))
     { 

 $username =$_POST['username'];
	$password =$_POST['password'];
	
	$date =$_POST['date'];
	$help =$_POST['help'];
	$location= $_POST['location'];
	$role= $_POST['role'];
	
$photo = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
	

	
	move_uploaded_file($tempname,"images/$photo");

 $sql= "INSERT INTO `vwork`(`role`,`location`,`date`,`password`,`username`,`photo`,`help`)VALUES('$role','$location','$date','$password','$username','$photo','$help')";
	if(mysqli_query($con,$sql) == true){
		?>
		<script>
		alert('Data inserted successfully');
		</script>
		<?php
	}
	else
	{
		?>
		<script>alert("not inserted");</script>
		<?php
	}
     
     
	

}
?>

</html>


