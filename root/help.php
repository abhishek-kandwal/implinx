<?php
 							    $sql = "SELECT * FROM links where u_id = $u_id;";
                                $result = mysqli_query($db_conn,$sql);
                                $resultcheck = mysqli_num_rows($result);
								$i =0;

        if ($resultcheck>0) {
        	while ($row = mysqli_fetch_assoc($result)) { 
             $i=$i+1;			
	?>
	
	
	
			
		
	     <div class="row" style="">
	     <div class="col-xs-12" style="background-color:#ffffff; border-radius:5px; margin-top:5px;">
		 
		 <!--start of dropdown---->
		 
		 
  
		 
		 <!--end of dropdown-->

            <?php
			 echo $i .
			?>			
			
                       <div class="dropdown">
                       <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                       <span class="caret"></span> 
				
			  <?php				 				  				
				
				$row['filename'] .  				
				?>				
				</button>  				
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                
				<li>				
				linx: <a href="				
				<?php				
				$row['link_gallary']. 				
				
                ?>				
				" target="blank" style="cursor:pointer;" >				
				<?php
				$row['link_gallary'] .  				
				?>
				</a>
				</li>
				<li>
				detail:				
				<?php
				$row['description'] ;        		
				?>		       
			   </li>
		         </ul>
                </div>
		 </div>
	</div>
	<?php
		}
		}
		?>







		<!--original code-->



		<?php
 							    $sql = "SELECT * FROM links where u_id = $u_id;";
                                $result = mysqli_query($db_conn,$sql);
                                $resultcheck = mysqli_num_rows($result);
								$i =0;

        if ($resultcheck>0) {
        	while ($row = mysqli_fetch_assoc($result)) { 
             $i=$i+1;			
	?>
	
	<div class="row" style="margin-bottom:20px;">
	     <div class="col-xs-12" style="background-color:#ffffff; border-radius:5px; margin-top:5px;">
		 
		 <!--start of dropdown---->
		 
		 <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <span class="caret"></span> Dropdown
    
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
		 
		 <!--end of dropdown-->
		 <?php
        		echo $i ." <br> name: " .  $row['filename'] . "<br> linx: <a href=' ". $row['link_gallary'] ."' target='blank' style='cursor:pointer;'> ". $row['link_gallary'] . "</a> <br> detail: " . $row['description'] . "<br>";
        		?>
		 
		 </div>
	</div>
	
	<?php
			}
		}	
	?>

	<!--footer code-->

	<div id="pagebottom">
	   <nav class="navbar-fixed-bottom" > 
	      <div class="container-fluid" style="background-color:#EBEBEB; height:60px;">
		  <div class="container" style="background-color:#F8F8F8;">
		    <div class="row " style="background-color:#EBEBEB;">
			   <div class="col-xs-2">
			   <a href="profile.php"> <img src="images\icons\profile.png" class="iconsize"title="PROFILE"> </a> <br> <p style="font-size:10px;text-align:left;">profile<p>
			   </div>
			   <div class="col-xs-2">
			   <a href="notification.php"> <img src="images\icons\notification.png" class="iconsize"title="NOTIFICATION"> <br>  </a> <p style="font-size:10px;text-align:left;">notification<p>
			   </div>
			   
			   <div class="col-xs-2">

			   <img src="images\icons\addfile.png" class="iconsize" title="ADD LINX" data-toggle="modal" data-target="#myModal"> <br> <p style="font-size:10px;text-align:left;">+ linx<p>			   			   
			   </div>
			   
			   <div class="col-xs-2">
			   <a href="connectedto.php"> <img src="images\icons\connection.png" class="iconsize" title="CONNECTION"> </a> <br> <p style="font-size:10px;text-align:left;">connection<p> 
			   </div>
			   <div class="col-xs-2">
			   <a href="request.php"> <img src="images\icons\request.png" class="iconsize" title="REQUEST">   </a> <br> <p style="font-size:10px;text-align:left;">request<p>
			   </div>
			   <div class="col-xs-2">
			   <a href="home.php"> <img src="images\icons\home.png" class="iconsize" title="HOME">  </a> <br> <p style="font-size:10px;text-align:left;">home<p>
			   </div>			   
			  </div>
			 </div> 
			</div>
		  </div>
	   </nav>
</div>

</body>
</html>