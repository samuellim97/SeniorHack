<?php
session_start();
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "SeniorHack";
 $con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
$username = $_SESSION['username'];
if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
    $sql_select_service = "SELECT * FROM servicerequest where requestID = $id" ;
	if ($result_select_service = $con->query($sql_select_service)) {
	$row_count_select_service =mysqli_num_rows($result_select_service);
	if ($row_count_select_service>0) {
		$row_select_service=mysqli_fetch_array($result_select_service);
			$requestID_selected_service= $row_select_service['requestID'];
			$date_selected_service= $row_select_service['date'];
			$time_selected_service= $row_select_service['time'];
			$notes_selected_service= $row_select_service['notes'];
			$status_selected_service= $row_select_service['status'];
			$service_type_selected_service= $row_select_service['serviceCode'];
			$sp_selected_service= $row_select_service['spID'];	
			
			$service_fk = mysqli_query($con,"SELECT serviceDescription FROM servicetype where serviceCode = '$service_type_selected_service'");
			$row = $service_fk->fetch_array();
			$service_info = $row['serviceDescription'];
			
			$sp_fk = mysqli_query($con,"SELECT fullName,mobileNo FROM account where username = '$sp_selected_service'");
			$row = $sp_fk->fetch_array();
			$sp_info= $row['fullName'];
			$sp_mobile= $row['mobileNo'];
	}
 }
		echo "$requestID_selected_service,$date_selected_service,$time_selected_service,$sp_mobile,$notes_selected_service,$status_selected_service,$service_info,$sp_info";
	
 }
?>