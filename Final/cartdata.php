<html>
<body>
<?php
session_start();

$db = mysqli_connect("localhost","root","","artandsoul"); 
$sql = "SELECT * FROM uploadacralic where category = 'PaperCraft'";
$sth = $db->query($sql);
echo '<div class="con5">';
echo '<div class="container">';
if ($sth->num_rows > 0) {
while($row = $sth->fetch_assoc()) {
echo '<form action="cartdata.php?id='.$row['id'].'" method="POST">';
echo '<div class="col">';
echo '<div class="col-sm-4">';
echo '<div class="panel panel-danger">';
echo '<div class="panel-heading">';
echo "".$row["Name"];
echo '<div class="pull-right">'.'<i class="fa fa-rupee">'.$row["price"].'</i>'.'</div>';
echo '</div>';
echo '<div class="panel-body" style="height:55%;">';
echo '<img style="height:100%;width:100%;position: relative;" class="img-responsive" src="data:image;base64,'.base64_encode( $row['image'] ).'"/>';
echo '</div>';
echo '<div class="panel-footer">';
echo "HxW:". $row["height"]."x". $row["width"]."\tfeet" ;
echo '<input type="submit" value="submit" name="submit">';
echo '</div>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '</div>';
}
}
echo '</div>';

echo "<a href='cartdatainsert.php'>.dsfghgfds.</a>";
?>
 <?php
	if(isset($_POST['submit']))
{
$e=$_SESSION['emas'];	
$id = $_GET['id'];
$db = mysqli_connect("localhost","root","","artandsoul"); 
$sql = "SELECT price, category FROM uploadacralic where id = '$id'";
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
$price=$row['price'];
$category=$row['category'];
}

$sql_e = "SELECT * FROM cart where product_id = '$id'";
$res_e = mysqli_query($db, $sql_e);
if(mysqli_num_rows($res_e) > 0){
	  echo "<script>  alert('Sorry... this item is already added to your cart');</script>";
  	}else{

$query ="INSERT INTO `cart`(`cart_id`, `email_id`, `product_id`, `price`,`category`) VALUES (0,'$e','$id','$price','$category')";
           $results = mysqli_query($db, $query);
		  
}
}
 ?>
</body>
</html>