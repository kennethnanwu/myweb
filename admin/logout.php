<?php
	session_start();

 	// unset($_SESSION['admin']);
 	// $_SESSION = array();
 	session_unset();
 	session_destroy();

 	header("Location: ../index.php");
?>