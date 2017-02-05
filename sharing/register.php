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
	$name = mysql_real_escape_string($_POST['name']);
	$phn = mysql_real_escape_string($_POST['phn']);
	
	$uname = trim($uname);
	$upass = trim($upass);
	$email = trim($email);
	$name = trim($name);
	$phn = trim($phn);
	
			
	if(mysql_query("INSERT INTO users(uname,pswd,name,email,mobile) VALUES('$uname','$upass','$name','$email','$phn')"))
		{
			mysql_query("CREATE TABLE `uploadbin`.`$uname` ( `bookid` INT(5) PRIMARY KEY AUTO_INCREMENT , `buy` INT(1) DEFAULT '0' , `chat` VARCHAR(40)) ENGINE = InnoDB");

//fetch the 
			//mysql_query("SELECT id FROM idbook");
			//$result = mysql_query("SELECT id FROM idbook");
			//$data=mysql_fetch_assoc($result);
			//$da=$data['id'];
			
			//mysql_query("INSERT INTO $uname(bookid,buy,chat) VALUES('$da','0',NULL)");

			//$da=$data['id']+1;
			//mysql_query("UPDATE idbook SET id=$da");
			

			//redirect to login page
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
<table align="right" width="55%" border="0">
<tr>
	<td><h1>Register</h1></td>
</tr>
<tr>
<td><input name="uname" placeholder="Choose Username" required /></td>
</tr>
<tr>
<td><input name="name" placeholder="Your name" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Choose Password" required /></td>
</tr>
<tr>
<td><input name="email" type="email" placeholder="Enter email id" required /></td>
</tr>
<tr>
<td><input name="phn" placeholder="Enter mobile no." required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Register</button></td>
</tr>
</table>
</form>
</div>
</body>
</html>


