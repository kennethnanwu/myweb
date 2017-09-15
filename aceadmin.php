<?php
session_start();
date_default_timezone_set('America/Toronto');
// ini_set("date.timezone", "America/Toronto");
include_once 'dbConn.php';

if(!isset($_SESSION['admin']))
{
 header("Location: ace_admin_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACE Admin Main Page</title>
</head>
<body>
<input type="button" onclick="location.href='addEvents.php'" value="add a new event"/>
<form action="deleteEvents.php" method="post">
    
    <?php if ($result = $dbc->query("SELECT * FROM events")) { 
		while ($row = $result->fetch_assoc()) { ?>
	Title: <?php echo $row['title']; ?> <br/>
	<?php $timestamp = strtotime($row['date']);?>
	Date: <?php echo date('d M Y', $timestamp); ?> <br/>
	<input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>">DELETE<br/>
	----------------------------------------------------<br/><br/>
	<?php }} else { echo "<script>alert('Failed to connect to database.');</script>";} ?>
	<input type="submit" value="Delete these events" />
</form>
<input type="button" onclick="location.href='logout.php'" value="Logout"/>
</body>
</html>
