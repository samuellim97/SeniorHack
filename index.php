<?php
session_start();
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "SeniorHack";
 $con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
$username = $_SESSION['username'];
$sql_select_service = "SELECT requestID, date, time,status, sp_ID FROM request WHERE sp_ID =10002";
if ($result_select_service = $con->query($sql_select_service)) {
	$row_count_select_service =mysqli_num_rows($result_select_service);
	if ($row_count_select_service>0) {
		$i = 1;
		while($row_select_service=mysqli_fetch_assoc($result_select_service)) {
			$requestID_selected_service[$i] = $row_select_service['requestID'];
			$date_selected_service[$i] = $row_select_service['date'];
			$time_selected_service[$i] = $row_select_service['time'];
			$status_selected_service[$i] = $row_select_service['status'];
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Request</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/Request.css">
  <link rel="stylesheet" href="css/SeniorHack.css" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</body>
   <style>
   .topnav {display:inline;}
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
	padding-right: 30px;
	padding-left: 30px;}
.logo {
  margin-top:-1%;
  height:50px;}
 .button.active {
	background-color:#7b2d26 !important;
	color:white;
	border: 2px solid white;
}
@media only screen and (max-width: 750px)
  {.log-out{ margin:auto;
  display:block;
  width:25%;
  }}
@media only screen and (min-width: 750px){
 .log-out {
margin-right:2%;
  }
  }
  @media only screen and (min-width: 1000px){
 .logo {
margin-right:auto;
margin-left:auto;
  }
  }
  @media only screen and (max-width: 1000px){
 .center_btn{
  text-align:center; 
  }
  }
  html,
body,
header,
#banner {
overflow-x: hidden;
    height: 100%;
}
 @media only screen and (max-width: 1300px){
 header,#banner{
  width:100%;
  height:500px;
  
  }
  }
  #banner{
 background:url(img/request-banner.png) no-repeat top center fixed;
    background-size: cover;}
	
	.navbar .navbar-toggle .icon-bar {
}
#btn-logout {
	border-color:white ;
	background:#0B7A75;
	color:white;
}
.navbar .navbar-header{margin-left:86%;}
.banner-title {
	margin-top:15%;
  }
  @media only screen and (max-width: 700px) 
  {.banner-title { 
  margin-top:40%;
  }}
  
.font {font-size:17px;}
.page-footer{
background-size:cover;
	width:100%;
	text-align:center;
	background-color:#d7c9aa;}	
	#defaultOpen{background-color:}
.card{margin-top:10%;
text-align:center;}
.card-title{margin-top:-1%;}
.form-control,form{text-align:left;}
#card-hover:hover .dark-overlay {opacity:1;}
#card-hover:hover .zoomed {
    -ms-transform: scale(1.1); /* IE 9 */
    -webkit-transform: scale(1.1); /* Safari 3-8 */
    transform: scale(1.1);
}
.dark-overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: rgba(0,0,0,0.5);
}

  
  .request_card{width:500px;}
  .card-style{margin-top:12%;}
  @media only screen and (max-width: 450px) 
  {
  .card-style{margin-top:5%;}
  .card-title,  .sp-name{font-size:15px;}
  }
  @media only screen and (max-width: 600px) 
  {.request_card { 
  width:auto;}
  }
  
  

 </style>
</head>

<body>
<header>
  <!-- Start your project here-->
  
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
        <li><a href="">Service Providers</a></li>
		<li><a id="defaultSelected" > Requests</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="helpcentre.html">Help</a></li>
    </ul>
	<!--Log Out-->
   <div class="collapse navbar-collapse center_btn" >
		<button id="btn-logout" class="btn navbar-btn navbar-right log-out" data-toggle="modal" data-target="#modalLoginForm" >Log Out</button>
	</div>
  </div>
</nav>
<!--Mask-->
<div id="banner" class="view">

  <div class="mask rgba-black-strong">
 <!-- Heading -->
	<div class="container">
<!--Banner title and description-->
<div class="row"><br><br><br>
<div class="banner-title col-lg-9 col-md-9 col-sm-12"><p>We Give Seniors The Love </p><p style="margin-top:-3%">They Deserve</p></div>

<div class="banner-description col-lg-5 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12col-xs-offset-0">
<p>SeniorHack ameliorates the living standards of senior citizens by providing a platform
of service providers which will bring about convenience and comfort in their lives.</p><br>
<button class="btn btn-info" id="next" role="button">Request a Service Now</button></div>
</div>
</div>

  </div>

</div>
<!--/.Mask-->
</header>
<main>
<br><br>
<div class="container" >
  <div class="row justify-content-center">
<div class="col-lg-6 col-lg-offset-0 col-md-12 col-sm-12 " >
<!--New Request and View Requests Tabs-->
  <ul class="tab nav nav-pills" >

    <li style="width:45%; padding-right: 5%" ><a class="btn btn-default" id="defaultOpen" data-toggle="tab" href="#new_request">New Request</a><li>

    <li style="width:52%; padding-left: 3%"><a class="btn btn-default" id="openView" data-toggle="tab" href="#view_requests">View Requests</a></li>

  </ul>
</div>
</div>
<div class="tab-content" id="open">
<!--Make New Request Tab-->

    <div id="new_request" class="tab-pane fade in active ">
	<div class="row justify-content-lg-center">
<div class="col-lg-10 col-lg-offset-0 col-md-12 col-sm-12 col-xs-12">
<div id="open">
<!--First Card-->
<!-- Card -->
<div class="col-lg-6 col-md-12 col-sm-12">
<div class="card">
  <div class="view overlay">
    <img class="card-img-top" src="img/driver.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body" >

    <!-- Title -->
    <h3 class="card-title">Driver</h3>
    <!-- Text -->
	<p class="grey-text">To provide secure and timely driving services to transport senior citizen and/or goods.</p>
    <!-- Button -->
    <a href="#" class="btn purple-gradient" data-toggle="modal" data-target="#requestForm">Book Now !</a>

  </div>
</div>
</div>
<!--First Card-->
<div class="col-lg-6 col-md-12 col-sm-12">
<!-- Card -->
<div class="card">
  <div class="view overlay">
    <img class="card-img-top" src="img/companion.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h3 class="card-title">Companion</h3>
    <!-- Text -->
	<p class="grey-text">Emotional support and companionship for seniors who are at home.</p>
     <!-- Button -->
    <a href="#" class="btn purple-gradient">Book Now ! </a>

  </div>

</div>

</div>

<!--First Card-->
<div class="col-lg-6 col-md-12 col-sm-12">
<!-- Card -->
<div class="card">
  <div class="view overlay">
    <img class="card-img-top" src="img/meal.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h3 class="card-title">Meal Preparation</h3>
    <!-- Text -->
	<p class="grey-text">Planning, cooking and packaging of breakfast,lunch and dinner for senior citizen. </p>
    <!-- Button -->
    <a href="#" class="btn purple-gradient">Book Now !</a>

  </div>

</div>
</div>
<!--First Card-->
<div class="col-lg-6 col-md-12 col-sm-12">
<!-- Card -->
<div class="card">
  <div class="view overlay">
    <img class="card-img-top" src="img/cleaning.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h3 class="card-title">Cleaning</h3>
    <!-- Text -->
	<p class="grey-text">Cleaning, stocking and supplying designated facility areas for senior citizen. </p>
   <!-- Button -->
    <a href="#" class="btn purple-gradient">Book Now !</a>

  </div>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- Card -->

<div class="modal fade" id="requestForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width:350px">
        <div class="modal-content">
            <div class="modal-header text-center" style="color:white;background-color:#0B7A75">
                <h3 class="modal-title w-100 font-weight-bold" >New Request</h3>
                <button type="button" class="close" style="color:white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3 form-sm mb-5 pb-2">
                <form action="request.php" method="post" id="request_form">
  <!-- Material input -->
  <div class="md-form form-group mt-5" >
    <input type="date" class="form-control" id="formGroupExampleInputMD" name="date" required placeholder="Example input" >
    <label for="formGroupExampleInputMD" style="font-size:12px;margin-top:-5%">Date</label>
  </div>
  <!-- Material input -->
  <div class="md-form form-group mt-5">
    <input type="time" class="form-control" id="formGroupExampleInput2MD" name="time" required placeholder="Another input">
    <label for="formGroupExampleInput2MD" style="font-size:12px;margin-top:-5%">Time</label>
  </div>
  <div class="md-form form-group mt-5" style="padding-top:5%" >
    <input type="text" class="form-control" id="formGroupExampleInput2MD" name="notes" required placeholder="Duration of Service">
    <label for="formGroupExampleInput2MD" style="font-size:12px;margin-top:3%">Duration</label>
  </div>
  <div class="md-form form-group mt-5" style="padding-top:5%" >
    <input type="text" class="form-control" id="formGroupExampleInput2MD" name="notes" required placeholder="*Optional*">
    <label for="formGroupExampleInput2MD" style="font-size:12px;margin-top:3%">Notes</label>
  </div>
  <div class="d-flex justify-content-center" style="margin-bottom:5%">
                <button class="btn btn-default" type="submit" onclick="validations()">Submit</button>
            </div>
</form>

            </div>,...............
            
        </div>
    </div>
</div>
<div id="view_requests" class="tab-pane fade">
<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
<div></div>
<div class="col-lg-6 col-md-12 col-sm-12">
<!--Requests info displayed in notes form-->
<?php if ($row_count_select_service == 0) {
					//echo "<p>No services have been created yet</p>";
				}
				else{
					for ($i = 1; $i <=$row_count_select_service; $i++) {

echo'<div  class="card request_card" >
<div class="view" id="card-hover" >
  <img class="card-img-top zoomed " id="type_img"  alt="Card image">';
  echo"<script type='text/javascript'>
		 document.getElementById('type_img').src = 'img/driver.jpg';
</script>";
  echo '<div class="mask flex-center rgba-black-strong">
  <div class="dark-overlay "></div>
  <div class="card-img-overlay white-text zoomed card-style">';
    echo"<h3 class='card-title font-weight-bold'>Cleaning</h3>";
	
	echo'<p style="font-size:12px;margin-top:3%"><span class="card-text" id="statusColor" style="padding: 3px 14px">PENDING</span></p>';
	if($status_selected_service[$i] == 'Pending'){
	echo"<script type='text/javascript'>
		 document.getElementById('statusColor').style.backgroundColor = 'lightblue';
</script>";}
	echo"<p style='margin-top:3%' >$date_selected_service[$i], $time_selected_service[$i]</p>";
    echo'<h3 class="font-weight-bold sp-name" style="margin-top:1%">Aaron Tan</h3>';
	
	echo'</div>
	<button type="button" data-toggle="modal" data-target="#myModal"  class="btn purple-gradient" style="margin-top:50%;width:100%;display:block;margin-left:0;
margin-right:0;
padding-left:0;
padding-right:0">View More</button>
	</div>
  
</div>
</div>';
}}?>
<!-- Card -->
<!-- Card -->
</div>
</div>
</div>
<!--Edit Details Model-->
<div class="modal fade" id="detailsModal" role="dialog">
<div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header " style="padding:5px 35px;">
        <p class="modal-title"><span class="statusPending" style="float:left;margin-top:10%">pending</span><p style="margin-left:auto;margin-right:auto;margin-top:3.5%;">1/9/18, 12:00PM</p></</p>
      
         <button type="button" class="close" data-dismiss="modal">&times;</button>
	 </div>
      <div style="padding: 1% 5%; background-color: #AAAAAA;">
        Request ID S0001
      </div>
      <div class="modal-body">

        <div class="container">
          <div class="row" style="padding-top:10px; padding-bottom: 20px;margin-right:2px">
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
              <image style="height:64px; width:63px;" src="img/profile_pic.png"></image>
            </div>
            <div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-1 col-xs-6 col-xs-offset-1">
              <b>Adam</b>
              <br>012-3456789
              <br>4.5 stars
            </div>
			<div class="col-lg-1 col-lg-offset-0 col-md-1 col-md-offset-2 col-sm-2 col-xs-3 col-xs-offset-2" style="margin-top:0%;margin-left:-2%;float-right;text-align:center">
			  <button type="button" class="btn btn-info btn-xs" style="margin-top:25%;padding-left:22%;padding-right:22%">Cancel</button><br>
			  <button type="button" class="btn btn-warning btn-xs" style="margin-top:5%">Completed</button></div>
          </div>
          <div style="padding-bottom: 20px;">
            <label for="notes">notes: </label> <br> 
			<textarea name="notes" rows="3" cols="30" required ></textarea>
          </div>
        </div>
      <div class="modal-footer" style="text-Align:left">
	  <p class=" mr-auto">Type: Cleaning</p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal that shows the details of requests made -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog" style="width:350px">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:5px 35px;">
        <p class="modal-title"><span class="statusPending" style="float:left;margin-top:10%">pending</span><p style="margin-left:auto;margin-right:auto;margin-top:3.5%;">1/9/18, 12:00PM</p></</p>
      
         <button type="button" class="close" data-dismiss="modal">&times;</button>
	 </div>
      <div style="padding: 1% 5%; background-color: #AAAAAA;">
        Request ID S0001
      </div>
      <p><span style="float:left;padding:1% 5%;">Service Provider</span><a href="#detailsModal" data-toggle="modal" data-target="#detailsModal" data-dismiss="modal" id="edit">edit</a></p>
      <div class="modal-body">

        <div class="container">
          <div class="row" style="padding-top:10px; padding-bottom: 20px;">
            <div class="col-lg-1 col-md-1 col-sm-2  col-xs-2">
              <image style="height:64px; width:64px;" src="img/profile_pic.png"></image>
            </div>
            <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-1 col-xs-6 col-xs-offset-1">
              <b>Adam</b>
              <br>012-3456789
              <br>4.5 stars
            </div>
          </div>
          <div style="padding-bottom: 20px;">
            notes: pick me up at Entrance A
          </div>
        </div>
      <div class="modal-footer" style="text-Align:left">
	  <p class=" mr-auto">Type: Cleaning</p>
        <button type="button" id="close_btn" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
</div>
<!--Endddddd-->
</div>
</div>
<!--MODAL-->

<!--End of modal-->
<!-- Card -->

<!-- Card -->
</main>
<!--footer-->
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
 <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
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
<!--Open New Request Tab and Scroll to New Request Form upon clicking 'request now' button-->
$("#next").on("click", function(){
$('#defaultOpen[href="#new_request"]').tab('show');
	document.getElementById("defaultOpen").click();
	document.getElementById("open").scrollIntoView();
	
     
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
</html>
