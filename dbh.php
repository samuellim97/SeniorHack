<?php
<<<<<<< HEAD
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "SeniorHack";
 $con = new mysqli($servername, $username, $password, $dbname);
 ?>
=======
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "seniorhack";
$con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($con->connect_error){
  die("Connection failed: " . $con->connect_error);
}
?>
>>>>>>> 9ed8700c78fd2141252a9aebac64778d75ceb149
