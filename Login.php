<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "SeniorHack";
 $con = new mysqli($servername, $username, $password, $dbname);

 $username=$_POST['login-username'];
 $password=$_POST['login-password'];

 // first check the database to make sure 
 // a user does not already exist with the same username 
  $sql_login = mysqli_query($con, "SELECT * from user where username = '$username'");

  $row_cnt = $sql_login->num_rows;
  $pwdInvalid = False;
 if ($row_cnt > 0) {
     while($row = $sql_login->fetch_array()){
     $hashed_password = $row['password'];
       if ($hashed_password === $password) {
         $_SESSION['username'] = $username;
         $_SESSION['fullname'] = $row['fullname'];
         $_SESSION['contact'] = $row['contact'];
         $_SESSION['address'] = $row['address'];
         $_SESSION['type'] = $row['type'];
         if ($_SESSION['type'] === 'S') {
           header("location: request.html");
         }
         elseif ($_SESSION['type'] === 'SP') {
           header("location: requestsforsp.html");
         }
         
         }
       else{
         $pwdInvalid = True;
        }
     }
  }else {
         $message = "Wrong username";
         echo "<script type='text/javascript'>alert('$message');
		 window.location.href='homepage.html';
        </script>";
        }
  if ($pwdInvalid){
         $message = "Wrong password";
         echo "<script type='text/javascript'>alert('$message');
		 window.location.href='homepage.html';
        </script>";
        }
 
 

 mysqli_close($con);
 
?>