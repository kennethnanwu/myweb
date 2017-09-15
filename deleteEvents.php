<?php
include_once 'dbConn.php';
$cheks = implode("','", $_POST['checkbox']);
$sql = "DELETE FROM events WHERE id IN ('$cheks')";
$page = 'aceadmin.php';
$sec = 5;
if (mysqli_query($dbc, $sql)) {
	header("refresh:$sec;url=$page", true, 303);
	echo "Successfully deleted them.";
}	
else {
	header("refresh:$sec;url=$page", true, 303);
	echo "FAILED: ".mysqli_error($dbc);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACE Admin Delete Events Responses</title>
</head>
<body>
<p>Redirecting to main admin page in <?php echo $sec;?> seconds.</p>
</body>
</html>
