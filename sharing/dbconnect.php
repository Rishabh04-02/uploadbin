<?php
//this is the dbconnect file
//this will be used for all types of database connectivities
//code below
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
	
	if(!mysql_connect("localhost","root","hey"))
{
	die('can not connect to server '.mysql_error());
}
if(!mysql_select_db("uploadbin"))
{
	die('database connection problem '.mysql_error());
}


?>
