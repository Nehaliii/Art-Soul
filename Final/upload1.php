<?php

if(!isset($_FILES['userfile']))

{

    echo '<p>Please select a file</p>';

}

else

{

    try {

    $msg= upload(); 

    echo $msg; 

    }

    catch(Exception $e) {

    echo $e->getMessage();

    echo 'Sorry, could not upload file';

    }

}

function upload() {


 

    $maxsize = 16000000;

    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {   

                if( $_FILES['userfile']['size'] < $maxsize) { 

                      $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));

                   $con = new mysqli("localhost","root","","artandsoul");

 if($con -> connect_error)
 {
	 
	 die("Fail".$con -> connect_error);
 }

session_start();
include_once("config.php");
if (isset($_SESSION['ema'])) {

                echo $_SESSION['ema'];
$email_id=$_SESSION['ema'];
$result = mysqli_query($mysqli, "SELECT artist_name FROM artist WHERE email_id='$email_id'");

while($res = mysqli_fetch_array($result))
{
   echo $name = $res['artist_name'];
   
}	
echo $name; 


      $price = $_POST['price'];
      $height = $_POST['height'];
	  $width = $_POST['width'];		 
	  $category = $_POST['category'];
	  

	 $sql = "INSERT INTO `uploadacralic`(`name`,`category`,`price`,`height`,`width`,`image`,`email_id`) VALUES ('$name','$category','$price','$height','$width','{$imgData}','$email_id');";

}   
                    // our sql query

                 
 if($con->query($sql)=== TRUE){
	 echo "sucess";
	 
 }else{
	 
	 echo"error".$sql."<br>".$con->error;
 }

                  

                    

                    ?>

<script>

alert('Recored Update successfully');

location.replace('index1.php')</script>

<?php

            }

             else {

                       $msg='<div>File exceeds the Maximum File limit</div>

                <div>Maximum File limit is '.$maxsize.' bytes</div>

                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].

                ' bytes</div><hr />';

                }

        }

        else

            $msg="File not uploaded successfully.";

    }

    else {

                   $msg= file_upload_error_message($_FILES['userfile']['error']);

    }

?>

<script>

alert('File size is large');

location.replace('index1.php')</script>

<?php

    return $msg;

}

function file_upload_error_message($error_code) {

    switch ($error_code) {

        case UPLOAD_ERR_INI_SIZE:

            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';

        case UPLOAD_ERR_FORM_SIZE:

            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';

        case UPLOAD_ERR_PARTIAL:

            return 'The uploaded file was only partially uploaded';

        case UPLOAD_ERR_NO_FILE:

            return ' ';

        case UPLOAD_ERR_NO_TMP_DIR:

            return 'Missing a temporary folder';

        case UPLOAD_ERR_CANT_WRITE:

            return 'Failed to write file to disk';

        case UPLOAD_ERR_EXTENSION:

            return 'File upload stopped by extension';

        default:

            return 'Unknown upload error';

    }

}

?>