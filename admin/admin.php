
<?php
//this is the main admin.php file
//this file will allow admin to see all the pasted contents
//admin can delete any of the pasted content
//code below
include_once 'header.php';

print("<center>");
print("<code><h3>Welcome Admin</h3><h1>The list of all available directories </h1></code>");


//scanning direcroties
$dir = "../dir/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "<code><h4>" . $file . "</code> ";
    }
    closedir($dh);
  }
}

//displaying contents of a particular directory


print("<code><h3>Display contents of a particular directory</h3></code>");

print("</center>");
?>
