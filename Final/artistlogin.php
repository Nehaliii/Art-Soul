<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artandsoul";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$em = $_POST['email'];
$pass = $_POST['pass'];
$sql = "SELECT email_id, password FROM artist";
$result = $conn->query($sql);
$email="";
$password="";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($email=$row["email_id"] == $em && $password=$row["password"]){
        break;
        }
    }
}
if($email==$em && $password==$pass){
	echo "<script type='text/javascript'>alert('Welcome $em');</script>";
    $_SESSION['ema'] = $em;
    header("Location:index1.php");
}
else{
	    unset($_SESSION['ema']);
	echo "<script> window.location.href = 'artistloginform.php'; alert('Invalide Email or Password');</script>";
}
?>
