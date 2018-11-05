<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "SeniorHack";
 $con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

$date = $_POST['date'];
$time = $_POST['time'];
$notes = htmlspecialchars($_POST['notes']);
//get logged in username
$logedInUsername = $_SESSION['username'];
$sqlUser = mysqli_query($con,"SELECT userID FROM account where username = '$logedInUsername'");
$row = $sqlUser->fetch_array();
$currentUser = $row['userID'];
//get service type
$serviceCode = $_POST['serviceCode'];
//get serviceID from database
$service_fk = mysqli_query($con,"SELECT serviceCode FROM servicetype where serviceDescription = '$serviceCode'");
$row = $service_fk->fetch_array();
$service_info = $row['service_type'];

$sql = "INSERT INTO servicerequest(date,time,notes,status,serviceCode,sp_ID) VALUES ('$date','$time','$notes','Pending','$service_info','$currentUser')";


if(mysqli_query($con, $sql)){
		$message = "Request Submitted!";
         echo "<script type='text/javascript'>
		 alert('$message');
		window.location.href= 'requestforseniors.php#view_requests';
        </script>";
	}

 mysqli_close($con);

?>
