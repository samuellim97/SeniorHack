<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "SeniorHack";
 $con = new mysqli($servername, $username, $password, $dbname);

 $s_username=$_POST['s_username'];
 $s_password=$_POST['s_password'];
 $s_name=$_POST['s_name'];
 $s_contact=$_POST['s_contact'];
 $s_address=htmlspecialchars($_POST['s_address']);

 // first check the database to make sure 
 // a user does not already exist with the same username 
 $sql_check = "SELECT * from user where username = '$s_username'"; 
 $checkUser = mysqli_query($con, $sql_check);
 if (mysqli_num_rows($checkUser) >= 1) //user is already registered
 {
	 session_destroy();
	 $message = "This username is already taken";
         echo "<script type='text/javascript'>
		 alert('$message');
		 window.location.href='SignUp.php';
        </script>";
 }		
	
 else {
  $sql = "INSERT INTO user (username,password,fullname,contact,address,type)
         VALUES ('$s_username','$s_password','$s_name','$s_contact','$s_address','S')";
		 $message = "Account Registered!";
         echo "<script type='text/javascript'>
		 alert('$message');
		 window.location.href='homepage.php';
        </script>";
		mysqli_query($con, $sql);
 }
 

 mysqli_close($con);
 
?>