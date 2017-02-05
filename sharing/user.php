<?php
//this is the user page this will allow user to post a new book
//chat with the user
//will show notifications
//will delete the books once it's been purchases as clear.php is embeded in it
//pre below

session_start();
    $user=$_SESSION['user'];
include_once 'dbconnect.php';
include_once 'header.php';

$res=mysql_query("SELECT * FROM users WHERE uname='$user'");
while($out=mysql_fetch_array($res))
	{
        $na=$out['uname'];
        echo "<b>Username</b> $na<br>";        
        $na=$out['name'];
        echo "<b>Your name</b> $na<br>";        
        $na=$out['email'];
        echo "<b>Email</b> $na<br>";        
        $na=$out['mobile'];
        echo "<b>Mobile no.</b> $na<br>";        
    }
print("<br>");
print("<br>");
print("<br>");
$res1=mysql_query("SELECT * FROM books WHERE uzr='$user'");
while($out1=mysql_fetch_array($res1))
    {
        $na=$out1['bname'];
        echo "<b>Name of book </b>$na<br>";        
        $na=$out1['cost'];
        echo "<b>Cose of book</b> $na<br>";        
        $na=$out1['category'];
        echo "<b>Category id</b> $na<br>";               
    }   
    ?>


<br/><br/>
ADD BOOK 
<form method="post">
 <select name="catidd">
 <?php
 $res2=mysql_query("SELECT * FROM categories");
print "<option>Select Category</option>";
 while($out2=mysql_fetch_array($res2))
 {
    $asdf=$out2['catname'];
    $asdf1=$out2['catid'];
      print("<option value='$asdf1'>$asdf</option>");
 }
 ?> 
 </select>
 <input type="text" name="book" placeholder="Enter Book Name">
 <input type="text" name="cost" placeholder="Enter Cost">
 <input type="submit" name="submit" value="go"> 
<?php
if(isset($_POST["submit"]))
{
$catidd=$_POST["catidd"];
$bname=$_POST["book"];
$cost=$_POST["cost"];


mysql_query("SELECT id FROM idbook");
            $result = mysql_query("SELECT id FROM idbook");
            $data=mysql_fetch_assoc($result);
            $da=$data['id'];
            
         mysql_query("INSERT INTO $uname(bookid,buy,chat) VALUES('$da','$cost',NULL)");

    mysql_query("INSERT INTO books(bid,bname,cost,category,uzr) VALUES('$da','$bname','$cost','$catidd','$user')");

    $da=$data['id']+1;
            mysql_query("UPDATE idbook SET id=$da");
}


?>
</form>