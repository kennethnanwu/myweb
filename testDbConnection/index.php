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
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - date: " . $row["date"]. ", location: " . $row["address"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>