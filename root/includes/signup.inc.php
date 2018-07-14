<?php 

if(isset($_POST["submit"])){
    include_once "dbconn.php";

    $username = mysqli_real_escape_string($db_conn, $_POST["username"] );
	$email = mysqli_real_escape_string($db_conn, $_POST["email"] );
	$location = mysqli_real_escape_string($db_conn, $_POST["location"] );    
    $password = mysqli_real_escape_string($db_conn, $_POST["password"] );

    // error handlers

    // check for empty fields

    if(empty($username) || empty($email) || empty($location) || empty($password)){
        header("Location: ../index.php?signup=empty");
        exit();

    } else {
    	//check if input characters are valid
         if (!preg_match("/^[a-zA-Z]*$/", $location) ) {
         	header("Location: ../index.php?signup=invalid");
         	exit();
         }else {
         	// check if email is valid

               if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          	header("Location: ../index.php?signup=email");
         	exit();    
               }else {

               $sql = "SELECT * FROM users WHERE user_username='$username'";
               $result = mysqli_query($db_conn, $sql);
               $resultCheck = mysqli_num_rows($result);

               if ($resultCheck > 0) {
          	header("Location: ../index.php?signup=usertaken");
         	exit();                        	
                        }else {
                        	// hashing the password
                        	$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
                        	//Insert the user into the database
                        	$sqla = "INSERT INTO users (username,email,password,location) VALUES ( '$username','$email', '$hashedpassword' , '$location') ; ";
                        	mysqli_query($db_conn,$sqla);

          	header("Location: ../index.php?signup=success");
         	exit();


                        }         


               }

         }


    }


}else{

	header("Location: ../index.php");
	exit();
}