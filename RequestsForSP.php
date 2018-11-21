<?php
    session_start();
    require('dbh.php');
    $username = $_SESSION['username'];

    $p_sql = "SELECT* FROM servicerequest INNER JOIN servicetype ON servicerequest.serviceCode = servicetype.serviceCode
    INNER JOIN account ON servicerequest.sID = account.username AND status = 'pending' ORDER BY date DESC";
    $p_result = mysqli_query($con, $p_sql);
    $p_row_count = mysqli_num_rows($p_result);

    $u_sql = "SELECT* FROM servicerequest INNER JOIN servicetype ON servicerequest.serviceCode = servicetype.serviceCode
    INNER JOIN account ON servicerequest.sID = account.username AND status = 'accepted' ORDER BY date DESC";
    $u_result = mysqli_query($con, $u_sql);
    $u_row_count = mysqli_num_rows($u_result);

    $h_sql = "SELECT* FROM servicerequest INNER JOIN servicetype ON servicerequest.serviceCode = servicetype.serviceCode
    INNER JOIN account ON servicerequest.sID = account.username WHERE status = 'completed' OR status = 'cancelled' ORDER BY date DESC";
    $h_result = mysqli_query($con, $h_sql);
    $h_row_count = mysqli_num_rows($h_result);

    $result = $con->query("SELECT * FROM `servicerequest` INNER JOIN servicetype ON servicerequest.serviceCode = servicetype.serviceCode
      INNER JOIN account ON servicerequest.sID = account.username ORDER BY date DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manage Requests</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Request.css">
    <link rel="stylesheet" href="css/SeniorHack.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<style>
body{background-color:#f0f3f5;}
.topnav {display:inline;}
.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
   color:white;
   background-color:#0B7A75;}
.nav_style {
 background-color:#0B7A75;
 border:none;}
.topnav li a{
 text-align:center;
 color:white !important;
 padding-right: 35px;
 padding-left: 35px;}
.logo {
 margin-top:-1%;
 height:50px;}
.button.active {
 background-color:#7b2d26 !important;
 color:white;
 border: 2px solid white;}
@media only screen and (max-width: 750px)
 {.log-out { margin:auto;
 display:block;
 width:25%;}}
@media only screen and (min-width: 750px){
.log-out {
 margin-right:2%;}}
 @media only screen and (min-width: 1000px){
.logo {
margin-right:auto;
margin-left:auto;}}
 @media only screen and (max-width: 1000px){
.center_btn{
 text-align:center;}}
 #btn-logout {
 	border-color:white ;
 	background:#0B7A75;
 	color:white;}
 #banner {
 overflow-x: hidden;
     height: 100%;}
  @media only screen and (max-width: 1300px){
  #banner{
   width:100%;
   height:500px;}}
 #banner{
 background:url(img/sp-banner.png) no-repeat top center fixed;
 background-size:cover;
	height:450px;
	width:100%;}
.banner-title{
	margin-top:8%;
	font-family:sans-serif;
	text-align:right;
	font-size:38px;}
@media only screen and (max-width: 1200px)
  {.banner-title {
  text-align:center;
  position:relative;
  font-size:31px;
  margin-top:15%;
  }}
  .page-footer{
  background-size:cover;
  	width:100%;
  	text-align:center;
  	background-color:#d7c9aa;}
  	#defaultOpen{background-color:}
  .modal-dialog{
    max-width:300px;
  }
  .modal-content{
    max-width:300px;
  }
</style>
<header>
  <!-- Navigation bar-->
  <div id="banner">
  <nav class="navbar navbar-default nav_style navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav logo">
          <li><a href="#"><img src="img/logo.png" alt="SeniorHack Logo" class="logo"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-center topnav">
  		<li><a href="#" id="defaultSelected"> Requests</a></li>
  		<li><a href="#">Contact Us</a></li>
  		<li><a href="helpcentre.html">Help</a></li>
    </ul>
    <!--Log Out-->
     <div class="collapse navbar-collapse" id="cl-mainNavbar">
      <a href="homepage.php" type="button" id="btn-logout" class="btn btn-default navbar-btn navbar-right log-out" >Log Out</a>
    </div>
    </div>
  </nav>
<div class="container">
<div class="row"><br><br><br>
<div class="banner-title col-lg-9 col-lg-offset-3 col-md-9 col-sm-10"><p>We can't help everyone, </p><p style="margin-top:-2%">but everyone can help</p>
<p style="margin-top:-2%">SOMEONE</p>
<a href="#pending" class="btn btn-info" id="next" role="button" style="margin-top:-2%">Review Requests</a>
</div>
</div>
</div>
</div>
</header>
<body>

  <div class="container"  style="margin-top:3%">
    <div class="row">
  <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
  <!--Pending Requests, Upcoming Requests and History Tabs-->
    <ul class="tab nav nav-pills">
      <li style="width:30%; padding-right: 2%" ><a class="btn btn-lg btn-default" id="defaultOpen" data-toggle="tab" href="#pending">Pending</a></li>
  	  <li style="width:34%; padding-right: 2%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#upcoming">Upcoming</a></li>
      <li style="width:28%; padding-right: 2%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#history">History</a></li>
    </ul>
  </div>
  <br>
  <div class="tab-content" id="open">
  <!--Pending Requests Tab-->

  <div id="pending" class="tab-pane fade in active ">
  <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
  <br>
  <div style="text-align:center">
  <h5><b>Sort by:</b></h5><form action"" method="post">
      <label class="radio-inline">
        <input type="radio" name="sortByRB" value="date" checked>Date
      </label>
      <label class="radio-inline">
        <input type="radio" name="sortByRB" value="serviceType">Service Type
      </label>
    </form></div>
    <?php

    $sortByRB= $_POST ['sortByRB'];
    if ($sortByRB == 'serviceType')
    $p_sql = "SELECT* FROM servicerequest INNER JOIN servicetype ON servicerequest.serviceCode = servicetype.serviceCode
    INNER JOIN account ON servicerequest.sID = account.username AND status = 'pending' ORDER BY serviceCode DESC";
    ?>
        	<?php if ($p_row_count == 0) {
  					echo "<p style='text-align:center'>No pending requests at the moment</p>";
  				}
  				else {
  					while ($row = mysqli_fetch_array($p_result)) {
          ?>

          <?php $date = date("d/m/y", strtotime($row['date'])); ?>
          <?php $time = date("h:ia", strtotime($row['time'])); ?>
          <?php $requestID = $row['requestID']; ?>

  <div class="col-lg-6 col-md-6 col-sm-6" >
  <table id="tblPending" class="tbl">
  	<tr>
  		<td>
  		<p style="margin:8px 13px"><span class="statusPending">pending</span>
  		<span style="float:right"><?php echo $date, " ",$time; ?></span>
  		<br><span style="font-size:12px"><br>Request ID <?php echo $row["requestID"]; ?></span>
  		<br><span style="font-size: 14px; color: #483D8B">Senior: <?php echo $row["fullName"]; ?></span>
      <br>
  		<div class="bottom-info">
  		<span style="font-size:12px"> <?php echo $row["serviceDescription"]; ?></span>
      <a class="btn btn-sm btn-default" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['requestID']; ?>" style="float:right; margin-bottom:10px">edit</a>
      <a class="btn btn-sm btn-default" data-toggle="modal" data-target="#viewModal" data-whatever="<?php echo $row['requestID']; ?>" style="float:right; margin-bottom:10px">view</a>

      </div></p>

  		</td>
  	</tr>
  </table>
  </div>
  <?php }} ?>
  </div>
  </div>
  <br>

<!-- End of Pending Requests Tab -->
<!-- Upcoming Requests Tab-->

<div id="upcoming" class="tab-pane fade">
<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
<br>
<div style="text-align:center">
<h5><b>Sort by:</b></h5><form>
    <label class="radio-inline">
      <input type="radio" name="sortByRB"  value="date" checked>Date
    </label>
    <label class="radio-inline">
      <input type="radio" name="sortByRB" value="serviceType">Service Type
    </label>
  </form></div>
  <?php

  $sortByRB= $_POST ['sortByRB'];
  if ($sortByRB == 'serviceType')
  $u_sql = "SELECT* FROM servicerequest INNER JOIN servicetype ON servicerequest.serviceCode = servicetype.serviceCode
  INNER JOIN account ON servicerequest.sID = account.username AND status = 'accepted' ORDER BY serviceCode DESC";
  ?>

        <?php if ($u_row_count == 0) {
          echo "<p style='text-align:center'>No upcoming requests at the moment</p>";
        }
        else {
          while ($row = mysqli_fetch_array($u_result)) {
        ?>

        <?php $date = date("d/m/y", strtotime($row['date'])); ?>
        <?php $time = date("h:ia", strtotime($row['time'])); ?>
        <?php $requestID = $row['requestID']; ?>

<div class="col-lg-6 col-md-6 col-sm-6" >
<table id="tblUpcoming" class="tbl">
  <tr>
    <td>
    <p style="margin:8px 13px"><span class="statusAccepted">accepted</span>
    <span style="float:right"><?php echo $date, " ",$time; ?></span>
    <br><span style="font-size:12px"><br>Request ID <?php echo $row["requestID"]; ?></span>
    <br><span style="font-size: 14px; color: #483D8B">Senior: <?php echo $row["fullName"]; ?></span>
    <br>
    <div class="bottom-info">
    <span style="font-size:12px"> <?php echo $row["serviceDescription"]; ?></span>
    <a class="btn btn-sm btn-default" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['requestID']; ?>" style="float:right; margin-bottom:10px">edit</a>
    <a class="btn btn-sm btn-default" data-toggle="modal" data-target="#viewModal" data-whatever="<?php echo $row['requestID']; ?>" style="float:right; margin-bottom:10px">view</a>

    </div></p>

    </td>
  </tr>
</table>
</div>
<?php }} ?>
</div>
</div>
<br>
<!-- End of Upcoming Requests Tab -->
<!-- Requests history Tab-->

<div id="history" class="tab-pane fade">
<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
<br>
<div style="text-align:center">
<h5><b>Sort by:</b></h5><form>
    <label class="radio-inline">
      <input type="radio" name="sortByRB" checked>Date
    </label>
    <label class="radio-inline">
      <input type="radio" name="sortByRB">Service Type
    </label>
  </form></div>
        <?php if ($h_row_count == 0) {
          echo "<p style='text-align:center'>No upcoming requests at the moment</p>";
        }
        else {
          while ($row = mysqli_fetch_array($h_result)) {
        ?>

        <?php $date = date("d/m/y", strtotime($row['date'])); ?>
        <?php $time = date("h:ia", strtotime($row['time'])); ?>
        <?php $requestID = $row['requestID']; ?>

<div class="col-lg-6 col-md-6 col-sm-6" >
<table id="tblUpcoming" class="tbl">
  <tr>
    <td>
    <p style="margin:8px 13px">
    <?php if ($row['status'] == 'completed'){
          echo '<span class="statusCompleted">completed';
        } else if ($row['status'] == 'cancelled'){
          echo '<span class="statusCancelled">cancelled';
    } ?>
    </span>
    <span style="float:right"><?php echo $date, " ",$time; ?></span>
    <br><span style="font-size:12px"><br>Request ID <?php echo $row["requestID"]; ?></span>
    <br><span style="font-size: 14px; color: #483D8B">Senior: <?php echo $row["fullName"]; ?></span>
    <br>
    <div class="bottom-info">
    <span style="font-size:12px"> <?php echo $row["serviceDescription"]; ?></span>
    <a class="btn btn-sm btn-default" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['requestID']; ?>" style="float:right; margin-bottom:10px">edit</a>
    <a class="btn btn-sm btn-default" data-toggle="modal" data-target="#viewModal" data-whatever="<?php echo $row['requestID']; ?>" style="float:right; margin-bottom:10px">view</a>

    </div></p>

    </td>
  </tr>
</table>
</div>
<?php }} ?>
</div>
</div>
<br>
<!-- End of Requests History Tab -->
</div>
</div>
</div>




<!-- Request Edit Details Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editModalLabel">Edit Service Request</h4>
            </div>
            <div class="dash">

            </div>

        </div>
    </div>
</div>

<!-- Request View Details Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="dash">

            </div>

        </div>
    </div>
</div>




<!-- Footer -->
<footer class="page-footer" style="color:black">
<div class="row">

  <!-- Copyright -->
  <div class="col-lg-4 col-md-12"  style="margin-top:1%;margin-bottom:1%">Contact Us At <br><span style="font-size:18px;font-weight:bold;"> 1300-88-2525</span>
  </div>
  <div class="col-lg-4 col-md-12" style="margin-top:1%;margin-bottom:1%">&copy;Copyright SeniorHack 2018 <br>All rights reserved
  </div>
  <div class="col-lg-4 col-md-12 " style="margin-top:1%;margin-bottom:1%"><a>Join Us At </a> <br>
       <a href="https://facebook.com/"><i class="fa fa-facebook-square" style="font-size:1.5em;color:black;margin-right:5%"></i></a>
		<a href="https://twitter.com/"><i class="fa fa-twitter" style="font-size:1.5em;color:black"></i></a>
  </div>
  <!-- Copyright -->
</div>
</footer>
  <!-- Footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $('#editModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "editModal.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.dash').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })
    $('#viewModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "viewModal.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.dash').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })
    //testing pop up
</script>
</body>
</html>
