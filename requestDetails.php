<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "seniorhack";
$con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
$username = $_SESSION['username'];

// getting request //
$requestID = $_GET["requestID"];
$result = "SELECT* FROM servicerequest WHERE requestID=$requestID;

$request = msqli_fetch_object($result);
echo json_encode($p_result);


?>
