<?php
session_start();
include_once 'dbConn.php';

if(!isset($_SESSION['admin']))
{
 header("Location: ace_admin_login.php");
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="eventname">Event title:</label>
    <input type="text" id="eventname" name="eventname" value="<?php if (!empty($title)) echo $title; ?>"><br/>

    <label for="eventdate">Event date:</label>
    <input type="text" id="eventdate" name="eventdate" value="<?php if (!empty($date)) echo $date; ?>"><br/>

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