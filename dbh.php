<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "seniorhack";
$con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($con->connect_error){
  die("Connection failed: " . $con->connect_error);
}
?>
