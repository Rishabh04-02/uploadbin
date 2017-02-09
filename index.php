<?php
//code below

include_once 'dbconnect.php';
include_once 'header.php';

?>
<div class="container">
  <div class="jumbotron">
    <center>
<code>
  <h1>Welcome to Uploadbin</h1>
  <h4>Upload your files & share with others over Intranet<br/> with the premium speed of over 50 Mbps.</h4>
  </code>
</center>
<?php

if(isset($_POST['submit-it']))
{
	
	//upload a file
	$errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_type = $_FILES['file']['type'];

      //replacing spaces from file name with underscorer
      //$file_name = str_replace(' ', '_', $file_name);
      
      
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
      chmod("dir/$da", 0777); 
		
			//upload code here
			if(empty($errors)==true) {
        	 move_uploaded_file($file_tmp,"dir/$da/".$file_name);
         	echo "<br><br><center><b><h3>Success</b> - ";
         	echo "Your file has been uploaded to the below url<br>";
         	$actual_link = "http://$_SERVER[HTTP_HOST]";
         	$loc="/uploadbin/dir/$da/".$file_name;
         	echo "<code>$actual_link$loc</code>";
          echo "</h3></center>";
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

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="login">
                      
                    <form class="form-signin" method="post" action="index.php">
                    Select file to upload :
                <input type="file" class="form-control  btn btn-block" placeholder="upload file" required>
                <input type="submit" class="btn btn-lg btn-default btn-block" value="Upload File" name="submit-it">
                    </form>
          </div>
            </div>
            </div>
        </div>
    </div>

</div>
  
</div>
</body>
</html>	
