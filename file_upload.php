<?php

include('dbcon.php');
echo "run";

$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
echo $fileName;
echo $fileTmpLoc;
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "vedio/$fileName")){
    echo "$fileName upload is complete";
} else {
    echo "move_uploaded_file function failed";
}
$query = "INSERT INTO `vedioimage`('vedioname' ) VALUES ('$fileName')";

	
	if( mysqli_query($con,$query)== true){
		?>
		<script>
		alert('Now you are a volunteer');
		</script>
		<?php
	}

	
?>