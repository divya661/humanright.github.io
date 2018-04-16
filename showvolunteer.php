
<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "";
}
else{
	header('location:volunteerlogin.php'); 
}

?>

<?php

include('title.php');
include('dbcon.php');


	