<?php include_once 'headeradmin.php';
include_once 'dbconnect.php';



   if(isset($_POST['btn-login']))
{
    session_start();
    $_SESSION['user'] = $_POST['idd'];
    $idd = mysql_real_escape_string($_POST['idd']);
    $upass = md5(mysql_real_escape_string($_POST['pass']));
    
    $idd = trim($idd);
    $upass = trim($upass);
    
    $res=mysql_query("SELECT uname, pswd FROM admin WHERE uname='$idd'");
    $row=mysql_fetch_array($res);
    
    $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
    
    if($count == 1 && $row['pswd']==($upass))
    {
              
        
      
    }
    else
    {
        ?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
        header("Location: index.php");
    }
    
}


?>
<div class="container">
  <div class="jumbotron">
<?php
//this is the main admin.php file
//this file will allow admin to see all the pasted contents
//admin can delete any of the pasted content
//code below

if($count!=1)
{
    header("Location: index.php");
}


print("<center>");
print("<code><h3>Welcome Admin  </h3><h3>The list of all available directories & files </h3></code>");
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

<form method="post">
<input type="text" name="delete" placeholder="dir name">
<input type="submit" name="submit" value="Delete">
<br/><br/>
</form>
</div>
</div>