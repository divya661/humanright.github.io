<?php

error_reporting(1);

$con=mysql_connect("localhost","root","");

mysqli_select_db("humanright",$con);

extract($_POST);

$target_dir = "vedio/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
    echo "File Format Not Suppoted";
} 

else
{

$video_path=$_FILES['fileToUpload']['name'];
$run = "INSERT INTO `vedioimage`( `name`, `fileextension`, `description`) VALUES ('$name','$fileextension','$description')"
mysqli_query($con,$run);

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

echo "uploaded ";

}

}

//display all uploaded video

if($disp)

{

$query=mysqli_query("select * from vedioimage");

	while($all_video=mysqli_fetch_array($query))

	{
?>
	 
	 <video width="300" height="200" controls>
	<source src="vedio/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php } } ?>
	
	
<form method="post" enctype="multipart/form-data">

<table border="1">

<tr>

<Td>Upload  Video</td></tr>

<Tr><td><input type="file" name="fileToUpload"/></td></tr>

<tr><td>

<input type="submit" value="Uplaod Video" name="upd"/>

<input type="submit" value="Display Video" name="disp"/>

</td></tr>

</table>

</form>	