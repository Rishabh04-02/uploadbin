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

if(isset($_POST['submit']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$fname = mysql_real_escape_string($_POST['fname']);
    $lname = mysql_real_escape_string($_POST['lname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$phn = mysql_real_escape_string($_POST['foneno']);
	
	$uname = trim($uname);
	$fname = trim($fname);
	$lname = trim($lname);
	$email = trim($email);
	$upass = trim($upass);
	$phn = trim($phn);
	
			
if(mysql_query("INSERT INTO users(pswd,emaila,fname,lname,mobileno,uname) VALUES('$upass','$email','$fname','$lname','$phn')"))
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
<html>
<head>
<title>Header</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
   <script src="js/bootstrap.js"></script>
<!-- //js -->
</head>
<body>


<div class="container-liquid">
<div class="row">
<div class="register">
<form name="form1" id="signin_form"  method="post" >
<label for="uname">
First Name </label>
<input type="text" name="uname" required/><br/>
<label for="fname">
Last Name </label>
<input type="text" name="fname" required/><br/>
<label for="lname">
Username </label>
<input type="text"  name="lname" required/><br/>
<label for="email">
Email </label>
<input type="email"  name="email" required/><br/>
<label for="foneno">
Phone </label>
<input name="foneno" required/><br/>
<label for="pswd">
Password </label>
<input type="password"  name="pswd"><br/>
<div class="clearfix"></div>
<b><font color="#FF0000"> </b></font></br>
<input type="submit" name="submit" value="submit" ><br/><br/>
</form>
</div>  
</div>
</div>	
</body>
</html>	

