
<?php
      include_once"includes/header.php";
	  $u_id  = $_SESSION['u_id'];
	  $uname = $_SESSION['u_username'];
	  $location = $_SESSION['u_location'];
?>
<script>
    function opentab(changecss)
	{
		document.getElementById('upandreq').setAttribute('href',changecss);
	}
</script>

<div class="container-fluid" style="margin-top:60px;">
    <div class="container">
	<div class="row">

       	 <div class="col-xs-6" style="background-color:; height:150px;">
		 <div style="margin-top:12px;;">
		 <img class="img-responsive img-circle" style="text-align:center;margin:0px auto; width:100px; height:100px;" src="images/profilepix/img.jpg"></div>
		 <div class="" style="text-align:center; font-size:20px;">
		 <?php
		      echo $uname;
		 ?>
		 </div>
		 </div>
		 
		 <div class="col-xs-6" style="height:150px;">
		 <div class="" style="float:right; margin-top:5px; ">
		 <a href="editprofile.php" >
		 <img src="images/icons/editprofile.png" class="ediicon" style="">
		 </a>
		 </div>
		 </div>
	
	</div>
	
	<div class="row" style="background-color:#F8F8F8; height:50px; border-radius:5px; margin-top:5px;">
	     <div class="col-xs-6" >
		 <button onclick="opentab('style/upload.css')" class="probtnr">uploads</button>
		 </div>
		 <div class="col-xs-6" style="float:left;">
		 <button onclick="opentab('style/request.css')" class="probtnl">requested</button>
		 </div>	     
	</div>
	</div>
	<!--code tabs-->
	<div class="container">
	  <div class="row" style="height:500px; background-color:#999; margin-top:6px;border-radius:5px;font-family:arial;">
<!--start of upload tab-->
   	  <div class="tabup"> 
		 <div  class="col-xs-12 content1">
              <h1>uploaded linx</h1>
		</div>	  
<!--margin for linx-->                
        <div class="uplinx" ></div>
<!--margin for linx-->
<!--start of code inside upload tab-->
		<!--php code start here for repeat of linx-->
	
<?php
 							    $sql = "SELECT * FROM links where u_id = $u_id;";
                                $result = mysqli_query($db_conn,$sql);
                                $resultcheck = mysqli_num_rows($result);
								$i =0;

        if ($resultcheck>0) {
        	while ($row = mysqli_fetch_assoc($result)) { 
             $i=$i+1;			
?>
	
		<div class="uplinx1">
		<!--start of dropbutton-->
        <div style="float:left;">

				<div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#f8f8f8; margin:0px;width:120px;height:50px;">
                <span class="caret"></span>                 
<?php
                echo $row['filename'];
?>				
                
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li class="droplinx"><a href=" <?php echo $row['link_gallary'];?>" target="blank" class="dropa">
<?php
                echo $row['link_gallary'];
?>				
				</a></li>
				 <li class="dropdes"><a class="dropa">
<?php
                echo  $row['description'];
?>				 
				 </a></li>
                </ul>
                 </div>
		
	    </div>
		<!--end of dropbutton-->
		
		<!--start of linx option-->
		<div style="float:right;margin:0px;padding:3px;">
		  <div >
		   <img class="linxbtn" src="images/icons/copy.png">
		   <img class="linxbtn" src="images/icons/linkposticon.png">
		   <img class="linxbtn" style="padding:5px;" src="images/icons/shareicon.png">
		  </div>
		</div>
		<!--end of linx option-->
		</div>
<?php
			}
		}	else {
			echo '
			       <div style="margin:0px auto; margin-top:100px; color:#ffffff;text-align:center;">
				       <h3> <span>&#43;</span> no linx added yet</h3>
				   </div>
			';
		}
?>		
	<!--php code end here for repeat of linx-->	
 <!--end of code inside upload tab-->
		 
	</div>

<!--end of upload tab-->		
<!--@ start of req tab-->	

   	  <div class="tabreq"> 
		 <div  class="col-xs-12 content2">
              <h1>requested linx</h1>
		</div>	  
<!--margin for linx-->                
        <div class="uplinx" ></div>
<!--margin for linx-->
<!--start of code inside upload tab-->
		<!--php code start here for repeat of linx-->
	
<?php
 							    $sql = "SELECT * FROM requestlink where u_id = $u_id;";
                                $result = mysqli_query($db_conn,$sql);
                                $resultcheck = mysqli_num_rows($result);
								$i =0;

        if ($resultcheck>0) {
        	while ($row = mysqli_fetch_assoc($result)) { 
             $i=$i+1;			
?>
	
		<div class="uplinx1">
		<!--start of dropbutton-->
        <div style="float:left;">

				<div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#f8f8f8; margin:0px;width:120px;height:50px;">
                <span class="caret"></span>                 
<?php
                echo $row['filename'];
?>				
                
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li class="droplinx"><a href=" <?php echo $row['link_gallary'];?>" target="blank" class="dropa">
<?php
                echo $row['req_link'];
?>				
				</a></li>
				 <li class="dropdes"><a class="dropa">
<?php
                echo  $row['description'];
?>				 
				 </a></li>
                </ul>
                 </div>
		
	    </div>
		<!--end of dropbutton-->
		
		<!--start of linx option-->
		<div style="float:right;margin:0px;padding:3px;">
		  <div >
		   <img class="linxbtn" src="images/icons/copy.png">
		   <img class="linxbtn" src="images/icons/linkposticon.png">
		   <img class="linxbtn" style="padding:5px;" src="images/icons/shareicon.png">
		  </div>
		</div>
		<!--end of reqlinx option-->
		</div>
<?php
			}
		}	else {
			echo '
			       <div style="margin:0px auto; margin-top:100px; color:#ffffff;text-align:center;">
				       <h3>  no linx requested yet</h3>
				   </div>
			';
		}
?>		
	<!--php code end here for repeat of linx-->	

<!--@ end of req tab-->	
	  </div>	
	</div>
	
    <!--code tab ended-->
	<!--this is the linx code of the profile user-->
	
	
 	
	<!--this is the end of the linx code-->
	


	
<!--this is for the bottom margin-->
<div style="margin-bottom:100px;"></div>
</div>
<?php
       include_once"includes/footer.php";
?>

