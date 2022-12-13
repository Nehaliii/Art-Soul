<?php
include("config.php");
 
//getting id of the data from url
$id = $_GET['cart_id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM cart WHERE cart_id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:cartdatainsert.php");
?>