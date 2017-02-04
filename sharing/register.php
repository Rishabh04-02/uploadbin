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
<div class="row" id="header">
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="logo">
      <img src="images/logo.png" id="logoimg"/><a href="index.php">BookHub</a>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     
	 <form class="navbar-form navbar-left" role="search" id="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" id="in">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
     </div>     
</div>
<div class="row">
<div class="register">
<form name="form1" id="signin_form" class="form_modal_style" method="post">
<label for="username">
First Name </label></br></br>
<input type="text" name="username" id="username"/><br/><br/>
<label for="username">
Last Name </label></br></br>
<input type="text" name="username" id="username"/><br/><br/>
<label for="username">
Username </label></br></br>
<input type="text"  name="username" id="username"/><br/><br/>
<label for="username">
Email </label></br></br>
<input type="email"  name="username" id="username"/><br/><br/>
<label for="username">
Phone </label></br></br>
<input type="text" name="username" id="username"/><br/><br/>
<label for="password">
Password </label></br></br>
<input type="password"  id="password" name="password"><br/><br/>
<label for="password">
Confirm Password </label></br></br>
<input type="password"  id="password" name="password"><br/><br/>
<div class="clearfix"></div>
<b><font color="#FF0000"> </b></font></br>
<input type="submit" name="submit" value="Sign in" class="btn-submit"><br/><br/>
<div class="submit-block">
<a href="register.php" class="link_sign_up">Sign up here  </a><span>or sign in with</span>
<ul class="social-icon clearfix">

</ul>
</div>
</form>
</div>  
<div class="clearfix grey-line"></div>
</div>
</div>	
</body>
</html>	
