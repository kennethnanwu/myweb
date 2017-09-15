<?php
session_start();
include_once '../dbConn.php';

if(isset($_POST['btn-signup']))
{
 $uname = mysqli_real_escape_string($dbc, trim($_POST['uname']));
 $email = mysqli_real_escape_string($dbc, $_POST['email']);
 $upass = md5(mysqli_real_escape_string($dbc, trim($_POST['pass'])));
 $priv = mysqli_real_escape_string($dbc, trim($_POST['priv']));
 
 if(mysqli_query($dbc, "INSERT INTO admins(username,email,password,privilege) VALUES('$uname','$email','$upass','$priv')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 { 
  ?>
        <!-- <script>alert('error while registering you.'  );</script> -->
        <script>alert( "<?php echo mysqli_error($dbc); ?>" );</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>

<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>

<tr>
<td><input type="text" name="pass" placeholder="Your Password" required /></td>
</tr>

<tr>
<td><input type="text" name="priv" placeholder="Your Priv" required /></td>
</tr>

<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>