
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
<!--<?php
/*if(isset($_POST['submit']))
{
    $delete=$_POST['delete'];
    chdir('../dir');
    $pathdir=getcwd();
    $dir=$pathdir."/".$delete."/";
    echo "$dir";w
/*function deletedir($dir)
    {
        if (is_dir($dir))
        {
            $files = scandir($dir);
            foreach ($files as $file)
            {
                if ($file != "." && $file != "..")
                {
                    if (filetype($dir."/".$file) == "dir")
                    {
                        $this->deletedir($dir."/".$file);
                    }
                    else
                    {
                        unlink($dir."/".$file);
                    }
                }
            }
            reset($objects);
            if(rmdir($dir))
            {
                return 'deleted successfully!';
            }
            else
            {
                return 'delete failed!';
            }
        }
        else
        {
            return 'doesn\'t exist or inaccessible!';
        }
    }*/

}
?>-->
<form method="post">
<input type="text" name="delete" placeholder="dir name">
<input type="submit" name="submit" value="Delete">
<br/><br/>
</form>