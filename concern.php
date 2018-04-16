<?php include('dbcon.php');

 session_start(); 
?>
<html>
<body>
<form action = "concern.php" method = "post">

<div class="checkbox">
      <label><input type="checkbox" value="The right to life" name="c[]"checked>The right to life</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="The right to liberty and freedom,The right to freedom of speech" name="c[]">The right to liberty and freedom,The right to freedom of speech</label>
    </div>
    <div class="checkbox disabled">
      <label><input type="checkbox" value="The right to live your life free of discrimination" name="c[]">The right to live your life free of discrimination</label>
    </div>
	<div class="checkbox disabled">
      <label><input type="checkbox" name="c[]" value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs" >The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</label>
    </div>
	<div class="checkbox disabled">
      <label><input type="checkbox" name="c[]" value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex" >The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</label>
    </div>
	<div class="checkbox disabled">
      <label><input type="checkbox" name="c[]" value="The right to be free from torture,slavery" >The right to be free from torture,slavery</label>
    </div>
	</div>
	<div><input type = "submit" value="submit" name="submit"></div>
	</form>
	<?php
	$checkBox = $_POST['c'];

if(isset($_POST['submit']))
{
    for ($i=0; $i<sizeof($checkBox); $i++)
        {
            $query="INSERT INTO `concern`(`concerns'VALUES('" . $checkBox[$i] . "')" ;     
if(mysqli_query($con,$query) == true){
	
  
		?>
		<script>
		alert('Data inserted successfully');
		
		</script>
		<?php
	}
}
} ?></body>
</html>
