<?php

include('navigationbar.php');

include('dbcon.php');
?>

<!DOCTYPE html>

<head>
<title>POSTS</title>
</head>

<body>

<form action="vediohome.php" method="post" enctype="multipart/form-data">
<label for="file"><span>Filename:</span></label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Upload" />
</form>

</body>
</html>
<?php
if(isset($_POST["submit"])){
	$name = $_FILES["file"]["name"];
			$tempname = $_FILES['photo']['tmp_name'];
$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma","wmv","pjpeg","ogg","flv","mov","png","avi","wav");
$extension = pathinfo($name, PATHINFO_EXTENSION);

if ( in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
		
			
    if (file_exists("vedio/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
		  	move_uploaded_file($tempname,"vedio/.$name");
     
    
	  	
	$query = "INSERT INTO `vedioimage`( `vedioname` ) VALUES ('$name')";

$run = mysqli_query($con,$query);
if($run){echo "run";}
else {echo "not";}

	  
      }
    }
  }
else
  {
  echo "Invalid file";
  }
}
?>