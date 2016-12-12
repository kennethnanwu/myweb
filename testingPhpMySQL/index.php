<?php
echo "wtfa<br>";
echo "after session start<br>";
$dbhost = 'localhost';
$dbport = '8889';
$dbuser = 'root';
$dbpass = 'root';
$db = 'aceweb';
$link = mysqli_init();
$handle = mysqli_real_connect($link, $dbhost, $dbuser, $dbpass, $db, $dbport);
echo "after setting up database<br>";
if (!$handle) {
    echo "Did not access to the databse<br>";
} else {
    echo "successfully conncet to database<br>";
}

$sql = "SELECT title, subTitle FROM clubDescription";
$retvals = mysqli_query($link, $sql);
if(!$retvals )
{
  echo "Could not get data.";
}
while($row = mysqli_fetch_assoc($retvals))
{
    echo "TITLE :{$row['title']}  <br> ".
         "SUB TITLE : {$row['subTitle']} <br> ".
         "--------------------------------<br>";
} 
$retvals->close();
echo "Fetched data successfully\n";
?>