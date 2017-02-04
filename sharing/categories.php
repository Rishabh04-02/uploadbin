<?php
//this is the categories file
//this can be the main file after user login
//this will show all the categories - fetching from the database
//dynamic fetching will be done
//code below

include_once 'dbconnect.php';
include_once 'header.php';



$res=mysql_query("SELECT * FROM categories");
while($out=mysql_fetch_array($res))

	{
        $na=$out['catname'];
        echo "$na<br>";        
    }

?>
