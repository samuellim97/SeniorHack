<?php
  session_start();
  unset($_SESSION["username"]);
  unset($_SESSION["fullName"]);
  unset($_SESSION["mobileNo"]);
  unset($_SESSION["address"]);
  unset($_SESSION["type"]);
  header("Location: homepage.php");
?>
