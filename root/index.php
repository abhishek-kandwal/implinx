

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>implinx</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/css/bootstrap.css"> 
<style type="text/css">
<?php
 include_once"style/style.php";
?>
</style>
</head>

<body>
<script type="text/javascript" src="style\jquery\jquery-3.2.1.js"></script>
<script type="text/javascript" src="style\js\bootstrap.js"></script>

<header>
<nav class="navbar-fixed-top" >
  <div class="container-fluid" style="background-color:#EBEBEB; height:50px;">
		  <div class="container" >
		    <a class="" href="index.php" ><img src="images\icons\logo.png" class="weblogo"></a>
		  </div>
  </div>	  
</nav>


</header>

<section>

        <div class="logbox">
            <?php
			  if(empty($_POST['signinopt'])){
		       echo'<div class="form">
			<form action="includes/login.inc.php" method="POST">
			 <input type="username" name="username"  placeholder="username" class="formdes"> <br>
			 <input type="password" name="password"  placeholder="password" class="formdes"> <br>
			 <input type="submit" name="submit" value="login" class="btn btn-primary btndes">
			</form>			
			  </div>
			  
			  <div><br>
		                <form action="index.php" method="POST">
						<p>setup a new account</p>
						<input type="submit" name="signinopt" value="signup" class="btn btn-success btndes">
						</form>
	   
		   </div>
			  
			  ';}
			  
			  elseif(isset($_POST['signinopt'])){
			
			  echo'<div class="form">
			<form action="includes/signup.inc.php" method="POST">
			 <input type="username" name="username"  placeholder="username" class="formdes"> <br>
			 <input type="text" name="email"  placeholder="e-mail" class="formdes"> <br>
			 <input type="text" name="location"  placeholder="location" class="formdes"> <br>
			 <input type="password" name="password"  placeholder="password" class="formdes"> <br>
			 <input type="submit" name="submit" value="sign up" class="btn btn-primary btndes">
			</form>			
			  </div>
			  
			  			  <div><br>
                     	<form action="index.php" method="POST">
				        <p>already has an account</p>
						<input type="submit" name="loginopt" value="login" class="btn btn-success btndes">
						</form>	   
		   </div>
			  
			  ';}
			
            ?>
           <div><br>

			
	   </div>	

</section>

<footer>
</footer>

</body>
</html>