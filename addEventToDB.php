<?php
	session_start();
	date_default_timezone_set('America/Toronto');
	// ini_set("date.timezone", "America/Toronto");
	include_once 'dbConn.php';

	if(!isset($_SESSION['admin'])) {
		header("Location:ace_admin_login.php");
	}

	if (isset($_POST['submit'])) {
		// Upload file to server
		$uploaddir = 'img/';
		$uploadfile = $uploaddir . basename($_FILES['eventPic']['name']);

		if (move_uploaded_file($_FILES['eventPic']['tmp_name'], $uploadfile)) {
			// SQL injection attack prevention
		    $title = mysqli_real_escape_string($dbc, trim($_POST['eventname']));
		    $location = mysqli_real_escape_string($dbc, trim($_POST['eventlocation']));
			// $description = mysqli_real_escape_string($dbc, trim($_POST['eventdescription']));
			$description = $uploadfile;
			$year = mysqli_real_escape_string($dbc, trim($_POST['year']));
			$month = mysqli_real_escape_string($dbc, trim($_POST['month']));
			$day =  mysqli_real_escape_string($dbc, trim($_POST['day']));
			$Ymd = $year."/".$month."/".$day;
			$mysqlDate = date("Y-m-d H:i:s", strtotime($Ymd));

			if (!empty($title) && !empty($year) && !empty($month) && !empty($day)) {	
		        $query = "INSERT INTO events (title, date, location, detail) VALUES ('$title', '$mysqlDate', '$location', '$description')";
		        if (mysqli_query($dbc, $query)) {
		        	header("Location:aceadmin.php", true, 303);
		        	exit;
		        }	
		        else {
		        	echo("提交失败: ".mysqli_error($dbc)."");	        	
		        }

		    } else {
		    	echo "what the hell, 没写东西交个屁！";
		    }
		} else {
		    echo("Possible file upload attack!\n");
		    echo 'Here is some more debugging info:';
			print_r($_FILES);
		}

	   	
	}
?>