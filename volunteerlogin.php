<?php
include('dbcon.php');
session_start();  

?>
   

<head>  
<title>Login</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
} </style>  
</head>  
<body>  
  
   
<h3>Login Form</h3>  
<form action="volunteerlogin.php" method="POST">  
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Login" name="submit" />  
</form>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
  
     
  $q="SELECT * FROM `volunteer` WHERE `username`='$user' AND `password`='$pass'";
    $query=mysqli_query($con,$q);  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $username=$row['username'];  
    $password=$row['password'];  
    }  
  
    if($user == $username && $pass == $password)  
    {  
    session_start();  
    $_SESSION['username']=$user;  
  
    /* Redirect browser */  
    header("Location:dashboard.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>  

