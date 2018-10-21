<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "SeniorHack";
 $con = new mysqli($servername, $username, $password, $dbname);

 $sp_username=$_POST['sp_username'];
 $sp_password=$_POST['sp_password'];
 $sp_name=$_POST['sp_name'];
 $sp_contact=$_POST['sp_contact'];
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
		 window.location.href='SignUp.html';
        </script>";
		
 }		
	
 else {
  $sql = "INSERT INTO user (username,password,fullname,contact,address,type)
         VALUES ('$sp_username','$sp_password','$sp_name','$sp_contact','$sp_address','SP')";
	if(mysqli_query($con, $sql)){
		$last_id = mysqli_insert_id($con);
	}	 
 	foreach($_POST["servicetype"] as $servicetype){
	  $service_fk = mysqli_query($con,"SELECT * FROM service where description = '$servicetype'");
	  $row = $service_fk->fetch_array();
	  $service_info = $row['service_type'];
	  mysqli_query($con,"INSERT INTO spinfo (userID,service_type) values ('$last_id','$service_info')");
	}	  
	 
		  $message = "Account Registered!";
         echo "<script type='text/javascript'>
		 alert('$message');
		 window.location.href='requestsforsp.html';
        </script>";
		
		 
 }
 

 mysqli_close($con);
 
?>