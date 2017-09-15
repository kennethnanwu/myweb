<?php
	session_start();
	date_default_timezone_set('America/Toronto');
	// ini_set("date.timezone", "America/Toronto");
	include_once '../dbConn.php';

	if(!isset($_SESSION['admin'])) {
		header("Location:ace_admin_login.php");
	}
?>

<script>
	function updateMonthSelected(){
		var selected = document.getElementById("monthSelected");
		var selectedMonth = selected.options[selected.selectedIndex].value;

		var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            document.getElementById("dayList").innerHTML = this.responseText;
	        }
	    };
	    xmlhttp.open("GET", "updateDayList.php?month=" + selectedMonth, true);
	    xmlhttp.send();
	}
</script>

<!DOCTYPE html>
<html>
<head>
	<title>ACE Admin Add Events</title>
	<?php include('../header.php'); ?>
</head>
<?php include('navBar.php'); ?>
<body>
<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->

<div class="w3-content" style="max-width:2000px;margin-top:46px">
<div class="w3-black w3-padding-32">
<div class="w3-container w3-content w3-padding-8" style="max-width:800px">
	<form enctype="multipart/form-data" method="post" action="addEventToDB.php">
	    <label for="eventname">Event title:</label>
	    <input type="text" id="eventname" name="eventname" value="<?php if (!empty($title)) echo $title; ?>"><br/>

	    <label for="eventdate">Event date:</label>
	    <select name="month" id="monthSelected" onfocus="updateMonthSelected()" onchange="updateMonthSelected()">
	    <?php for($i=0; $i<=11; $i++) {
	    	$month_full = gmdate('F', strtotime("first day of $i month"));
	    	$month_number = gmdate('m', strtotime("first day of $i month"));?>
	         <option value="<?php echo $month_number;?>"><?php echo $month_full?></option>
	    <?php }?>
		</select>
		<select name="day" id="dayList"></select>
		<select name="year">
			<option> <?php echo date("Y"); ?></option>
			<option> <?php echo date("Y", strtotime("+1 year")); ?></option>
		</select><br/>

		<label for="eventlocation">Event location:</label>
	    <input type="text" id="eventlocation" name="eventlocation" value="<?php if (!empty($location)) echo $location; ?>"><br/>

	    <label for="eventdescription">Event description:</label>
	    <textarea name="eventdescription" cols="40" rows="6"></textarea><br/>

	    <label for="eventlink">Event signup page link:</label>
	    <input type="text" name="eventlink"><br/>

	    <input type="hidden" name="<?php echo ini_get("session.upload_progress.name"); ?>" value="123" />
	    Event picture: <input name="eventPic" type="file" /><br/>
	    <input type="submit" value="Submit" name="submit"/>
	</form>
	<input type="button" onclick="location.href='aceadmin.php'" value="Go back"/>
</div>
</div>
</div>
</body>
</html>


<script type="text/javascript">
	// Logout after 5 mins inactive
	var oTimerId;
	function Timeout(){
		alert("100 minutes inactive - please login again.");
		location.href= ('logout.php');
	}
	function ReCalculate(){
		clearTimeout(oTimerId);
		oTimerId = setTimeout('Timeout()', 100 * 60 * 1000); //js 是用毫秒計算
		// console.log(oTimerId);
	}
	document.onmousedown = ReCalculate;
	document.onmousemove = ReCalculate;
	ReCalculate();
	updateMonthSelected();
</script>

<style type="text/css">
	textarea {
		vertical-align: top;
		display: inline;
	}
</style>