<?php
session_start();
include_once '../dbConn.php';

if(isset($_SESSION['admin'])!="")
{
 header("Location: aceadmin.php");
}
if(isset($_POST['btn-login']))
{
 $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
 $upass = mysqli_real_escape_string($dbc, trim($_POST['pass']));
 $res=mysqli_query($dbc, "SELECT * FROM admins WHERE username='$username'");
 $row=mysqli_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['admin'] = $row['uid'];
  $_SESSION['privilege'] = $row['privilege'];
  header("Location: aceadmin.php");
 }
 else
 {
  ?>
        <script>alert('wrong username or password');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html>
<html>
<head>
<title>ACE Admin Login</title>
<?php include('../header.php'); ?>
</head>
<body>
	<center>
	<div id="login-form">
		<form method="post">
		<table align="center" width="30%" border="0">
		<tr>
			<td><input type="text" name="username" placeholder="Your Username" required value="<?php if (!empty($username)) echo $username; ?>"/></td>
		</tr>
		<tr>
			<td><input type="password" name="pass" placeholder="Your Password" required value="<?php if (!empty($upass)) echo $upass; ?>"/></td>
		</tr>
		<tr>
			<td><button type="submit" name="btn-login">Sign In</button></td>
		</tr>
		</table>
		</form>
	</div>
	</center>
</body>
</html>