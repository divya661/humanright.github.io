<?php
include('dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="new 2.php" method='post' enctype="multipart/form-data">
Description of Video: <input type="text" name="description_entered"/><br><br>
<input type="file" name="file"/><br><br>
	
<input type="submit" name="submit" value="Upload" />

</form>

<?php 

if(isset($_POST['submit'])){
	echo "chk1";
$name= $_FILES['file']['name'];
$tmp_name = $_FILES["file"]["tmp_name"];


$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description_entered'];

$success= -1;

$descript= 0;
echo "chk2";
if (empty($description))
{
$descript= 1;
}
echo "chk3";
if (isset($name)) {

$path= '/humanright/Uploads/video/';

if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
$success=0;
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
	echo "khf";
$success=1;
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
}
}
echo "chk4";
echo $fileextension;
}
}


if (($fileextension == "mp4"))
{
$success=1;
echo "chk5\n";
echo $name;
echo move_uploaded_file($tmp_name, "/humanright/Uploads/video/$name");
if (move_uploaded_file($tmp_name, "/humanright/Uploads/video/$name")) {
echo '\nUploaded!\n';
}
if( ($success == 1)){
$query="INSERT INTO `vedioimage`( `filename`, `fileextension`, `description`) VALUES ('$name','$fileextension','$description')";

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
?>
<p id="para6">Videos

</p>

<?php

$query = "SELECT  `filename`, `fileextension`, `description` FROM `vedioimage`";
$result= mysqli_query( $con, $query) ;
$count = 0;
		
while($row = mysqli_fetch_array($result)){
	$count++;
	
	$videos_field= $row['filename'];
$video_show= "/humanright/Uploads/video/$videos_field";
$descriptionvalue= $row['description'];
$fileextensionvalue= $row['fileextension'];
	?>
	
	<table align ="center" border="1" style ="width:40%;margin-top:50px;float:right;margin-right:350px;">


	
	<tr>


<td><?php echo $count; ?></td>
<td><?php echo $videos_field; ?></td>

<td><?php echo $descriptionvalue; ?></td>
<td><?php echo $fileextensionvalue; ?></td>
<td><video width='320' controls><source src='<?php echo $video_show; ?>' type='video/<?php echo $fileextensionvalue; ?>'>Your browser does
not support the video tag.</video></td>


</tr>
	<?php
}		
	?>
</table>
</body>  
</html>  
