<?php
session_start();
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "SeniorHack";
 $con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if (isset($_GET["requestID"])) {
  $sql = "SELECT * FROM servicerequests WHERE requestID = '".$_GET["requestID"]."'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);
  echo json_encode($row);
}
?>
