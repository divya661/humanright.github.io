<?php   
include('dbcon.php');
session_start();  
if(!isset($_SESSION["username"])){  
    header("location:volunteerlogin.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
   
      
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
              
          
    </style>  
</head>  
<body>  
  
   <nav>   
<h2>Welcome, <?php echo $_SESSION['username'];?>! </h2>  
<a href ="volunteerlogout.php" style="float:right;margin-right:30px;margin-bottom:15px;position:relative;">Log Out</a></h2></nav>
<h3>Volunteer Dashboard</h3>
  <h2>Your Details</h2>
  <?php
  $username = $_SESSION['username'];
  $sql =" SELECT * FROM `volunteer` WHERE  `username`='$username' ";
$run = mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0){
		$data = mysqli_fetch_array($run);
		?>	

	
		<div colspan = "4" style="float;" >
		<?php $img=$data['photo'];
?>
		<img src = "images/<?php echo $img; ?>" style="max-width:150px;max-height:150px;margin-left:350px;margin-top:50px;" />
		
		<table align ="center" border="1" style ="width:40%;margin-top:50px;float:right;margin-right:350px;">
		<tr>
		<th colspan ="12" align="center">Volunteer Details</th>
		<tr >
		
		
		<th colspan ="2">Name</th>
		<td colspan ="3"><?php echo $data['name']; ?></td>
		</tr>
		<tr>
		<th colspan ="2">Street</th>
		<td colspan ="3"><?php echo $data['street']; ?></td>
		</tr>
		<tr>
		<th colspan ="2">City</th>
		<td colspan ="3"><?php echo $data['city']; ?></td>
		</tr><tr>
		<th colspan ="2">State</th>
		<td colspan ="3"><?php echo $data['state']; ?></td>
		</tr><tr>
		<th colspan ="2">Contact</th>
		<td colspan ="3"><?php echo $data['contact']; ?></td>
		</tr><tr>
		<th colspan ="2">E-mail</th>
		<td colspan ="3"><?php echo $data['email']; ?></td>
		
		</tr>
		
		
		</table>
		</div>

	<?php echo "<br>";
	echo "<br>";}
?>
<div class="btn btn-warning " style="margin-left:30px;margin-right:30px;" >
<a href="volunteerwork.php" target="_blank">Add </a></div>
<div align="center">You can add any volunteer action you had done in your profile.</div>
	 <h2>Volunteer Action You Had Done</h2>
<table align = "center">

<tr align ="center">
<th>Location</th>

<th align = "center"><th>Role</th>
<th align = "center"><th>Date</th>
<th align = "center"><th>Help</th>

<th align = "center"><th>Photo</th></tr>

</table>




<?php 


	include('dbcon.php');
	$sql = "SELECT * FROM `vwork` WHERE `username`='$username' ";
	
$run = mysqli_query($con,$sql);
	if(mysqli_num_rows($run)<1)
	{
echo "<tr ><td colspan = '5'>no records found</td></tr>";
	}
	else
	{
		$no=mysqli_num_rows($run);
		$count = 0;
		
while($no>0){$data = mysqli_fetch_assoc($run);
	$count++;$no--;
	?>
	
	
	
	
	<tr>
<td><?php echo $count; ?></td>
<td><?php echo $data['role']; ?></td>
<td><?php echo $data['date']; ?></td>
<td><?php echo $data['help']; ?></td>

<td><img src = "images/<?php echo $data['photo']; ?>" style ="max-width:100px;"/></td>


</tr>
	<?php
}		
	}

?>

</table>
</body>
</html>

<?php  
}  
?>  