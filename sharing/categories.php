<?php
//this is the categories file
//this can be the main file after user login
//this will show all the categories - fetching from the database
//dynamic fetching will be done
//code below

include_once 'dbconnect.php';
include_once 'header.php';

echo "This is the categories file<br>";
echo "Welcome to the categories, after successful login<br>";

while($out=mysqli_fetch_array($usrs[$i]))

?>
