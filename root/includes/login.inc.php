<?php  

session_start();

if (isset($_POST['submit'])) {
	include 'dbconn.php';
	$username = mysqli_real_escape_string($db_conn, $_POST['username']);
	$password = mysqli_real_escape_string($db_conn, $_POST['password']);

	// error handlers
	// check if inputs are empty
	if ( empty($username) || empty($password) ) {
     header("Location: ../index.php?login=error");
     exit();		
	}else{
      $sql = "SELECT * FROM users WHERE username='$username' or email='$username'";
      $result =mysqli_query($db_conn, $sql);
      $resultCheck = mysqli_num_rows($result);                
      if ($resultCheck > 1) {
     header("Location: ../index.php?login=error");
     exit();
      }else{
      	if ($row = mysqli_fetch_assoc($result)) {
      		// de-hashing the password
      		$hashedpasswordCheck = password_verify($password, $row['password']);
      		if ($hashedpasswordCheck == false) {
     header("Location: ../index.php?login=error");
     exit();      			
      		}elseif ($hashedpasswordCheck == true) {
      			// this is login the user here
      			$_SESSION['u_id'] = $row['id'];
      			$_SESSION['u_username'] = $row['username'];
				    $_SESSION['u_location'] = $row['location'];
      			$_SESSION['u_email'] = $row['email'];
      			
     header("Location: ../loggedin.php?login=success");
     exit();
      		}

      	}
      }
	} 

}else {
     header("Location: ../index.php?login=error");
     exit();
}