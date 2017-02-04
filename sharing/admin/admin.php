<?php
//this is the admin page 
//admin can see each book published from categories page and books page 
//and admin can delete any book from the server withour any authentication/permission
//admin can read any chats - whether they are related or useless
//admin can see all the successfull transactions
//admin can message any user to follow the code of conduct and don't use the messaging/mailing service for wrong purposes
//admin can delete/block any user
//add the list of users and all books available
//code below
if(isset($_SESSION['user'])!="")
{
	header("Location: admin.php");
}
include_once 'dbconnect.php';
include_once 'header.php';


if(isset($_POST['category']))
{
	$cat = mysql_real_escape_string($_POST['cat']);
		
	$cat = trim($cat);
	mysql_query("INSERT INTO categories(catname) VALUES('$cat')");
		
	
	}
	else
	{

	}
	


	if(isset($_POST['subcate']))
{
	$subcat = mysql_real_escape_string($_POST['subcat']);
	$catid2 = mysql_real_escape_string($_POST['catid1']);
		
	$subcat = trim($subcat);
	$catid2 = trim($catid2);
	mysql_query("INSERT INTO subcat(catid,subcatname) VALUES('$catid2','$subcat')");
		
	
	}
	else
	{

	}

	if(isset($_POST['deleteb']))
{
	$unamea = mysql_real_escape_string($_POST['unamea']);
			
	$unamea = trim($unamea);
	
	mysql_query("DELETE FROM users WHERE uname='$unamea'");
	mysql_query("DROP TABLE $unamea");
		
	
	}
	else
	{

	}
	




?>
<center>
<div id="category">
<form method="post">
<table  width="35%" border="0">
<tr>
	<td><h2>Add category</h2></td>
</tr>
<tr>
<td><input type="text" name="cat" placeholder="Add category" title="Add category" required /></td>
</tr>
<td><button type="submit" name="category">Send value</button></td>
</tr>
</table>
</form>
</div>
</center>

<center>
<div id="subcat">
<form method="post">
<table  width="35%" border="0">
<tr>
	<td><h2>Add Subcategory</h2></td>
</tr>
<tr>
<td><input type="text" name="catid1" placeholder="Add category id" title="Add category id" required /></td>
</tr>
<tr>
<td><input type="text" name="subcat" placeholder="Add category" title="Add category" required /></td>
</tr>
<td><button type="submit" name="subcate">Send value</button></td>
</tr>
</table>
</form>
</div>
</center>


<center>
<div id="deletea">
<form method="post">
<table  width="35%" border="0">
<tr>
	<td><h2>Delete User</h2></td>
</tr>
<tr>
<td><input type="text" name="unamea" placeholder="Delete user" title="Delete user" required /></td>
</tr>

<td><button type="submit" name="deleteb">Send value</button></td>
</tr>
</table>
</form>
</div>
</center>