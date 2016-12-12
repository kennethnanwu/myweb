<?php
echo 'inside db_fns';
public function db_connect() {
	try {
		echo "here";
		$dbhost = 'localhost:8889';
		$dbuser = 'root';
		$dbpass = 'root';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		mysql_select_db('aceweb');
	} catch (Exception $e) {
		echo $e->message;
		exit;
	}
	if (!$conn) {
		return false;
	}
	return $conn;
}
?>