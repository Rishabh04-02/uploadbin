<?php
//code below

include_once 'dbconnect.php';
include_once 'header.php';


if(isset($_POST['submit-it']))
{
	
	//upload a file
	$errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_type = $_FILES['file']['type'];

      $file_name = trim($file_name);
      
      
      if($file_size > 2097152000) {
         $errors[]='File size must be <= 2 GB';
      }


//database dir name fetch
			$result = mysql_query("SELECT id FROM dirname");
			$data=mysql_fetch_assoc($result);
			$da=$data['id'];
 
 //adding entry to other database
   


			//creating directory
			mkdir("dir/$da", 0777);
		
			//upload code here
			if(empty($errors)==true) {
        	 move_uploaded_file($file_tmp,"dir/$da/".$file_name);
         	echo "<br><br><center><b>Success</b> - ";
         	echo "Your file has been uploaded to the below url<br>";
         	$actual_link = "http://$_SERVER[HTTP_HOST]";
         	$loc="/uploadbin/dir/$da/".$file_name;
         	echo "<code>$actual_link$loc</code>";
          echo "</center>";
          $put=$actual_link.$loc;
          //echo "$put";
          //mysql_query("UPDATE dircontent SET id='$da'");
          //mysql_query("UPDATE dircontent SET location='$put' Where id='$da'");
         	

      		}
      		else{
         	print_r($errors);
      			}

			$da=$data['id']+1;
			mysql_query("UPDATE dirname SET id=$da");
      
	}
	else
	{

	}





?>
<center><br/>
<code>
	<h1>Welcome to Uploadbin</h1>
  <h4>Upload your files & share with others over Intranet<br/> with the premium speed of over 50 Mbps.</h4>
	</code>
<div id="mainfor">
<form method="post" id="signin_form" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="file" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit-it">
</form>
</div>
</center>

</body>
</html>	
