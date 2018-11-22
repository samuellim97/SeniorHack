<?php
    require('dbh.php');
    $requestID = $_GET['id'];

    if (isset($_POST['submit'])) {
    	$requestID = $_POST['id'];
    	$status = $_POST['status'];
    	$notes = $_POST['notes'];
    	$con->query("UPDATE `servicerequest` SET `status`='$status', `notes`='$notes' WHERE `requestID`=$requestID");
    	header("location:RequestsForSP.php");
    }

    $requests = $con->query("SELECT * FROM `servicerequest` INNER JOIN servicetype ON servicerequest.serviceCode = servicetype.serviceCode
      INNER JOIN account ON servicerequest.sID = account.username WHERE `requestID`='$requestID'");
    $req = mysqli_fetch_assoc($requests);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Bootstrap modal</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="post" action="editModal.php" id="edit_form" role="form">
	<div class="modal-body">
    <div class="form-group">
  		<div class="form-group">
  			<label for="id">Request ID</label>
  			<input type="text" class="form-control" id="id" name="id" value="<?php echo $req['requestID'];?>" readonly="true"/>
  		</div>
			<label for="status">Status</label>
      <select name="status" id="status" class="form-control">
        <?php
        if ($req['status'] == 'pending') {
          echo '<option value="pending" selected="selected">pending</option>';
          echo '<option value="completed">completed</option>';
        } else if ($req['status'] == 'accepted') {
          echo '<option value="accepted" selected="selected">accepted</option>';
          echo '<option value="completed">completed</option>';
        } ?>
      </select>
		</div>
    <div class="form-group">
      <label for="notes">Notes</label>
			<textarea type="textarea" class="form-control" id="notes" name="notes" form="edit_form" rows="4" cols"40"><?php echo $req['notes'];?></textarea>
		</div>
		</div>
		<div class="modal-footer">
			<input type="submit" class="btn btn-primary" name="submit" value="Update" />&nbsp;
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</form>
</body>
</html>
