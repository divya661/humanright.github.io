
<?php
include('dbcon.php');

include('session.php');

session_start();
if(!isset($_SESSION['username']))
{
	 header("location:login.php");  
} 
$username=$_SESSION['username'];
?>

<html>
   
   <head>
      <title>Volunteer Dashboard </title>
   </head>
   
   <body>

<nav class="navbar navbar-expand-sm|lg|md bg-light navbar-inverse">
<h1>HUMAN RIGHTS</h1>
<h1>Welcome <?php echo $username; ?></h1><h2>
<a href ="volunteerlogout.php" style="float:right;margin-right:30px;margin-bottom:15px;position:relative;">Log Out</a></h2></nav>
<h3>Volunteer Dashboard</h3>
  <h2>Your Details</h2>
  <?php
  
  $sql =" SELECT `name`, `email`, `contact`, `street`, `city`, `state`, `photo`, `id` FROM `volunteer` WHERE  `username`='$username' ";
$run = mysqli_query($sql);
	if(mysqli_num_rows($run)>0){
		$data = mysqli_fetch_array($run);
		?>	

	
		<div colspan = "4" style="float;" >
		<img src = "images/volunteerimg/<?php echo $data['photo']; ?>" style="max-width:150px;max-height:150px;margin-left:350px;margin-top:50px;" />
		
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
		</tr>
		
		
		</table>
		</div>



<div class="btn btn-warning " style="margin-left:30px;margin-right:30px;" >
<a href="volunteerwork.php" target="_blank">Add </a></div>
<div>You can add any volunteer action you had done in your profile.</div>
	  <h2><a href="add.php">Volunteer Action You Had Done</a></h2>

</body>
</html>