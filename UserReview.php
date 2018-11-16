<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "seniorhack";
$con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
$username = $_SESSION['username'];
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
@media (min-width: 768px) {
  .navbar-nav.navbar-center {
    position: absolute;
    left: 47%;
    transform: translatex(-50%);
  }
}
#btn-logout {
 border-color:white ;
 background:#0B7A75;
 color:white;
}
#banner {
	background:url(img/signup-banner.png) no-repeat top center fixed;
	background-size:cover;
	height:500px;
	width:100%;}

  .font {font-size:17px;}
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



</style>

</head>
<!-- Navigation bar-->
<header>
<div id="banner">
<nav class="navbar navbar-default nav_style" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li><image style="height:50px; padding-left: 10%" src="img/logo.png"></image></li>
    </ul>
    <ul class="nav navbar-nav navbar-center topnav">
        <li><a href="#">Service Providers</a></li>
		<li><a href="#" id="defaultSelected"> Requests</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="helpCentre.html">Help</a></li>
    </ul>
	<!--Log Out-->
   <div class="collapse navbar-collapse" id="cl-mainNavbar">
		<a href="logout.php" type="button" id="btn-logout" class="btn btn-default navbar-btn navbar-right" >Log Out</a>
	</div>
  </div>
</nav>
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
<div class="container"  style="margin-top:3%">
  <h2 style="width:46%; margin-left:3%" >User Reviews</h2>
<br>
<div id="user_reviews">
<!--View User Reviews-->
    <div id="profile">
      <div class="row">
        <div class="col-md-4 col-xs-4">
          <image style="height:100px; width:100px; padding: 10px"
          src="img/profile_pic.png"></image>
        </div>
        <div class="col-md-8 col-xs-8" style="margin-top: 5%; padding-top: 10px";>
          Adam
          <br>012-3456789
          <br>4.5 stars
        </div>
      </div>
    </div>
    <div>
    <form action="#">
    <div class="stars">
    <div class="form-group" style="margin-top: 5%">
      Rate:
      <fieldset class="rate">
        <span style="margin-top:10px"/>
        <input class="star star-5" id="star-5" type="radio" name="star"/>
        <label class="star star-5" for="star-5"></label>
        <input class="star star-4" id="star-4" type="radio" name="star"/>
        <label class="star star-4" for="star-4"></label>
        <input class="star star-3" id="star-3" type="radio" name="star"/>
        <label class="star star-3" for="star-3"></label>
        <input class="star star-2" id="star-2" type="radio" name="star"/>
        <label class="star star-2" for="star-2"></label>
        <input class="star star-1" id="star-1" type="radio" name="star"/>
        <label class="star star-1" for="star-1"></label>
      </fieldset>
    </div>
    </div>
    <div class="form-group">
        <label for="comment"></label>
            <input type="text" class="form-control" id="comment" placeholder="What do you think?">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
<br>
<br>
<br>
</div>
<!--End of View User Reviews-->

<!--Testing template-->
<div class="container" style="margin-left: 6%">

		<div class="row">
			<div class="col-sm-3">
				<div class="rating-block">
					<h4>Average user rating</h4>
					<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>

		<div class="row" style="margin-bottom:5%">
			<div class="col-sm-7">
				<hr/>
				<div class="review-block">
					<div class="row">
						<div class="col-sm-3">
							<div class="review-block-name"><a href="#">nktailor</a></div>
							<div class="review-block-date">January 29, 2016</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							</div>
							<div class="review-block-title">this was nice in buy</div>
							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
						</div>
					</div>
					<hr/>
					<div class="row">
						<div class="col-sm-3">
							<div class="review-block-name"><a href="#">nktailor</a></div>
							<div class="review-block-date">January 29, 2016</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							</div>
							<div class="review-block-title">this was nice in buy</div>
							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
						</div>
					</div>
					<hr/>
					<div class="row">
						<div class="col-sm-3">
							<div class="review-block-name"><a href="#">nktailor</a></div>
							<div class="review-block-date">January 29, 2016</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							</div>
							<div class="review-block-title">this was nice in buy</div>
							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </div> <!-- /container -->

<!--End of testing template-->

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

<!--Request anchor and New Request Tab are selected by default-->
<script>
document.getElementById("defaultOpen").click();
<!--function to make sure that no element will lose focus unless other button is chosen-->
$('.button').click(function() {
    $('button').removeClass('active');
    $(this).addClass('active');
})

</script>

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
