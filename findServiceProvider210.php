<?php
  $dbservername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbName = "seniorhack";
  $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbName);
  //$username = $_SESSION['username'];
  $sql = "SELECT account.username, account.address, providerInfo.serviceCode
          FROM providerInfo
          INNER JOIN account ON providerInfo.username = account.username
          WHERE account.type = 'SP'";
  $result = mysqli_query($conn, $sql);
  $datas = array();
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_row($result)){
      $datas[] = $row;
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find Service Providers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
html, body{
background-color:#f0f3f5;
height:100%;
width:100%;}

#contentDiv{
  width:100%;
  position:relative;
  text-align: center;
  margin-bottom: 50px;
}

#contentDiv .btn{
  background-color:white;
  color:black;
  border-color:silver;
  width:140px;
}

#contentDiv .btn.active{
  background-color: silver;
  color:white;
}

.button_style {
	background-color: limegreen;
	color: white;
	border-color: limegreen;}

  /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
  #map {
    height:500px;
    margin-top:0;
  }

.overall-grid{
	height:100%;
	width:100%;
	position: fixed;
	overflow-x:hidden;
	margin: 0;
	padding: 0;
	max-width:2000px;}

  #title{text-align:center;
  }

#footer-bg {
	background-color: #d7c9aa;
	margin-top: 2%;
	background-size:cover;
  max-height: 80px;
	height:100%;
	width:100%;
	font-size: 15px;
  position:relative;
}
.footer_mid {
	text-align:center;
	margin-top:4%;}
.footer-left {
	margin-top:4%;
	text-align:left;
	margin-left:10%;}
.footer-right {
    margin-top:3%;
	float: right;
	text-align:right;
	margin-right:10%;}

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
.topnav li a:active{
	background-color:#19535f !important;}


#defaultSelected {
	background-color:#19535f !important;}

  #idcard {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 40%;
      border-radius: 5px;
  }

  #idcard:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }

  #idcard img {
      border-radius: 5px 5px 0 0;
  }

  #card-content {
      padding: 2px 16px;
  }
  #find{
    height:100px;
  }
  #findBtn {
    float:right;
    margin-top: 10px;
    margin-right: 20px;
    margin-bottom:0;
  }

  #findBtn a{
    color:white;
    text-decoration: none;
  }

</style>
</head>
<!-- Navigation bar-->
<body>
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
        <li><a href="#">Logo</a></li>
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
</div>
</header>



  <div class="container-fluid" id="contentDiv">
    <h1 id="title">Find Service Providers</h1>
      <p>These are the service providers around you</p>

  </div>




  <div class = "z-depth-1" id = "map"></div>
  <div id="find">
  <button type="submit" class="btn btn-success" id="findBtn"><a href="request.html">Find me a service provider now!</a></button>
  </div>

  <!--footer-->
  <footer id="footer-bg" class="footer">
  <div class="container-fluid">
  <div class="row">

  <!--Contact No-->
  <div class="col-xs-4 pull-left1">
        <p class="footer-left" style="text-indent:10px">Contact Us At <br><span style="font-size:18px;font-weight:bold;"> 1300-88-2525</span></p>
        </div>

      <div class="col-xs-4 dropup">
        <p class="footer_mid">&copy;Copyright SeniorHack 2018 <br>All rights reserved</p>
      </div>

  <!--Links to Social Media-->
    <div class="col-xs-4">
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
  </script>

  <!-- for the btn class-->
  <script>
    document.getElementById("defaultOpen").click();
    <!--function to make sure that no element will lose focus unless other button is chosen-->
    $('.btn-toolbar').click(function() {
        $('button').removeClass('active');
        $(this).addClass('active');
    })
  </script>

  <!--for the button group-->

  <script type = "text/javascript" src = "https://maps.google.com/maps/api/js?sensor=false"></script>
  <script>
    //converts php array to javascript
    var serviceProviders = <?php echo json_encode($datas)?>

    var map, infoWindow;
    //user variables
    var name, address, label, serviceType;
    var markers = [];

    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 15
      });
      infoWindow = new google.maps.InfoWindow;
      var geocoder = new google.maps.Geocoder();

      // Try HTML5 geolocation.
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };

          infoWindow.setPosition(pos);
          infoWindow.setContent('Location found.');
          infoWindow.open(map);
          map.setCenter(pos);
        }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
        });
      } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
      }


      for(var i=0; i<serviceProviders.length; i++){
        name = serviceProviders[i][0];
        address = serviceProviders[i][1];
        label = serviceProviders[i][2];

        var contentString = '<div id = "content">'+
          '<strong>'+name+'</strong>'+
          '<br>'+label+
          '<br>'+address+'</div>';

        var infoForWindow = new google.maps.InfoWindow({
          content:contentString
        });
        geocodeAddress(geocoder, map, address, label, infoForWindow);
      }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
      infoWindow.open(map);
    }

    //Resize Function
		google.maps.event.addDomListener(window, "resize", function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, "resize");
			map.setCenter(center);
		});


	google.maps.event.addDomListener(window, 'load', initialize);

  //this function geocodes the address input of service providers and
  //adds the corresponding markers on the maps
  function geocodeAddress(geocoder, resultsMap, address, labels, infoWindow) {
    geocoder.geocode({'address': address}, function(results, status) {
      if (status === 'OK') {
        var marker = new google.maps.Marker({
          map: resultsMap,
          label: labels,
          position: results[0].geometry.location
        });
        marker.addListener('click', function() {
                infoWindow.open(map, marker);
              });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }




  </script>

  <script
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcz75ImFsuDa4UpU7zAPkqHSkM_osb8-k&callback=initMap">
  </script>

</body>
</html>

