<?php
session_start();
if(isset($_SESSION['username']))
{
	echo "";
}
else{
	header('location:volunteerlogin.php'); 
}

?>


<table align = "center">

<tr align ="center">
<th>Location</th>

<th align = "center"><th>Role</th>
<th align = "center"><th>Date</th>
<th align = "center"><th>Help</th>
<th align = "center"><th>City</th>
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
		
		$count = 0;
		
while($data = mysqli_fetch_assoc($run)){
	$count++;
	?>
	
	
	
	
	<tr>
<td><?php echo $count; ?></td>
<td><?php echo $data['role']; ?></td>
<td><?php echo $data['date']; ?></td>
<td><?php echo $data['help']; ?></td>
<td><?php echo $data['city']; ?></td>
<td><img src = "images/<?php echo $data['photo']; ?>" style ="max-width:100px;"/></td>


</tr>
	<?php
}		
	}

?>

</table>
</body>
</html>