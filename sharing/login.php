<?php
//this is the file which will handle the login queries for the site whenever needed
//code below
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: categories.php");
}

if(isset($_POST['btn-login']))
{
	$idd = mysql_real_escape_string($_POST['idd']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	
	$idd = trim($idd);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT uname, pswd FROM users WHERE uname='$idd'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['pswd']==($upass))
	{
		$_SESSION['user'] = $row['id'];
	    header("Location: categories.php");
      
	}
	else
	{
		?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
	}
	
}
?>

<!DOCTYPE html>
<head>
<title>login - Bookhub</title>
<!--add link here of css <link rel="stylesheet" href="../style.css" type="text/css" /> -->
</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="left" width="35%" border="0">
<tr>
	<td><h1>Login</h1></td>
</tr>
<tr>
<td><input type="text" name="idd" placeholder="Unique id" title="Unique id" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Password" title="Your password here please" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Login</button></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>