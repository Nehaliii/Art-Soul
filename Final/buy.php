<?php
session_start();
include("config.php"); 
$email_id = $_SESSION['emas'];

$db = mysqli_connect("localhost","root","","artandsoul"); 
$sql = "SELECT product_id FROM cart where email_id= '$email_id'";
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
$ids=$row['product_id'];

$res=mysqli_query($mysqli, "UPDATE `uploadacralic` SET `status`='Sold' WHERE id = '$ids'");;
}
 
$result = mysqli_query($mysqli, "DELETE FROM cart WHERE email_id= '$email_id'");
echo "<script> window.location.href = 'Home.php'; alert('Thank you for buying');</script>";
 
//redirecting to the display page (index.php in our case)
?>