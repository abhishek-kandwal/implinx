<?php
 if(isset($_POST['submit']) && isset($_POST['linx']) && isset($_POST['linxname']) )
 {
     session_start();
	 include_once"dbconn.php";
	 $uname = $_SESSION['u_username'];
	 $u_id  = $_SESSION['u_id'];
	 $e_mail = $_SESSION['u_email'];
	$linxname = $_POST['linxname'];
	 $linx = $_POST['linx'];
	 $detail = $_POST['detail'];
	   /* add outer details to the below sqla query user uploaddate set connection to db, check is it insert data in the db. */	 
	  $sqla = "INSERT INTO  links(u_id,email,user,link_gallary,filename,description) VALUES ( '$u_id','$e_mail', '$uname','$linx','$linxname','$detail') ; ";   
      $query=mysqli_query($db_conn,$sqla);
	  if($query)
	  {
		  header("location: ../home.php");
		 
	  }
 }else 
    {  
		header("location: ../home.php");
	}
?>
