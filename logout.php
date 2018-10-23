<?php
  session_start();
  unset($_SESSION["username"]);
  unset($_SESSION["fullname"]);
  unset($_SESSION["contact"]);
  unset($_SESSION["address"]);
  unset($_SESSION["type"]);
  header("Location: homepage.php");
?>
