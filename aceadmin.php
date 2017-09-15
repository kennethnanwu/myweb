<?php
session_start();
date_default_timezone_set('America/Toronto');
// ini_set("date.timezone", "America/Toronto");
include_once 'dbConn.php';

if(!isset($_SESSION['admin'])) {
 header("Location: ace_admin_login.php");
}
?>

<html>
<head>
	<title>ACE Admin Main Page</title>
	<?php include('header.php'); ?>
</head>
<body>
<input type="button" onclick="location.href='addEvents.php'" value="add a new event"/>
<form action="deleteEvents.php" method="post">
    <?php if ($result = $dbc->query("SELECT * FROM events")) { 
		while ($row = $result->fetch_assoc()) { ?>

	Title: <?php echo $row['title']; ?> <br/>
	Date: <?php $timestamp = strtotime($row['date']);
			echo date('d M Y', $timestamp); ?> <br/>
	Location: <?php echo $row['location']; ?> <br/>
	Description: <?php echo $row['detail']; ?> <br/>
	Link: <?php echo $row['link']; ?> <br/>
	<?php if (!empty(trim($row['pic']))) { ?>
	Picture:<br/>
	<img src="<?php echo $row['pic']; ?>"><br/>
	<?php } ?>
	<input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>">DELETE<br/>
	----------------------------------------------------<br/><br/>
	<?php }} else { echo "<script>alert('Failed to connect to database.');</script>";} ?>
	<input type="submit" value="Delete these events" />
</form>
<input type="button" onclick="location.href='logout.php'" value="Logout"/>
</body>
</html>

<div class="w3-content" style="max-width:2000px;margin-top:46px">
<div class="w3-black" id="events">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
		<div class="w3-third w3-margin-bottom">
			<?php if (!empty(trim($row['pic']))) { ?>
			<img src="<?php echo $row['pic']; ?>" style="width:100%" class="w3-hover-opacity">
			<?php } else {?>
    		<img src="img/Logo.png" style="width:100%" class="w3-hover-opacity"> <?php }?>
        	<div class="w3-container w3-white">
            	<p><b><?php echo $row['title']; ?></b></p>
	            <p class="w3-opacity">Date: <?php $timestamp = strtotime($row['date']); echo date('d M Y', $timestamp); ?></p>
	            <p class="w3-opacity">Location: <?php echo $row['location']; ?></p>
	            <p class="more_info"><a onclick="document.getElementById('eventDetailModal').style.display='block'">details/tickets</a></p>
	            <input class="w3-opacity" type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>">DELETE
	            <!-- <button class="w3-btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button> -->
	            <!-- <p class="w3-btn w3-margin-bottom"><a href="https://www.eventbrite.ca/e/ace-amazing-race-tickets-32032345608#" target="_blank">Buy Tickets</a></p> -->
        	</div>
        </div>
    </div>
</div>
</div>