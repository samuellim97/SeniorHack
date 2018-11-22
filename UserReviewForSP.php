<?php
session_start();
include("dbh.php");
$username = $_SESSION['username'];

$sql = "SELECT * FROM account INNER JOIN review ON account.username = review.spID AND username ='$username'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$ratingResult = mysqli_query($con, ("SELECT * FROM review WHERE spID = '$username'")) or die(mysql_error());
$ratingArray = array();
while($row1 = mysqli_fetch_assoc($ratingResult)) {
     $ratingArray[] = $row1['rating'];
}
$total = array_sum($ratingArray);
if (count($ratingArray) == 0){
  $avg = 0;
} else {
  $avg = $total/count($ratingArray);
}
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

.fa_custom {
  color: #0099CC;}
.rating-block{
  background-color:#FAFAFA;
  border:1px solid #EFEFEF;
  padding:15px 15px 20px 15px;
  margin-top: 10%;
  border-radius:3px;}
.bold{
  font-weight:700;}
.padding-bottom-7{
  padding-bottom:7px;}
.review-block{
  background-color:#FAFAFA;
  border:1px solid #EFEFEF;
  padding:15px;
  border-radius:3px;
  margin-bottom:15px;}
.review-block-name{
  font-size:12px;
  margin:10px 0;}
.review-block-date{
  font-size:12px;}
.review-block-rate{
  font-size:13px;
  margin-bottom:15px;}
.review-block-description{
  	font-size:13px;}

thead, tbody {display: block;}

tbody {
    height: 500px;       /* Just for the demo          */
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
      <li><a href="RequestsForSP.php">Requests</a></li>
      <li><a href="ContactUsForSP.html">Contact Us</a></li>
		  <li><a href="userReviewForSP.php" id="defaultSelected">Profile</a></li>
    </ul>
	<!--Log Out-->
   <div class="collapse navbar-collapse" id="cl-mainNavbar">
		<a href="logout.php" type="button" id="btn-logout" class="btn btn-default navbar-btn navbar-right log-out" >Log Out</a>
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

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-xs-8 col-xs-offset-2">
        <h2>User Reviews</h2>
        <br>
      </div>
    </div>
  <div class="row">
    <!-- Profile Card -->
    <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-xs-8 col-xs-offset-2">
      <div class="card">
        <img id="profilePic" src="img/img_avatar.png" alt="Avatar">
        <div id="card-style">
          <?php
          if (mysqli_num_rows($result) > 0 ){ ?>
          <h4><b><?php echo $row["fullName"]; ?></b></h4>
          <p>(@<?php echo $row["username"]; ?>)</p>
          <p><?php echo $row["mobileNo"]; ?></p>
        <?php }?>
        </div>
      </div>
    </div>

  </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-xs-8 col-xs-offset-2">
      <div class="rating-block">
        <h4>Average user rating</h4>
        <h2 class="bold padding-bottom-7"><?php printf('%.2f', $avg); ?> <small>/ 5</small></h2>
        <?php
        for($x=1;$x<=$avg;$x++) {
        echo '<i class="fa fa-star fa_custom fa-3x"></i>';
        }
        if (strpos($avg,'.')) {
        echo '<i class="fa fa-star-half-full fa_custom fa-3x"></i>';
        $x++;
        }
        while ($x<=5) {
        echo '<i class="fa fa-star-o fa_custom fa-3x"></i>';
        $x++;
        }
        ?>
      </div>
    </div>
  </div>


  <div class="row" style="margin-bottom:5%">
    <div class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-xs-12">
    <hr/>
    <div class="review-block">

        <?php
        $sql = "SELECT* FROM review WHERE spID = '$username' ORDER BY date DESC";
      	if(!$result = mysqli_query($con, $sql)) {
      	  exit(mysqli_error($con));
      	}
      	if(mysqli_num_rows($result) > 0)
      	{
      	  $number = 1;
      	  while($row = mysqli_fetch_assoc($result))
      	  {
            ?>
      					<div class="row">
      						<div class="col-sm-3">
      							<div class="review-block-name"><a href="#"><?php echo $row['sID']; ?></a></div>
      							<div class="review-block-date"><?php echo date("d/m/y", strtotime($row['date'])); ?></div>
      						</div>
      						<div class="col-sm-9">
      							<div class="review-block-rate">
                      <?php
                      for($x=1;$x<=$row['rating'];$x++) {
                      echo '<i class="fa fa-star fa_custom fa-2x"></i>';
                      }
                      while ($x<=5) {
                      echo '<i class="fa fa-star-o fa_custom fa-2x"></i>';
                      $x++;
                      }
                      ?>
      							</div>
      							<div class="review-block-description"><?php echo $row['comments']; ?></div>
      						</div>
      					</div>
                <hr/>
      	  <?php }}
      	else {
      	  //records not found
      	  echo 'No reviews yet!';
      	}


          ?>
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
