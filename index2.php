
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Homepage</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
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
 #banner{
  width:100%;
  height:500px;
  }
  }
  #banner{
 background:url(img/signup-banner.jpg) no-repeat top center fixed;
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
  text-align:center;
  margin-top:20%;}
  @media only screen and (max-width: 800px) 
  {.banner-title { 
  text-align:center;
  font-size:31px;
  margin-top:30%;
  }}
  
.font {font-size:17px;}
.page-footer{
background-size:cover;
	width:100%;
	text-align:center;
	background-color:#d7c9aa;}	
	#defaultOpen{background-color:}

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
	<!--Log Out-->
   <div class="collapse navbar-collapse center_btn" >
		<button id="btn-logout" class="btn navbar-btn navbar-right log-out" data-toggle="modal" data-target="#modalLoginForm" >Sign In</button>
	</div>
  </div>
</nav>
<!--Mask-->
<div id="banner" class="view">

  <div class="mask rgba-black-strong">
 <!-- Heading -->
	<div class="container">
<div class="row" style="text-align:center"><br><br><br>
<div class="banner-title col-lg-12"><p>Elevate The Lifestyle Of </p><p style="margin-top:-2%">Seniors In Our Nation</p></div>

<div class="banner-description col-lg-12 ">
<p>SeniorHack, the way Senior Care should be</p>
<hr class="hr-light">
<a href="#senior_signup" class="btn btn-info" id="next" role="button" data-toggle="modal" data-target="#modalSignUpForm" >Create An Account</a></div>
</div>
</div>

  </div>

</div>
<!--/.Mask-->
</header>
<main>
<!--Login Modal-->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width:400px">
        <div class="modal-content">
		<form action="Login.php" method="post">
		
            <div class="modal-header text-center" style="color:white;background-color:#0B7A75">
                <h3 class="modal-title w-100 font-weight-bold" >Sign in</h3>
                <button type="button" class="close" style="color:white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3 form-sm mb-5 pb-2">
                <div class="md-form form-lg" style="margin-top:10%">
				
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="defaultForm-email" class="form-control " name="login-username" required>
                    <label for="defaultForm-email"><p style="font-size:13px">Username</p></label>
					
                </div>

                <div class="md-form form-lg" style="margin-top:15%">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="defaultForm-pass" class="form-control " name="login-password" required>
                    <label for="defaultForm-pass"><p style="font-size:13px">Your password</p></label>
                </div>

            </div>
            <div class="d-flex justify-content-center" style="margin-bottom:5%">
                <button class="btn btn-default" id="loginbtn">Login</button>
            </div>
			</form>
			</div>
        </div>
    </div>
</div>
<!--End of Login Modal-->
<!--Modal: Sign Up-->
<div class="modal fade" id="modalSignUpForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="color:white;background-color:#0B7A75">
                <h3 class="modal-title w-100 font-weight-bold" >Sign Up</h3>
                <button type="button" class="close" style="color:white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			
<!--Tab-->
   <ul class="tab nav nav-pills" style="margin-top:3%">

    <li style="width:45%; padding-right: 5%" ><a class="btn btn-lg btn-default" id="defaultOpen" data-toggle="tab" href="#senior_signup" style="font-size:12px">Senior</a></li>

    <li style="width:54%; padding-left: 3%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#sp_signup" style="font-size:12px">Service Provider</a></li>

  </ul>
<!--END OF TAB-->
			<div class="tab-content" id="open">
	 <div id="senior_signup" class="tab-pane fade in active ">
            <div class="modal-body mx-3 form-sm mb-5 pb-2">
			<form action="SeniorSignUp.php" method="post" id="s_form">
                <div class="md-form" style="margin-top:10%">
				
                    <i class="fa fa-user-circle prefix grey-text"></i>
                    <input type="text" id="s_username" name="s_username" class="form-control ">
                    <label for="defaultForm-email"><p style="font-size:13px">Username</p></label>
					
                </div>

                <div class="md-form" style="margin-top:10%">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="s_pwd" name="s_password" class="form-control ">
                    <label for="defaultForm-pass"><p style="font-size:13px">Your password</p></label>
                </div>
				
				<div class="md-form" style="margin-top:10%">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" class="form-control "  id="s_name" name="s_name">
                    <label for="defaultForm-pass"><p style="font-size:13px">Full Name</p></label>
                </div>
				
				<div class="md-form" style="margin-top:10%">
                    <i class="fa fa-phone prefix grey-text"></i>
                    <input type="text" id="s_contact" name="s_contact" class="form-control ">
                    <label for="defaultForm-pass"><p style="font-size:13px">Contact No</p></label>
                </div>
				
				<div class="md-form" style="margin-top:10%">
                    <i class="fa fa-map-marker prefix grey-text"></i>
                    <input type="password" id="s_address" name="s_address" form="s_form" class="form-control ">
                    <label for="defaultForm-pass"><p style="font-size:13px">Address</p></label>
                </div>
				<div class="d-flex justify-content-center" style="margin-bottom:5%" >
                <button class="btn btn-default" onclick="seniorValidation(this)" id="senior_submit">Sign Up</button>
            </div>
			</form>
            </div>
			</div>
			
			 <div id="sp_signup" class="tab-pane fade in active ">
            <div class="modal-body mx-3 form-sm mb-5 pb-2">
			<form action="SP_SignUp.php" method="post" id="sp_form">
                <div class="md-form" style="margin-top:10%">
				
                    <i class="fa fa-user-circle prefix grey-text"></i>
                    <input type="text" id="sp_username" name="sp_username" class="form-control ">
                    <label for="defaultForm-email"><p style="font-size:13px">Username</p></label>
					
                </div>

                <div class="md-form" style="margin-top:10%">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="sp_pwd" name="sp_password" class="form-control ">
                    <label for="defaultForm-pass"><p style="font-size:13px">Your password</p></label>
                </div>
				
				<div class="md-form" style="margin-top:10%">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="sp_name" name="sp_name" class="form-control ">
                    <label for="defaultForm-pass"><p style="font-size:13px">Full Name</p></label>
                </div>
				
				<div class="md-form" style="margin-top:10%">
                    <i class="fa fa-phone prefix grey-text"></i>
                    <input type="text" id="sp_contact" name="sp_contact" class="form-control ">
                    <label for="defaultForm-pass"><p style="font-size:13px">Contact No</p></label>
                </div>
				
				<div class="md-form" style="margin-top:10%">
                    <i class="fa fa-map-marker prefix grey-text"></i>
                    <input type="text" id="sp_address" name="sp_address" class="form-control ">
                    <label for="defaultForm-pass"><p style="font-size:13px">Address</p></label>
                </div>
<!-- Default unchecked -->
	<div class="md-form" style="margin-top:10%">
                    <i class="fa fa-gear prefix grey-text" id="defaultForm-pass"></i>
                    <label for="defaultForm-pass"><p style="font-size:13px">Services to Provide</p></label>
					
                </div><br><br>
				<!-- Default unchecked -->
<!-- Default inline 1-->
<div style="text-align:center" id="checkboxes">
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline1" name="servicetype[]" value="Companion" checked>
  <label class="custom-control-label" for="defaultInline1">Companion</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline2" name="servicetype[]" value="Driver">
  <label class="custom-control-label" for="defaultInline2">Driver</label>
</div>

<!-- Default inline 3-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline3" name="servicetype[]" value="Cleaning">
  <label class="custom-control-label" for="defaultInline3">Cleaning</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline4" name="servicetype[]" value="Meal Preparation"> 
  <label class="custom-control-label" for="defaultInline4">Meal Preparation</label>
</div><br><br>
<div class="d-flex justify-content-center" style="margin-bottom:5%">
                <button class="btn btn-default" onclick="spValidation(this)" id="sp_submit">Sign Up</button>
            </div>
</div>
</form>
			</div>
			</div>
			</div>
            
        </div>
    </div>
</div>
<!--End of Sign Up form-->
<div class="container">
<br>

        <!--Section: Best Features-->
        <section style="text-align:center">
<br>
 <!-- Heading -->
  <h2 class="mb-5 font-weight-bold">About Us</h2>

  <!--Grid row-->
  <div class="row d-flex justify-content-center mb-4">

      <!--Grid column-->
      <div class="col-md-8">

          <!-- Description -->
          <p class="font">Aging comes with many challenges, loss of independence is just part of the process.

Hence, we developed a system to allow individual volunteers or non profit organizations to provide home care services to the elderly. </p>

<br><br>
      </div>
      <!--Grid column-->

  </div>
  <!--Grid row-->

  <!--Grid row-->
  <div class="row">
      <!--Grid column-->
      <div class="col-md-4 mb-1">
          <i class="fa fa-certificate fa-4x orange-text"></i>
		  
          <h3 class="my-4 font-weight-bold">Top-class Services</h3>
          <p class="font">To ensure that you get top of the line services, you are entitled to the best of servicers based on reviews given by our client base.</p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-4 mb-1">
          <i class="fa fa-clock-o fa-4x orange-text"></i>
          <h3 class="my-4 font-weight-bold">Time-Saving</h3>
          <p class="font">From booking home cleaning services to ordering your food, you can get it all with SeniorHack from the comfort of your home.</p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-4 mb-1">
          <i class="fa fa-smile-o fa-4x orange-text"></i>
          <h3 class="my-4 font-weight-bold">Convenient</h3>
          <p class="font">SeniorHack brings your services right to your doorstep, without needing you to step out of your home at all.</p>
      </div>
      <!--Grid column-->

  </div>
  <!--Grid row-->

        </section>
        <!--Section: Best Features-->

        <hr class="my-5">

        <!--Section: Examples-->
        <section id="examples" >
 
<h2 class="mb-5 font-weight-bold" style="text-align:center">Why Choose SeniorHack</h2><br>
 <!--Grid row-->
 
    <div class="row" style="text-align:center">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">
 <img src="img/senior_image1.jpg" class="img-fluid" alt="">
      <p class="font grey-text"><br>Our community is the place where seniors become empowered to grow, develop and get involved.</p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">
<img src="img/senior_image2.jpg" class="img-fluid"  alt="" >
      <p class="font grey-text"><br>The SeniorHack community is committed to enrich the lives of older adults in our community.</p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">
<img src="img/senior_image3.jpg" class="img-fluid"  alt="" >
      <p class="font grey-text"><br>We are your center for friendship.We are independently operated and can't do it without you.</p>
        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

        </section>
        <!--Section: Examples-->

        <hr class="my-5">

        <!--Section: Gallery-->
        <section id="gallery">

 <!-- Heading -->
    <h2 class="mb-5 font-weight-bold text-center">Our Community</h2><br>

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

<!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/community_img1.jpg" alt="First slide">
      </div>
      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="img/community_img2.jpg" alt="Second slide">
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="img/community_img3.jpg" alt="Third slide">
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6">
<!--Excerpt-->
    <a href="" class="teal-text">
        <h6 class="pb-1"><i class="fa fa-heart"></i></h6>
    </a>
    <h3 class="mb-3"><strong>WHY ARE SENIORS IMPORTANT</strong></h3>
    <p>Senior citizens are important members of our community.  They are our parents and
our grandparents, people who have contributed to the history of our community and
our families in so many ways.</p>

    <p> Love is important at every stage of life. But it is important for different reasons at different ages. As we grow older, 
	our circumstances change. Love gives seniors a much-needed support system as 
	age makes them increasingly vulnerable. These relationships are often essential to seniors' emotional and mental well-being. 
	They're also associated with positive health outcomes, meaning love can literally extend a senior's life.</p>
    


        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->


        </section>

    </div>
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
$(document).ready(function () {
 $('.stepper').mdbStepper();
})
<!--Senior Sign Up Tab is opened by default-->
document.getElementById("defaultOpen").click();

<!--show and scroll to sign up form upon click 'create an account' button-->
$("#next").on("click", function(){
	document.getElementById("open").scrollIntoView();
});

//validate senior sign up form
function seniorValidation() {
	//value of phone No is stored inside a var becasue it will be called several times
	var phoneNo = document.getElementById("s_contact");
	var pwd =document.getElementById("s_pwd");
	//values to be compared with a valid phone No
	var numbers =/^\d+(-\d+)*$/;
	if (document.getElementById("s_username").value=="") {
		alert("Username field cannot be empty.");
		document.getElementById("s_username").focus();
		event.preventDefault();
		return false;
	} //end if
	if(pwd.value=="") {
		alert("Password cannot be empty.");
		document.getElementById("s_pwd").focus();
		event.preventDefault();
		return false;
		}
	if(pwd.value.length < 6) {
		alert("Password must be 6 characters.");
		document.getElementById("s_pwd").focus();
		event.preventDefault();
		return false;
		}
		
	if(document.getElementById("s_name").value=="") {
		alert("Name field cannot be empty.");
		document.getElementById("s_name").focus();
		event.preventDefault();
		return false;
		}//end if
	if(phoneNo.value=="") {
		alert("Contact number cannot be empty.");
		document.getElementById("s_contact").focus();
		event.preventDefault();
		return false;
		}
	if(!phoneNo.value.match(numbers) || phoneNo.value.length < 10) {
		document.getElementById("s_contact").focus();
		alert("Invalid phone number.");
		event.preventDefault();
		return false;
		}
	if(document.getElementById("s_address").value=="") {
		alert("Address cannot be empty.");
		document.getElementById("s_address").focus();
		event.preventDefault();
		return false;
		}
		{
		return true;
		}
	}//end of function validateForm
	
	
//service provider sign up form validation	
function spValidation() {
	var checked = $('#checkboxes').find(':checked').length;
	var pwd =document.getElementById("sp_pwd");
	//value of phone No is stored inside a var becasue it will be called several times
	var phoneNo = document.getElementById("sp_contact");
	//values to be compared with a valid phone No
	var numbers =/^\d+(-\d+)*$/;
	if (document.getElementById("sp_username").value=="") {
		alert("Username field cannot be empty.");
		document.getElementById("sp_username").focus();
		event.preventDefault();
		return false;
	} //end if
	if(pwd.value=="") {
		alert("Password cannot be empty.");
		document.getElementById("sp_pwd").focus();
		event.preventDefault();
		return false;
		}
	if(pwd.value.length < 6) {
		alert("Password must be 6 characters.");
		document.getElementById("sp_pwd").focus();
		event.preventDefault();
		return false;
		}
		
	if(document.getElementById("sp_name").value=="") {
		alert("Name field cannot be empty.");
		document.getElementById("sp_name").focus();
		event.preventDefault();
		return false;
		}//end if
	if(phoneNo.value=="") {
		alert("Contact number cannot be empty.");
		document.getElementById("sp_contact").focus();
		event.preventDefault();
		return false;
		}
	if(!phoneNo.value.match(numbers) || phoneNo.value.length < 10) {
		document.getElementById("sp_contact").focus();
		alert("Invalid phone number.");
		event.preventDefault();
		return false;
		}
	if(document.getElementById("sp_address").value=="") {
		alert("Address cannot be empty.");
		document.getElementById("sp_address").focus();
		event.preventDefault();
		return false;
		}
	if (!checked){
		alert("Please select at least one service type to offer");
		event.preventDefault();
		return false;
		}//end if
		{
		return true;
		}
	}
</script>
</html>
