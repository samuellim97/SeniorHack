<?php
session_start();
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "SeniorHack";
 $con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

 //get values
 $rating=$_POST['star'];
 $comments=htmlspecialchars($_POST['comments']);
 $spID=$_POST['spID'];

 //get logged in UserName
 //$currentUser = $_SESSION['username'];
 $currentUser = "madeline1";


  $sql = "INSERT INTO review (sID, spID, rating, comments)
         VALUES ('$currentUser','$spID','$rating','$comments')";

  if (!$result = mysqli_query($con, $sql)) {
      exit(mysqli_error($con));
      }
      $message = "Review submitted!";
      echo "<script type='text/javascript'>
		  alert('$message');
		  window.location.href='UserReviewTesting.php';
      </script>";



 mysqli_close($con);

?>
