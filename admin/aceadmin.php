<?php
session_start();
date_default_timezone_set('America/Toronto');
// ini_set("date.timezone", "America/Toronto");
include_once '../dbConn.php';

if(!isset($_SESSION['admin'])) {
 header("Location: ace_admin_login.php");
}
?>

<html>
<head>
	<title>ACE Admin Main Page</title>
	<?php include('../header.php'); ?>
</head>
<?php include('navBar.php'); ?>
<body>
<div class="w3-content" style="max-width:2000px;margin-top:46px">
<div class="w3-black w3-padding-32" id="events">
<center>
	<div class="w3-container">
		<input type="button" onclick="location.href='logout.php'" value="Logout"/>
		<input type="button" onclick="location.href='addEvents.php'" value="add a new event"/>
	</div>
</center>
<div class="w3-container w3-content w3-padding-8" style="max-width:800px">
	<form action="deleteEvents.php" method="post">
	    <?php if ($result = $dbc->query("SELECT * FROM events")) { 
			while ($row = $result->fetch_assoc()) { ?>
				<div class="w3-third w3-margin-bottom">
					<?php if (!empty(trim($row['pic']))) { ?>
					<img src="<?php echo $row['pic']; ?>" style="width:100%;height:120px" class="w3-hover-opacity">
					<?php } else {?>
		    		<img src="../img/Logo.png" style="width:100%;height:120px" class="w3-hover-opacity"> <?php }?>
		        	<div class="w3-container w3-white">
		            	<p><b><?php echo $row['title']; ?></b></p>
			            <p class="w3-opacity">Date: <?php $timestamp = strtotime($row['date']); echo date('d M Y', $timestamp); ?></p>
			            <p class="w3-opacity">Location: <?php echo $row['location']; ?></p>
			            <p class="more_info"><a onclick="document.getElementById('eventDetailModal').style.display='block'">details/tickets</a></p>
			            <input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>">DELETE
			            <!-- <button class="w3-btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button> -->
			            <!-- <p class="w3-btn w3-margin-bottom"><a href="https://www.eventbrite.ca/e/ace-amazing-race-tickets-32032345608#" target="_blank">Buy Tickets</a></p> -->
		        	</div>
		        </div>
		<?php }} else { echo "<script>alert('Failed to connect to database.');</script>";} ?>
		<div class="w3-container">
			<center><input type="submit" value="Delete these events" /></center>
		</div>
	</form>
</div>
</div>
</div>
</body>
</html>