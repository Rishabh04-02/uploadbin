<?php
//this is the books.php file this will display all the files based on the category chosen by the user
//this page is also dynamic
//will receive post request from the categories page
//code belowo

session_start();
    $user=$_SESSION['user'];
include_once 'dbconnect.php';
include_once 'header.php';
$catid=$_POST["$catid"];
$res=mysql_query("SELECT * FROM books WHERE category='$catid'");
while($out=mysql_fetch_array($res))
	{
        $na=$out['bname'];
        echo "$na<br>";        
        $na=$out['cost'];
        echo "$na<br>";        
        $na=$out['uzr'];
        echo "$na<br>";               
    }




?>
