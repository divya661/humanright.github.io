
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="upload_form.php" method='post' enctype="multipart/form-data">
Description of Video: <input type="text" name="description_entered"/><br><br>
<input type="file" name="file"/><br><br>
	
<input type="submit" name="submit" value="Upload" />

</form>

<?php 
if(isset($_POST['submit']))
{include('dbcon.php');
$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description_entered'];

$success= -1;

$descript= 0;

if (empty($description))
{
$descript= 1;
}

if (isset($name)) {

$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm") && ($fileextension !== "jpg") && ($fileextension !== "png") && ($fileextension !== "jpeg")&& ($fileextension !== "mov") && ($fileextension !== "avi") && ($fileextension !== "flv") && ($fileextension !== "wav"))
{

$success=0;
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else 

 if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm")|| ($fileextension == "jpg")|| ($fileextension == "png")|| ($fileextension == "jpeg")|| ($fileextension == "mov") || ($fileextension == "avi") || ($fileextension == "flv") || ($fileextension == "wav"))
{
$success=1;
if (move_uploaded_file($tmp_name, "vedio/$name")) {
echo 'Uploaded!';
}
if( ($success == 1)){
$query="INSERT INTO `vedioimage`( `name`, `fileextension`, `description`) VALUES ('$name','$fileextension','$description')";

$run=mysqli_query($con,$query);
if($run == true){
		?>
		<script>
		alert('Vedio uploaded successfully');
		</script>
		<?php 
	}else{?>
		<script>
		alert('try again');
		</script>
		<?php 
	
	}
	
}}
}
}}
?><?php
include('dbcon.php');
$sql=  "SELECT  `name`, `fileextension`, `description` FROM `vedioimage`" ;
 $run = mysqli_query($con,$sql);
	if(mysqli_num_rows($run)<1)
	{
echo "<tr ><td colspan = '5'>nothing found</td></tr>";
	}
	else
	{
		$no=mysqli_num_rows($run);
		$count = 0;
		
while($no>0){$row = mysqli_fetch_assoc($run);
	$count++;$no--;
	?>
	<table  border=1>
	<?php
$videos_field= $row['name'];
$video_show= "vedio/$videos_field";
$descriptionvalue= $row['description'];
$fileextensionvalue= $row['fileextension'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><video width='320' controls><source src='$video_show' type='vedio/$fileextensionvalue'>Your browser does
not support the video tag.</video></div>";
print "</td>\n";
print "</tr>\n"; 

  


	
}		
	}	

?>

</table>
</body>
</html>
</body>  
</html>