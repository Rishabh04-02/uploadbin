<?php
//this is the main page this will include register.php and login.php
//this can have the dynamic capacity to display the latest added books
//code below

include_once 'header.php';






?>
<center><br/>
<form method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
</center>

</body>
</html>	