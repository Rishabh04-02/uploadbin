<?php
//this file will be used for adding admins
//this file will be intentionally made disfunctional after addition of 1 admin
//can be corrected using the php coding
//code below
if(isset($_SESSION['user'])!="")
{
	header("Location: categories.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$email = mysql_real_escape_string($_POST['email']);
	$fname = mysql_real_escape_string($_POST['fname']);
	$roll = mysql_real_escape_string($_POST['roll']);
	
	$uname = trim($uname);
	$upass = trim($upass);
	$email = trim($email);
	$fname = trim($fname);
	$roll = trim($roll);
	
			
	if(mysql_query("INSERT INTO users(uname,pswd,emaila,rollno) VALUES('$uname','$upass','$email','$roll')"))
		{
			header("Location:login.php");
			?>
			
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}		
	
		
}
?>
<!DOCTYPE html>
<head>
<title>Register - Bookhub</title>
<!--add link here of css <link rel="stylesheet" href="../style.css" type="text/css" /> -->

</head>
<body>
<div id="login-form">
<form method="post">
<table align="right" width="35%" border="0">
<tr>
	<td><h1>Register</h1></td>
</tr>
<tr>
<td><input name="uname" placeholder="Choose Username" required /></td>
</tr>
<tr>
<td><input name="fname" placeholder="Your name" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Choose Password" required /></td>
</tr>
<tr>
<td><input name="email" type="email" placeholder="Enter email id" required /></td>
</tr>
<tr>
<td><input name="roll" placeholder="Enter roll no." required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Register</button></td>
</tr>
</table>
</form>
</div>
</body>
</html>


