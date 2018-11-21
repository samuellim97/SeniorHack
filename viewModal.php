<?php
    require('dbh.php');
    $requestID = $_GET['id'];

    if (isset($_POST['submit'])) {
    	$requestID = $_POST['id'];
    	$status = $_POST['status'];
    	$notes = $_POST['notes'];
    	$con->query("UPDATE `servicerequest` SET `status`='$status', `notes`='$notes' WHERE `requestID`=$requestID");
    	header("location:RequestsForSP.php");
    }

    $requests = $con->query("SELECT * FROM `servicerequest` INNER JOIN servicetype ON servicerequest.serviceCode = servicetype.serviceCode
      INNER JOIN account ON servicerequest.sID = account.username WHERE `requestID`='$requestID'");
    $req = mysqli_fetch_assoc($requests);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Bootstrap modal</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
</head>
<style>


*, *:before, *:after {
  box-sizing: border-box;
}
.wrapper {
  &:focus {
    outline: 0;
  }
}
.reqCard {
  background: white;
  width: 300px;
  display: inline-block;
  margin: auto;
  border-radius: 19px;
  position: relative;
  text-align: center;
  box-shadow: -1px 15px 30px -12px black;
  z-index: 9999;}
.reqCard-image {
  background: url('img/example.jpeg');
  background-size: 300px 100px;
  position: relative;
  height: 100px;
  width: 300px;
  margin-bottom: 35px;}
.reqCard-reqID {
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 700;
  margin-bottom: 3px;
  color: #EC9B3B;}
.reqCard-name {
  font-size: 24px;
  color: black;
  font-weight: 900;}
.reqCard-details {
  padding: 20px;
  margin-bottom: 10px;}
.reqCard-btn {
  background: #EC9B3B;
  color: white;
  font-weight: 700;
  float: left;
  width: 50%;
  padding: 17px 12px;
  border-right: 1px solid #BD7C2F;
  position: relative;
  font-size: 24px;
  text-align: center;
}
th, td {
  height: 30px;
}

</style>
<body>
  <!-- Request Details Card -->
  <div class="wrapper">
    <div class="reqCard">
      <div class="reqCard-image">
        <?php
        if ($req['status'] == 'pending') {
        echo '<span class="statusPending" style="float:left;margin: 3%;">';
      } else if ($req['status'] == 'accepted'){
        echo '<span class="statusAccepted" style="float:left;margin: 3%;">';
      } else if ($req['status'] == 'completed'){
        echo '<span class="statusCompleted" style="float:left;margin: 3%;">';
      } else if ($req['status'] == 'cancelled'){
        echo '<span class="statusCancelled" style="float:left;margin: 3%;">';
      } ?>
        <?php echo $req['status']; ?></span>
      </div>
      <div class="reqCard-reqID">Req ID <?php echo $req['requestID']; ?></div>
      <div class="reqCard-name"><?php echo $req['fullName']; ?></div>
      <div class="reqCard-details">
        <table style="width: 70%; margin-bottom: 2%; margin-left: 15%; margin-right: 15%;text-align: center;">
          <tr>
            <th>Username</th>
            <td style="font-size: 15px">@<?php echo $req['sID']; ?></td>
          <tr>
          <tr>
            <th>Phone No.</th>
            <td style="font-size: 15px"><?php echo $req['mobileNo']; ?></td>
          </tr>
          <tr>
            <th>Service Slot</th>
            <td style="font-size: 15px"><?php echo date("d/m/y", strtotime($req['date'])); ?> <?php echo date("h:ia", strtotime($req['time'])); ?></td>
          </tr>
          <tr>
            <th>Service Type</th>
            <td style="font-size: 15px"><?php echo $req['serviceDescription']; ?></td>
          </tr>
        </table>
        <span style="font-size: 10px;">Notes:</span><br><?php echo $req['notes']; ?>
      </div>
      <?php
      if ($req['status'] == 'pending') {
      echo '<div class="reqCard-buttons">';
      echo '<div class="reqCard-btn">Accept</div>';
      echo '<div class="reqCard-btn">Reject</div></div>';
      } ?>
    </div>
  </div> <!-- end wrapper -->
   <!-- end Request Details Card -->
</body>
</html>
</body>
</html>
