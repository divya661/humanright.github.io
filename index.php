
<?php
include('title.php');
include('dbcon.php');
include('navigationbar.php');
include('carousel.html');
?>

<style>
body{
	font-family:Andalus;
	font-weight: bold;
	font-size: 20px;
	  background-color:orange;
	background-attachment: fixed;
}

  .cnt{
	  background-color:red;
  }
  
  .box1,.box2,.box3,.box4,.box5,.box6{
	  background-color:black;
	  position:absolute;
	  height:420px;
	  width:420px;
	  margin:30px;
	  background-size:400px 400px;
	  background-position:center;
	  background-repeat:no-repeat;
	  font-size:30px;
  }
  
  .l1,.l2,.l3,.l4,.l5,.l6{
	  position:relative;
	  size:100%;
	  height:420px;
	  width:420px;
	  background-color:#2E86C1;
	  opacity:0.8;
	  display:none;
  }
  
  p{
	  position:absolute;
	  top:50px;
	  left:50px;
	  width:300px;
	  font-family:Andalus;
	  color:white;
  }
  
  h1{
	font-family:Andalus;
	font-weight:bold;
	font-size:50px;
	background-color:#e6ccff;
	
  }
  
  .box1:hover .l1{
	  display:block;
  }
  
  .box2:hover .l2{
	  display:block;
  }
  .box3:hover .l3{
	  display:block;
  }
  .box4:hover .l4{
	  display:block;
  }
  .box5:hover .l5{
	  display:block;
  }
  .box6:hover .l6{
	  display:block;
  }

  .feedback{
  	position:relative;
  	top:1000px;
  	width:90%;
  	height:470px;
  	background-color:#3399ff;
  	margin:50px;

  }

  .about{
  	position: absolute;
  	top:5px;
  	left:5px;
  
  	width:60%;
  	height: 450px;
  }

  .feed{
  	position: absolute;
  	top:5px;
  	left:65%;
  
  	width:30%;
  	height: 450px;
  	padding:50px;
  }

  input,textarea{
  	width:350px;
  	height:50px;
  	margin:10px;
  }

  textarea{
	height:150px;
  }
</style>
<center><h1>Features we have:</h1><center>

<div class="cnt"><center>
	<div class="box1" style='left:1%;background-image:url("kk.jpg");'>
	<div class="l1"><p>A user can register a case under severe case & action/attention to be needed category without
		revealing their identify for which they think 
		voice should be raised.</p></div>
	</div>
	<div class="box2" style='left:33%;background-image:url("ngomap.jpg");'>
	<div class="l2">
		<p>We will be letting people voting to highlight among the cases registered & share them.Users can check available nearby NGO in India.</p></div>
	</div>
	
	</div>
	<div class="box3" style='left:65%;background-image:url("news1.jpg");'>
	 <div class="l3"><p>Let the user know trending human rights related news.</p></div>
	</div>
	<div class="box4" style='top:155%;left:1%;background-image:url("vol.jpg");'>
	 <div class="l4"><p>Anyone who want to help others can become a volunteer. People can check Human Rights</p></div>
	</div>
	<div class="box5" style='top:155%;left:33%;background-image:url("rr.jpg");'>
	 <div class="l5"><p>Registered NGO's will be allowed to check complains registered on a day & mark them interested if
		willing to help & keeping track of progress.</p></div>
	</div>
	<div class="box6" style='top:155%;left:65%;background-image:url("tt.jpg");'>
	 <div class="l6"><p>A user can register a case under severe case & action/attention to be needed category without
		revealing their identify for which they think voice should be raised.</p></div>
	</center>

	<div class="feedback">
		<div class="about">
			<h1>About Us</h1>
			<h3>A user can register a case under severe case & action/attention to be needed category without
		revealing their identify for which they think 
		voice should be raised.We will be letting people voting to highlight among the cases registered & share them.Users can check available nearby NGO in India.Let the user know trending human rights related news.Anyone who want to help others can become a volunteer. People can check Human Rights.Registered NGO's will be allowed to check complains registered on a day & mark them interested if
		willing to help & keeping track of progress.A user can register a case under severe case & action/attention to be needed category without
		revealing their identify for which they think voice should be raised.</br></br>And for this we want your support.</br></br>Thank you</h3>
		</div>
		<div class="feed">
				<input type="text" name="nm" placeholder="Enter your name here...">
				<input type="email" name="feed" placeholder="Enter your email address...">
				<textarea placeholder="Comment..."></textarea>
				<input type="button" name="submit" value="Submit">
		</div>
	</div>
	</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body></html>
