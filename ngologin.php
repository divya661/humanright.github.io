<?php
 session_start();  
include('dbcon.php');?>
<!DOCTYPE HTML>
<html lang = "en_US">
<head>
<meta charset = "UTF-8">
<title>Ngo Login</title>.
</head>
<body>
<h1 align ="center">Ngo</h1>
<form action = "ngologin.php" method = "post" >
<table align = "center">
<tr>
<td>Proofid</td><td><input  type ="text" name = "proofid"  required\></td>
</tr>
<tr>
<td>name</td><td><input  type ="text" name ="name"  required\></td>
</tr>

<tr>
<td><input type = "submit" value ="submit" name = "submit"></td>
</tr>
</table>
</form>
</body>
</html>

<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['proofid']) && !empty($_POST['name'])) {  
    $name=$_POST['name'];  
    $proofid=$_POST['proofid'];  
  
  
     
  $q="SELECT * FROM `ngo` WHERE `name`='$name' AND `proofid`='$proofid'";
    $query=mysqli_query($con,$q);  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $name=$row['name'];  
    $proofid=$row['proofid'];  
    }  
  
    if($name == $name && $proofid == $proofid)  
    {   session_start();  
      $_SESSION['proofid']=$proofid; 
    /* Redirect browser */  
    header("Location:ngodash.php");  
    }  
    } else {  
    echo "Invalid name or proofid!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>  