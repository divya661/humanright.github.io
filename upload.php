<!DOCTYPE html>

<head>
<title></title>
</head>

<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
<label for="file"><span>Filename:</span></label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>
<?php
if(isset($_POST["submit"])){ 
//$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
echo $extension;
//if ((($_FILES["file"]["type"] == "video/mp4")
//|| ($_FILES["file"]["type"] == "audio/mp3")
//|| ($_FILES["file"]["type"] == "audio/wma")
//|| ($_FILES["file"]["type"] == "image/pjpeg")
//|| ($_FILES["file"]["type"] == "image/gif")
//|| ($_FILES["file"]["type"] == "image/jpeg"))

//&& ($_FILES["file"]["size"] < 1000000)
//&& in_array($extension, $allowedExts))

 // {
 // if ($_FILES["file"]["error"] > 0)
  //  {
   // echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
   // }
 // else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " .$extension. "<br />";
	$name= $_FILES['file']['name'];
    echo "Size: " .$_FILES['file']['size']. " Kb<br />";
	
	$vedio = $_FILES['file']['name'];
	$tmp_name = $_FILES['file']['tmp_name'];
echo $tmp_name;

    if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "images/" . $_FILES["file"]["name"];
      }
    }
 
//else
  //{
  //echo "Invalid file";
//}
}
?>