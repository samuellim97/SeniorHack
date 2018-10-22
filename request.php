<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "SeniorHack";
 $con = new mysqli($servername, $username, $password, $dbname);

$date = $_POST['date'];
$time = $_POST['time'];
$notes = htmlspecialchars($_POST['notes']);
//get logged in username
$logedInUsername = $_SESSION['username'];
$sqlUser = mysqli_query($con,"SELECT userID FROM user where username = '$logedInUsername'");
$row = $sqlUser->fetch_array();
$currentUser = $row['userID'];
//get service type
$servicetype = $_POST['servicetype'];
//get serviceID from database
$service_fk = mysqli_query($con,"SELECT service_type FROM service where description = '$servicetype'");
$row = $service_fk->fetch_array();
$service_info = $row['service_type'];

$sql = "INSERT INTO request(date,time,notes,status,service_type,sp_ID) VALUES ('$date','$time','$notes','Pending','$service_info','$currentUser')";


if(mysqli_query($con, $sql)){
		$message = "Request Submitted!";
         echo "<script type='text/javascript'>
		 alert('$message');
		 window.location.href='requestsforsenior.php';
        </script>";
	}

 mysqli_close($con);
 
?>