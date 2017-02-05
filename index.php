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
      
      
      if($file_size > 20971520) {
         $errors[]='File size must be excately 2 GB';
      }


//database dir name fetch
			$result = mysql_query("SELECT id FROM dirname");
			$data=mysql_fetch_assoc($result);
			$da=$data['id'];

			//creating directory
			mkdir("dir/$da", 0777);
		
			//upload code here
			if(empty($errors)==true) {
        	 move_uploaded_file($file_tmp,"dir/$da/".$file_name);
         	echo "<center>Success</center>";
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
<form method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="file" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit-it">
</form>
</center>

</body>
</html>	