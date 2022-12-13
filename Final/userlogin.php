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
$sql = "SELECT email_id, password FROM users";
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
    $_SESSION['emas'] = $em;
    header("Location:Home.php");
}
else{
    
    unset($_SESSION['emas']);
	echo "<script> window.location.href = 'userloginform.php'; alert('Invalide Email or Password');</script>";

}
?>
