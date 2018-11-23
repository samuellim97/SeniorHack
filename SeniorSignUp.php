<?php
session_start();
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "SeniorHack";
 $con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
 $s_username=$_POST['s_username'];
 $s_password=$_POST['s_password'];
 $s_fullName=$_POST['s_fullName'];
 $s_mobileNo=$_POST['s_contact'];
 $s_address=htmlspecialchars($_POST['s_address']);
 // first check the database to make sure
 // a user does not already exist with the same username
 $sql_check = "SELECT * from account where username = '$s_username'";
 $checkUser = mysqli_query($con, $sql_check);
 if (mysqli_num_rows($checkUser) >= 1) //user is already registered
 {
	 session_destroy();
	 $message = "This username is already taken";
         echo "<script type='text/javascript'>
		 alert('$message');
		 window.location.href='homepage.php';
        </script>";
 }

 else {
  $sql = "INSERT INTO account (username,password,fullName,mobileNo,address,type)
         VALUES ('$s_username','$s_password','$s_fullName','$s_mobileNo','$s_address','S')";
		 mysqli_query($con, $sql);
		 $message = "Account Registered!";
         echo "<script type='text/javascript'>
		 alert('$message');
		 window.location.href='homepage.php';
        </script>";
 }

 mysqli_close($con);

?>
