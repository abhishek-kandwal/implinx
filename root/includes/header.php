<?php
      session_start();
      include_once"includes/dbconn.php";
	  $uname = $_SESSION['u_username'];
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>implinx</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/css/bootstrap.css">
<link id="upandreq" rel="stylesheet" href="style/upload.css"> 
<script src="js/main.js">
</script>
<style type="text/css">
<?php
  include_once"style/style.php";
?>
</style>
</head>

<body>
<script type="text/javascript" src="style\jquery\jquery-3.2.1.js"></script>
<script type="text/javascript" src="style\js\bootstrap.js"></script>

<div id="pagetop">
        <div class="container">
		   <div class="row">
		    
             <nav class="navbar navbar-default navbar-fixed-top">
             <div class="container">	
              <div class="navbar-header">
			  
			    <a class="" href="home.php" ><img src="images\icons\logo.png" class="weblogo"></a>
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
			  </div>		<!-- website logo navbar-brand -->
			  <div class="collapse navbar-collapse" id="mynav">
		      <ul class="nav navbar-nav "  >
			      <li class="nav-item " >
				  <a href="search.php" id="navside">search</a></li>
				  <li class="nav-item " >
        			<a href="includes/logout.inc.php" style="color:red;" id="navside">logout</a>
				  </li>
			  </ul>
			  </div>
			  <!--end of website logo navbar-->
			  </div>
			 </nav>
		   </div>
		</div>
</div>

<!--addlinx Modal --> <!-- this is the addfile modal, this is inserted in the header file so it canbe access by every page--> 
<div id="myModaladd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color:#F8F8F8;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADD linx</h4>
      </div>
      <div class="modal-body">
        <p>
		<form action="includes/addfile.php" method="POST">
		<input type="text" name="linxname" placeholder="name" class="detailbox" > <br>
		<input type="text" name="linx" placeholder="linx" class="detailbox"> <br>
		<input type="text" name="detail" placeholder="detail" class="detailbox"> <br>
		<input type="submit" name="submit" value="SAVE LINX" style="margin:10px;" class="btn btn-default">		
		</form>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of addlinx modal-->

<!--reqlinx Modal --> <!-- this is the reqfile modal, this is inserted in the header file so it canbe access by every page--> 
<div id="myModalreq" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color:#F8F8F8;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">request linx</h4>
      </div>
      <div class="modal-body">
        <p>
		<form action="includes/request.php" method="POST">
		<input type="text" name="linxname" placeholder="name" class="detailbox" > <br>
		<input type="text" name="detail" placeholder="detail" class="detailbox"> <br>
		<input type="submit" name="submit" value="REQUEST LINX" style="margin:10px;" class="btn btn-default">		
		</form>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of reqlinx modal-->