<?php
include_once 'dbh.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Reviews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/SeniorHack.css">
  <link rel="stylesheet" href="css/userReview.css">
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

@media (min-width: 768px) {
  .navbar-nav.navbar-center {
    position: absolute;
    left: 47%;
    transform: translatex(-50%);
  }
}
#banner {
	background:url(img/signup-banner.png) no-repeat top center fixed;
	background-size:cover;
	height:500px;
	width:100%;}


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
        <li><a href="#"></a></li>
        <li><a href="#">Service Providers</a></li>
		<li><a href="#" id="defaultSelected"> Requests</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="#">Help</a></li>
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
          <div class="form-group" style="margin-top: 3%">
            <label for="rating"></label>
                  <fieldset class="rate">Rate:
                    <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                    <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                    <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                    <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                    <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                    <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                    <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                    <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                    <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                    <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                    <input type="radio" id="rating0" name="rating" value="0" /><label for="rating0" title="No star"></label>
                  </fieldset>
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
<div class="container">
<div id="user_reviews2" class="row">
  <div id="ratings" class="col-lg-2  col-sm-2">
          <h5>Service Provider Ratings</h5>
          <h1>3.8 / 5</h1>
          <span style="font-size: 11px">based on 38 user reviews</span>
  </div>
  <div class="col-lg-8  col-sm-10" style="height:500px; overflow:auto; margin-top:-3%">
    <br>
    <br>
  <table id="reviewsTable" class="tb1">
    <tr>
      <td>
      <p style="margin:10px 15px; float:left;">21/7/2018, Renee Lim
      <span style="float:right;">3 stars</span>
      <br><br>Thank you for your professional follow up and follow through on
      services rendered at my home. I highly recommend your services to
      friends and family.
      </p>
      </td>
    </tr>
    <tr>
      <td>
      <p style="margin:10px 15px; float:left;">21/7/2018, Renee Lim
      <span style="float:right;">3 stars</span>
      <br><br>Thank you for your professional follow up and follow through on
      services rendered at my home. I highly recommend your services to
      friends and family.
      </p>
      </td>
    </tr>
    <tr>
      <td>
      <p style="margin:10px 15px; float:left;">21/7/2018, Renee Lim
      <span style="float:right;">3 stars</span>
      <br><br>Thank you for your professional follow up and follow through on
      services rendered at my home. I highly recommend your services to
      friends and family.
      </p>
      </td>
    </tr>
    <tr>
      <td>
      <p style="margin:10px 15px; float:left;">21/7/2018, Renee Lim
      <span style="float:right;">3 stars</span>
      <br><br>Thank you for your professional follow up and follow through on
      services rendered at my home. I highly recommend your services to
      friends and family.
      </p>
      </td>
    </tr>
    <tr>
      <td>
      <p style="margin:10px 15px; float:left;">21/7/2018, Renee Lim
      <span style="float:right;">3 stars</span>
      <br><br>Thank you for your professional follow up and follow through on
      services rendered at my home. I highly recommend your services to
      friends and family.
      </p>
      </td>
    </tr>
    <tr>
      <td>
      <p style="margin:10px 15px; float:left;">21/7/2018, Renee Lim
      <span style="float:right;">3 stars</span>
      <br><br>Thank you for your professional follow up and follow through on
      services rendered at my home. I highly recommend your services to
      friends and family.
      </p>
      </td>
    </tr>
    <tr>
      <td>
      <p style="margin:10px 15px; float:left;">21/7/2018, Renee Lim
      <span style="float:right;">3 stars</span>
      <br><br>Thank you for your professional follow up and follow through on
      services rendered at my home. I highly recommend your services to
      friends and family.
      </p>
      </td>
    </tr>
    <tr>
      <td>
      <p style="margin:10px 15px; float:left;">21/7/2018, Renee Lim
      <span style="float:right;">3 stars</span>
      <br><br>Thank you for your professional follow up and follow through on
      services rendered at my home. I highly recommend your services to
      friends and family.
      </p>
      </td>
    </tr>
  </table>
</div>
	</div>
</div>
</div>
<!--End of View User Reviews-->

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

<!--Request anchor and New Request Tab are selected by default-->
<script>
document.getElementById("defaultOpen").click();
<!--function to make sure that no element will lose focus unless other button is chosen-->
$('.button').click(function() {
    $('button').removeClass('active');
    $(this).addClass('active');
})


jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
})
$("#edit").on("click", function(){
    $("#myModal").modal("hide");
    $("#myModal").on("hidden.bs.modal",function(){
    $("#detailsModal").modal("show");
    });
});


</script>
</body>
</html>
