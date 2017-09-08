<?php
session_start();
date_default_timezone_set('America/Toronto');
ini_set("date.timezone", "America/Toronto");

include_once 'dbConn.php';

if(!isset($_SESSION['admin']))
{
 header("Location: ace_admin_login.php");
}
?>

<script type='text/javascript'>
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

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="eventname">Event title:</label>
    <input type="text" id="eventname" name="eventname" value="<?php if (!empty($title)) echo $title; ?>"><br/>

    <label for="eventdate">Event date:</label>
    <input type="text" id="eventdate" name="eventdate" value="<?php if (!empty($date)) echo $date; ?>"><br/>
    <select name="month" id="monthSelected" onchange="updateMonthSelected()">
    <?php for($i=0; $i<=11; $i++) {
    	$month_f = gmdate('F', strtotime("first day of $i month"));?>
         <option value="<?php echo $i + 1?>"><?php echo $month_f?></option>
    <?php }?>
	</select>
	<select name="day" id="dayList"></select>
	<select name="year">
		<option> <?php echo date("Y"); ?></option>
		<option> <?php echo date("Y", strtotime("+1 year")); ?></option>
	</select>
	<br/>
    <input type="submit" value="Submit" name="submit"/>
</form>

<?php
    if (isset($_POST['submit'])) {
	   	// SQL injection attack prevention
        $title = mysqli_real_escape_string($dbc, trim($_POST['eventname']));
		$date = mysqli_real_escape_string($dbc, trim($_POST['eventdate']));

		if (!empty($title) && !empty($date)) {	
	        $query = "INSERT INTO events (title, date) VALUES ('$title', '$date')";
	        if (mysqli_query($dbc, $query))
	        {
	        	echo "<p>提交成功</p>";
	        }	
	        else {
	        	echo("<p>提交失败: ".mysqli_error($dbc)."</p>");	        	
	        }

	    } else {
	    	echo "what the hell, 没写东西交个屁！";
	    }
    }

?>

<script>
var oTimerId;
function Timeout(){
alert("5 minutes inactive - please login again.");
location.href= ('logout.php');
}
function ReCalculate(){
clearTimeout(oTimerId);
oTimerId = setTimeout('Timeout()', 5 * 60 * 1000); //js 是用毫秒計算
}
document.onmousedown = ReCalculate;
document.onmousemove = ReCalculate;
ReCalculate();
</script>