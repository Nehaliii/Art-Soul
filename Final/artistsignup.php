<?php 
  $db = mysqli_connect('localhost', 'root', '', 'artandsoul');
  $email = "";
  if (isset($_POST['register'])) {
$name = $_POST['name'];
    $pw = $_POST['password'];
    $email = $_POST['email'];
    $phno = $_POST['phone'];
	$add = $_POST['add'];


  	$sql_e = "SELECT * FROM artist WHERE email_id='$email'";

  	$res_e = mysqli_query($db, $sql_e);

  
  	 if(mysqli_num_rows($res_e) > 0){
  	 
	  echo "<script> window.location.href = 'artist.php'; alert('Sorry... email already taken');</script>";

	  
  	}else{
           $query = "INSERT INTO artist (`password`, `artist_name`, `email_id`,`address`, `phone_no`) 
      	    	  VALUES ('$pw','$name','$email','$add','$phno')";
           $results = mysqli_query($db, $query);
           
		   header("location:artistloginform.php");
           exit();
  	}
  }
?>



