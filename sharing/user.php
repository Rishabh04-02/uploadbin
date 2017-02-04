<?php
//this is the user page this will allow user to post a new book
//chat with the user
//will show notifications
//will delete the books once it's been purchases as clear.php is embeded in it
//code below

session_start();
    $user=$_SESSION['user'];
include_once 'dbconnect.php';
include_once 'header.php';

$res=mysql_query("SELECT * FROM users WHERE uname='$user'");
while($out=mysql_fetch_array($res))

	{
        $na=$out['uname'];
        echo "$na<br>";        
        $na=$out['name'];
        echo "$na<br>";        
        $na=$out['email'];
        echo "$na<br>";        
        $na=$out['mobile'];
        echo "$na<br>";        
    }


?>
