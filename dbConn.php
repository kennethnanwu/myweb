<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$port = 3306;
$dbname = "aceweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "got results.";
} else {
    echo "0 results";
}
$conn->close();
?>