<html>
<body>
<?php
$db = mysqli_connect("localhost","root","","artandsoul"); 
$sql = "SELECT id, price, image FROM uploadacralic";
$sth = $db->query($sql);
if ($sth->num_rows > 0) {
while($row = $sth->fetch_assoc()) {
echo '<img style="height:40px;" src="data:image;base64,'.base64_encode( $row['image'] ).'"/>';
echo "<br> id: ". $row["id"]. "  Price: ". $row["price"] . "</br>";
}
}
?>
</body>
</html>
