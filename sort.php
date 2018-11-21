<?php
session_start();
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "SeniorHack";
 $con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
$answer = $_POST['optradio'];
if ($answer == "service")
 $sql_select_service = "SELECT requestID, date, time,status, sp_ID FROM request WHERE sp_ID =10002 ORDER BY requestID desc" ;
if ($answer == "date")
	$sql_select_service = "SELECT requestID, date, time,status, sp_ID FROM request WHERE sp_ID =10002 ORDER BY requestID " ;
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
if ($row_count_select_service == 0) {
					//echo "<p>No services have been created yet</p>";
				}
				else{
				
					for ($i = 1; $i <=$row_count_select_service; $i++) {
						
					echo'
					
<div class="col-lg-6 col-md-12 col-sm-12">';


echo'<div  class="card request_card" >
<div class="view" id="card-hover" >

  <img class="card-img-top zoomed " src = "img/driver.jpg" alt="Card image">';
  
  echo '<div class="mask flex-center rgba-black-strong">
  <div class="dark-overlay "></div>
  <div class="card-img-overlay white-text zoomed card-style">';
    echo"<h3 class='card-title font-weight-bold'>Cleaning</h3>";
	
	echo'<p style="font-size:12px;margin-top:3%"><span class="card-text" id="statusColor" style="padding: 3px 14px">PENDING</span></p>';
	if($status_selected_service[$i] == 'pending'){
	echo"<script type='text/javascript'>
		 document.getElementById('statusColor').style.backgroundColor = 'lightblue';
</script>";}
	echo"<p style='margin-top:3%' >$date_selected_service[$i], $time_selected_service[$i]</p>";
    echo'<h3 class="font-weight-bold sp-name" style="margin-top:1%">Aaron Tan</h3>';
	
	echo'</div>
	<script type=\'text/javascript\'>
		 document.getElementById(\'custId\').value= "10002";
</script>
	<button type="button" data-toggle="modal" data-target="#myModal"  class="btn purple-gradient" style="margin-top:50%;width:100%;display:block;margin-left:0;
margin-right:0;
padding-left:0;
padding-right:0">View More</button>
	</div>
  
</div>
</div>
</div>
				</div>';}}?>