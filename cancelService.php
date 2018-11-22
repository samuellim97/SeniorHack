<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "SeniorHack";
 $con = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['cancelService'])){
	$id = $_POST['requestid'];
	$sql = "UPDATE servicerequest SET status='cancelled' where requestid = $id";
}

if(mysqli_query($con, $sql)){
		$message = "Request Cancelled!";
         echo "<script type='text/javascript'>
		 alert('$message');
		window.location.href= 'requestforseniors.php#view_requests';
        </script>";
	}

 mysqli_close($con);

?>