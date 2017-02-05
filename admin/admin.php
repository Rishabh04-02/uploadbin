
<?php
//this is the main admin.php file
//this file will allow admin to see all the pasted contents
//admin can delete any of the pasted content
//code below
include_once 'header.php';
include_once 'dbconnect.php';
print("<a href='logout.php'><button id='righ' >Logout</button></a>");


print("<center>");
print("<code><h3>Welcome Admin</h3><h3>The list of all available directories & files </h3></code>");
print("</center>");


//displaying contents of a particular directory
print("<div id='fetch'");
echo "<h1><code>";
function listFolderFiles($dir){
    $ffs = scandir($dir);
    echo '<ol>';
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            echo '<li>'.$ff;
            if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
            echo '</li>';
        }
    }
    echo '</ol>';
}

listFolderFiles('../dir/');
echo "</code></h1>";
print("</div>");

?>

