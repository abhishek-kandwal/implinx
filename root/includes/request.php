<?php
if(isset($_POST['submit']) && isset($_POST['linxname']) )
 {
     session_start();
	 include_once"dbconn.php";
	 $uname = $_SESSION['u_username'];
	 $u_id  = $_SESSION['u_id'];
	 $e_mail = $_SESSION['u_email'];
	$linxname = $_POST['linxname'];
	 $detail = $_POST['detail'];
	   /* add outer details to the below sqla query user uploaddate set connection to db, check is it insert data in the db. */	 
	  $sql = "INSERT INTO requestedlinx(u_id,user,email,link_name,detail) VALUES ( '$u_id','$uname','$e_mail','$linxname','$detail') ; ";
      $query=mysqli_query($db_conn,$sql);
	  if($query)
	  {
		  
		  header("location: ../home.php");
		 
	  }else{
		  echo"no";
	  }
 }else 
    {  

		header("location: ../home.php");
	}
?>	