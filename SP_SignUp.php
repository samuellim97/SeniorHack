<?php
session_start();
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "SeniorHack";
 $con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
 $sp_username=$_POST['sp_username'];
 $sp_password=$_POST['sp_password'];
 $sp_fullName=$_POST['sp_fullName'];
 $sp_mobileNo=$_POST['sp_mobileNo'];
 $sp_address=htmlspecialchars($_POST['sp_address']);
 // first check the database to make sure
 // a user does not already exist with the same username
 $sql_check = "SELECT * from user where username = '$sp_username'";
 $checkUser = mysqli_query($con, $sql_check);
 if (mysqli_num_rows($checkUser) >= 1) //user is already registered
 {
	 $message = "This username is already taken";
         echo "<script type='text/javascript'>
		 alert('$message');
		 window.location.href='SignUp.php';
        </script>";

 }

 else {
  $sql = "INSERT INTO account (username,password,fullName,mobileNo,address,type)
         VALUES ('$sp_username','$sp_password','$sp_fullName','$sp_mobileNo','$sp_address','SP')";
	if(mysqli_query($con, $sql)){
		$last_id = mysqli_insert_id($con);
	}
 	foreach($_POST["servicetype"] as $servicetype){
	  $service_fk = mysqli_query($con,"SELECT * FROM servicetype where serviceDescription = '$servicetype'");
	  $row = $service_fk->fetch_array();
	  $service_info = $row['serviceCode'];
	  mysqli_query($con,"INSERT INTO providerInfo (username,serviceCode) values ('$sp_username','$service_info')");
	}

		  $message = "Account Registered!";
         echo "<script type='text/javascript'>
		 alert('$message');
		 window.location.href='homepage.php';
        </script>";


 }

 mysqli_close($con);

?>
