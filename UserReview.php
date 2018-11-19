<?php
session_start();

include("dbh.php");

$username = $_SESSION['username'];
$username = "seniorTesting1";
$spID = "spTesting1";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Reviews</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/SeniorHack.css">
  <link rel="stylesheet" href="css/userReview.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
  width:25%;}}
@media only screen and (min-width: 750px){
 .log-out {
  margin-right:2%;}}
#btn-logout {
  border-color:white ;
  background:#0B7A75;
  color:white;}
#banner {
	background:url(img/signup-banner.png) no-repeat top center fixed;
	background-size:cover;
	overflow-x: hidden;
	width:100%;}
.btn span.fa-check {
	opacity: 0;}
.btn.active span.fa-check {
	opacity: 1;}
.card {
    text-align:center;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    border-radius: 5px;}
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);}
#profilePic {
    height: 100%;
    width: 100%;
    border-radius: 5px 5px 0 0;}
#card-style {
    padding: 2px 16px;}
#review_form{
    margin: 10%;}
.page-footer{
  background-size:cover;
	width:100%;
	text-align:center;
	background-color:#d7c9aa;}
	#defaultOpen{background-color:}
div.stars {
  width: 270px;
  display: inline-block;}
input.star { display: none; }
label.star {
    float: right;
    padding: 10px;
    font-size: 36px;
    color: #444;
    transition: all .2s;}
input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;}
input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;}
input.star-1:checked ~ label.star:before { color: #F62; }
label.star:hover { transform: rotate(-15deg) scale(1.3); }
label.star:before {
  content: '\f006';
  font-family: FontAwesome;}

thead, tbody {display: block;}

tbody {
    height: 100px;       /* Just for the demo          */
    overflow-y: auto;    /* Trigger vertical scroll    */
    overflow-x: hidden;  /* Hide the horizontal scroll */
}
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
        <li><a href="#"><img src="img/logo.png" alt="SeniorHack Logo" class="logo"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-center topnav">
        <li><a href="#">Service Providers</a></li>
		<li><a href="#" id="defaultSelected"> Requests</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="helpCentre.html">Help</a></li>
    </ul>
	<!--Sign In-->
   <div class="collapse navbar-collapse" id="cl-mainNavbar">
		<a href="logout.php" type="button" id="btn-logout" class="btn btn-default navbar-btn navbar-right" >Log Out</a>
	</div>
  </div>
</nav>
<!--Banner Title and Description-->
<div class="container">
<div class="row"><br><br><br>
<div class="banner-title col-lg-9 col-md-9 col-sm-10"><p>We Give Seniors The Love </p><p style="margin-top:-3%">They Deserve</p></div>

<div class="banner-description col-lg-5 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-7 col-sm-offset-0 col-xs-10 col-xs-offset-1">
<p>SeniorHack ameliorates the living standards of senior citizens by providing a platform
of service providers which will bring about convenience and comfort in their lives.</p><br>
</div>
</div>
</div>

</div>

</header>

<body>

  <!-- Profile Card -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-xs-8 col-xs-offset-2">
        <h2>User Reviews</h2>
        <br>
      </div>
    </div>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-xs-8 col-xs-offset-2">
      <div class="card">
        <img id="profilePic" src="img/img_avatar.png" alt="Avatar">
        <div id="card-style">
          <h4><b>Adam</b></h4>
          <p>012-3456789</p>
          <p>4.5 stars</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <br>
      <!--Review Form-->
      <form action="addReview.php" method="post" id="review_form"  style="text-align: center">
        <div class="form-group">
          <div id ="rating" class="stars">
         <div class="form-group">
           <label>Rate:</label>
           <fieldset class="rating" id="rating" name="rating">
             <span style="margin-top:10px"/>
             <input class="star star-5" id="star-5" type="radio" name="star" value="5">
             <label class="star star-5" for="star-5"></label>
             <input class="star star-4" id="star-4" type="radio" name="star" value="4">
             <label class="star star-4" for="star-4"></label>
             <input class="star star-3" id="star-3" type="radio" name="star" value="3">
             <label class="star star-3" for="star-3"></label>
             <input class="star star-2" id="star-2" type="radio" name="star" value="2">
             <label class="star star-2" for="star-2"></label>
             <input class="star star-1" id="star-1" type="radio" name="star" value="1">
             <label class="star star-1" for="star-1"></label>
           </fieldset>
        </div>
        </div>

        <div class="form-group">
          <label for="comments"></label>
              <textarea type="textarea" class="form-control" id="comments" name="comments" rows=4 cols="40" placeholder="What do you think?" form="review_form"></textarea>
        </div>
          <input type="hidden" name="spID" id="spID">
      <br/>
      <input type="submit" onclick="reviewValidation(this)" id="review_submit" class="pull-right btn btn-block btn-success" style="margin-bottom:10%">
      </form>

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
<!-- End of footer -->

<!-- JQuery -->
 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
 <!-- Bootstrap tooltips -->
 <script type="text/javascript" src="js/popper.min.js"></script>
 <!-- Bootstrap core JavaScript -->
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
//service provider sign up form validation
function reviewValidation() {
	var checked = $('#rating').find(':checked').length;
	if (!checked){
		alert("Please select rating stars");
		event.preventDefault();
		return false;
		}
  if(document.getElementById("comments").value=="") {
  	alert("Comments cannot be empty.");
  	document.getElementById("comments").focus();
  	event.preventDefault();
  	return false;
    }//end if
		{
		return true;
		}
	}
</script>

</body>
</html>
