<?php
session_start();
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "SeniorHack";
 $con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
$username = $_SESSION['username'];
$sql_select_service = "SELECT requestID, date, time, serviceCode, sp_ID FROM servicerequest WHERE sp_ID =10002";
if ($result_select_service = $con->query($sql_select_service)) {
	$row_count_select_service =mysqli_num_rows($result_select_service);
	if ($row_count_select_service>0) {
		$i = 1;
		while($row_select_service=mysqli_fetch_assoc($result_select_service)) {
			$requestID_selected_service[$i] = $row_select_service['requestID'];
			$date_selected_service[$i] = $row_select_service['date'];
			$time_selected_service[$i] = $row_select_service['time'];
			$type_selected_service[$i] = $row_select_service['serviceCode'];
			$sp_selected_service[$i] = $row_select_service['sp_ID'];
			$i++;
		}
	}
} else {
	$row_count_select_service = 0;
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage Requests</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/Request.css">
  <link rel="stylesheet" href="css/SeniorHack.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
 body{background-color:#f0f3f5;}
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
  width:25%;
  }}
@media only screen and (min-width: 750px){
 .log-out {
  margin-right:2%;
  }}
#banner{
 background:url(img/request-banner.png) no-repeat top center fixed;
 background-size:cover;
	height:500px;
	width:100%;}
</style>
</head>
<!-- Navigation bar-->
<header>
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
        <li><a href=""><img src="img/logo.png" alt="SeniorHack Logo" class="logo"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-center topnav">
        <li><a href="findServiceProvider210.html">Service Providers</a></li>
		<li><a href="" id="defaultSelected"> Requests</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="HelpCentre.html">Help</a></li>
    </ul>
	<!--Log Out-->
   <div class="collapse navbar-collapse" id="cl-mainNavbar">
		<a href="logout.php" type="button" id="btn-logout" class="btn btn-default navbar-btn navbar-right log-out" >Log Out</a>
	</div>
  </div>
</nav>
<div class="container">
<!--Banner title and description-->
<div class="row"><br><br><br>
<div class="banner-title col-lg-9 col-md-9 col-sm-10"><p>We Give Seniors The Love </p><p style="margin-top:-3%">They Deserve</p></div>

<div class="banner-description col-lg-5 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-7 col-sm-offset-0 col-xs-10 col-xs-offset-1">
<p>SeniorHack ameliorates the living standards of senior citizens by providing a platform
of service providers which will bring about convenience and comfort in their lives.</p><br>
<a href="#new_request" class="btn btn-info" id="next" role="button">Request a Service Now</a></div>
</div>
</div>

</header>

<body>
<div class="container"  style="margin-top:3%">
  <div class="row">
<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
<!--New Request and View Requests Tabs-->
  <ul class="tab nav nav-pills">

    <li style="width:46%; padding-right: 5%" ><a class="btn btn-lg btn-default" id="defaultOpen" data-toggle="tab" href="#new_request">New Request</a></li>

    <li style="width:53%; padding-left: 3%"><a class="btn btn-lg btn-default" id="openView" data-toggle="tab" href="#view_requests">View Requests</a></li>

  </ul>
</div>
<br>

<div class="tab-content" id="open">
<!--Make New Request Tab-->

    <div id="new_request" class="tab-pane fade in active ">
	<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 shadow col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
<br>
<form action="request.php" method="post" id="request_form" >
<div id="open">
  <div class="form-group">
    <label for="type">Service Type</label>
	<br>
    <input type="button" class="btn top-btn button" id="driver"  value="Driver" form="request_form">
	<input type="text" hidden name="servicetype" id="servicetype" >
	<input type="button" class="btn top-btn button"  id="companion" value="Companion" name="companion" method="post" form="request_form">
	<br>
    <input type="button" class="btn bottom-btn button"  id="cleaning" value="Cleaning" method="post" form="request_form">
	<input type="button" class="btn bottom-btn button" id="meal" value="Meal Preparation" method="post" form="request_form">
  </div>
  <br>
  <div class="form-group">
    <label for="date" >Date</label>
    <input type="date" class="form-control" id="date" name="date" required >
  </div>

  <div class="form-group">
    <label for="time">Time</label>
    <input type="time" class="form-control" id="time" name="time" required>
  </div>

  <div class="form-group">
    <label for="notes">Notes</label>
	<textarea name="notes" method="post" form="request_form" rows="3" cols="21" class="form-control" id="notes"></textarea>
  </div>


<br>
<input type="submit" onclick="validations()" class="pull-right btn btn-block btn-success" style="margin-bottom:10%">
</form>
    </div>
</div>
</div>
</div>
<!--End of New Request-->
<!--View Request Tab-->

<div id="view_requests" class="tab-pane fade">
<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
	<br>
	<div style="text-align:center">
<h5><b>Sort by:</b></h5><form>
    <label class="radio-inline">
      <input type="radio" name="optradio" checked>Service ID
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Date
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Status
    </label>
  </form></div>

	<div style="color:black">
	<br>
	<br>
<!--Requests info displayed in notes form-->
<?php if ($row_count_select_service == 0) {
					//echo "<p>No services have been created yet</p>";
				}
				else{
					for ($i = 1; $i <=$row_count_select_service; $i++) {

echo'<div class="col-lg-6 col-md-6 col-sm-6" >
<table id="tblOne" class="tbl ">
	<tr>
		<td>
		<a href="#myModal" data-target="#myModal" data-toggle="modal" style="color:black;text-decoration:none">
		<p style="margin:8px 13px"><span class="statusPending">pending</span>
		<span style="float:right">';
		echo"$date_selected_service[$i],$time_selected_service[$i]";
		echo'</span>
		<br><span style="font-size:12px">';
		echo"Request ID $requestID_selected_service[$i]";
		echo'</span>';
		echo "<br>Service Provider:";
		echo'
		<div class="bottom-info">
		<span style="font-size:12px">';
		echo "Driver";
		echo'</span>
		<p class="view-info">view</p></div></p>
		</a>
		</td>
	</tr>
</table>
</div>'; }}?>




</div>
</div>

    </div>
<!--End of View Requests-->
<!-- Modal that shows the details of requests made -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:10px 35px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <p class="modal-title"><span class="statusPending" style="float:left;margin-top:1%;">pending</span><p style="float:initial;margin-top:1.5%;">1/9/18, 12:00PM</p></</p>
      </div>
      <div style="padding: 1% 5%; background-color: #AAAAAA;">
        Request ID S0001
      </div>
      <p><span style="float:left;padding:1% 5%;">Service Provider</span><a href="#detailsModal" data-target="#detailsModal" id="edit">edit</a></p>
      <div class="modal-body">

        <div class="container">
          <div class="row" style="padding-top:10px; padding-bottom: 20px;">
            <div class="col-md-1 col-xs-2">
              <image style="height:64px; width:64px;" src="img/profile_pic.png"></image>
            </div>
            <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-1">
              <b>Adam</b>
              <br>012-3456789
              <br>4.5 stars
            </div>
          </div>
          <div style="padding-bottom: 20px;">
            notes: pick me up at Entrance A
          </div>
        </div>
      <div class="modal-footer" style="text-Align: left;">
        Type: Cleaning
        <button type="button" class="btn btn-default" style="float: right;"
        data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
</div>

<!--Edit Details Model-->
<div class="modal fade" id="detailsModal" role="dialog">
  <div class="modal-dialog">

    <!-- Edit Details Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:10px 35px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <p class="modal-title"><span class="statusPending" style="float:left;margin-top:1%;">pending</span><p style="float:initial;margin-top:1.5%;">1/9/18, 12:00PM</p></</p>
      </div>
      <div style="padding: 1% 5%; background-color: #AAAAAA;">
        Request ID S0001
      </div>
      <p><span style="float:left;padding:1% 5%;">Service Provider</span></p>
      <div class="modal-body">

        <div class="container">
          <div class="row" style="padding-top:10px; padding-bottom: 20px;">
            <div class="col-md-1 col-xs-12">
              <image style="height:64px; width:64px;" src="img/profile_pic.png"></image>
            </div>
            <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-0">
              <b>Adam</b>
              <br><p>012-3456789
              <br><button onclick="window.location.href='userreview.html'" type="button" class="btn btn-primary btn-xs" >View Rating</button></p>
			  </div>
			  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3 col-xs-offset-4" style="margin-top:0%;margin-left:-5%;float-right;text-align:center">
			  <button type="button" class="btn btn-info btn-xs" style="margin-top:25%;padding-left:22%;padding-right:22%">Cancel Service</button><br>
			  <button type="button" class="btn btn-warning btn-xs" style="margin-top:5%">Service Completed</button></div>

			</div>
          </div>
          <div style="margin-left:3%" >
            <label for="notes">notes: </label> <br>
			<textarea name="notes" rows="3" cols="30" required ></textarea>
          </div>
        </div>

      <div class="modal-footer" style="text-Align: left;width:100%">
        Type: Cleaning
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal" style="float: right"
        >Save</button>
      </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>

</div>
</div>
</div>
<footer id="footer-bg" class="footer" style="width:100%">
<div class="container">
<div class="row">

<!--Contact No-->
  <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-4">
      <p class="footer-left" style="text-indent:10px">Contact Us At <br><span style="font-size:18px;font-weight:bold;"> 1300-88-2525</span></p>
      </div>

    <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 ">
      <p class="footer_mid">&copy;Copyright SeniorHack 2018 <br>All rights reserved</p>
    </div>

<!--Links to Social Media-->
    <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-1 ">
    <ul class="social-network social-circle footer-right ">
	<a style="color:black">Join Us At </a> <br>
       <a href="https://facebook.com/"><i class="fa fa-facebook-square" style="font-size:2em;color:black;margin-right:18%"></i></a>
		<a href="https://twitter.com/"><i class="fa fa-twitter" style="font-size:2em;color:black"></i></a>
     </ul>
  </div>
</div>
</div>
</footer>

<script>
<!--Request anchor and New Request Tab are selected by default-->
$(document).ready(function() {
   var hash = window.location.hash;
   if (hash == '#new_request' || hash == '' ){
	   $('#defaultOpen').click();
   }
   else
   hash && $('ul.nav a[href="' + hash + '"]').tab('show');
});


jQuery(function(){
	$('#driver').click();
});
<!--function to make sure that no element will lose focus unless other button is chosen-->
$('.button').click(function() {
    $('.button').removeClass('active');
    $(this).addClass('active');
})
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
})
<!--Open New Request Tab and Scroll to New Request Form upon clicking 'request now' button-->
$("#next").on("click", function(){
    $('#defaultOpen[href="#new_request"]').tab('show');
	document.getElementById("open").scrollIntoView();
});
<!--show second pop up window after closing the first pop up window-->
$("#edit").on("click", function(){
    $("#myModal").modal("hide");
    $("#myModal").on("hidden.bs.modal",function(){
    $("#detailsModal").modal("show");
    });
});
document.getElementById('cleaning').onclick = function() {
   document.getElementById("servicetype").value = "Cleaning";
}
document.getElementById('companion').onclick = function() {
   document.getElementById("servicetype").value = "Companion";
}
document.getElementById('meal').onclick = function() {
   document.getElementById("servicetype").value = "Meal Preparation";
}
document.getElementById('driver').onclick = function() {
   document.getElementById("servicetype").value = "Driver";
}
function validations(){
	var value = document.getElementById("date").value;
	var mytime = document.getElementById("time").value;
	var today = new Date();
	var mydate = new Date(value);
	var currentdate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
	var userdate = mydate.getFullYear()+'-'+(mydate.getMonth()+1)+'-'+mydate.getDate();
	if (currentdate > userdate){
		alert("Please enter future date");
		document.getElementById("date").focus();
		event.preventDefault();
		return false;
	}
	var currenttime = today.getHours() + ":" + today.getMinutes();
	if (currentdate == userdate && currenttime > mytime){
		alert("Please enter future time");
		document.getElementById("time").focus();
		event.preventDefault();
		return false;
	}

}
</script>
</body>
</html>
