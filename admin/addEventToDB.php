<?php
	session_start();
	date_default_timezone_set('America/Toronto');
	// ini_set("date.timezone", "America/Toronto");
	include_once '../dbConn.php';
	$addEventPage = 'addEvents.php';
	$sec = 5;

	if(!isset($_SESSION['admin'])) {
		header("Location:ace_admin_login.php");
	}

	if (isset($_POST['submit'])) {
		// SQL injection attack prevention
	    $title = mysqli_real_escape_string($dbc, trim($_POST['eventname']));
	    $location = mysqli_real_escape_string($dbc, trim($_POST['eventlocation']));
		$description = mysqli_real_escape_string($dbc, trim($_POST['eventdescription']));
		$link = mysqli_real_escape_string($dbc, trim($_POST['eventlink']));
		$year = mysqli_real_escape_string($dbc, trim($_POST['year']));
		$month = mysqli_real_escape_string($dbc, trim($_POST['month']));
		$day =  mysqli_real_escape_string($dbc, trim($_POST['day']));
		$Ymd = $year."/".$month."/".$day;
		$mysqlDate = date("Y-m-d H:i:s", strtotime($Ymd));
		$picLocation = "";

		// Validate upload file
	    if ($_FILES['eventPic']['size'] != 0 && is_uploaded_file($_FILES['eventPic']['tmp_name'])) {
			$uploaddir = '../img/';
			$uploadedFileName = mysqli_real_escape_string($dbc, trim(basename($_FILES['eventPic']['name'])));
			$uploadFile = $uploaddir . $uploadedFileName;
			$fileTYpe = pathinfo($uploadFile, PATHINFO_EXTENSION);
			// CHECK IF IMAGE FILE IS A ACTUAL IMAGE OR FAKE IMAGE
			$check = getimagesize($_FILES["eventPic"]["tmp_name"]);
			if ($check !== false) {
				// if (!file_exists($uploadFile) && move_uploaded_file($_FILES['eventPic']['tmp_name'], $uploadFile)) { // Check if file exists as well
				if (move_uploaded_file($_FILES['eventPic']['tmp_name'], $uploadFile)) {
					$picLocation = $uploadFile;
				} else {
					// header("refresh:$sec;url=$addEventPage", true, 303);
				    echo("Possible file upload attack!\n");
				    echo 'Here is some more debugging info:';
					print_r($_FILES);
					exit;
				}
			}
		}

		if (!empty($title)) {	
	        $query = "INSERT INTO events (title, date, location, detail, link, pic) VALUES ('$title', '$mysqlDate', '$location', '$description', '$link', '$picLocation')";
	        if (mysqli_query($dbc, $query)) {
	        	header("Location:aceadmin.php", true, 303);
	        	exit;
	        }	
	        else {
	        	header("refresh:$sec;url=$addEventPage", true, 303);
	        	echo("Failed: ".mysqli_error($dbc)."");	        	
	        }
	    } else {
	    	header("refresh:$sec;url=$addEventPage", true, 303);
	    	echo "Title must not be empty.";
	    }
	   	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ACE Admin Add Events Responses</title>
</head>
<body>
<p>Redirecting to add event page in <?php echo $sec;?> seconds.</p>
</body>
</html>