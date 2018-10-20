<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "SeniorHack";
 $con = new mysqli($servername, $username, $password, $dbname);

 $s_username=$_POST['s_username'];
 $s_password=$_POST['s_password'];
 $s_name=$_POST['s_name'];
 $s_contact=$_POST['s_contact'];
 $s_address=$_POST['s_address'];


 $sql = "INSERT INTO user (username,password,fullname,contact,address,type)
         VALUES ('$s_username','$s_password','$s_name','$s_contact','$s_address','S')";

 mysqli_query($con, $sql);
 mysqli_close($con);
?>