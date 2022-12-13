<?php
session_start();


$email="nehali@gmail.com";
$password="nehali00";

$em = $_POST['email'];
$pass = $_POST['pass'];

if($email==$em) 
{ if ($password==$pass){
    $_SESSION['emaa'] = $em;
    header("Location:home.php"); 	
	
}
else{
	unset($_SESSION['emaa']);
	echo "<script> window.location.href ='admin.php';alert('invalide');</script>";
	
}

}



?>

