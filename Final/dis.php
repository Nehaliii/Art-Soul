<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="Images/AS.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="homepage2.css">
  <script src="Homepage.js"></script>
  <style>
  .con6{  
	  background-image: linear-gradient(to left,red,orange,yellow,green,blue,indigo,violet);
  }
  </style>
<body>

<?php
$db = mysqli_connect("localhost","root","","artandsoul"); 
$sql = "SELECT * FROM uploadacralic where category = 'Wildlife'";
$sth = $db->query($sql);
echo '<div class="con6">';
echo '<div class="container">';
if ($sth->num_rows > 0) {
while($row = $sth->fetch_assoc()) {
echo '<div class="col">';
echo '<div class="col-sm-4">';
echo '<div class="panel panel-danger">';
echo '<div class="panel-heading">';
echo "".$row["Name"];
echo '<div class="pull-right">'.$row["price"].'</div>';
echo '</div>';
echo '<div class="panel-body">';
echo '<img class="img-responsive" src="data:image;base64,'.base64_encode( $row['image'] ).'"/>';
echo '</div>';
echo '<div class="panel-footer">';
echo "HxW:". $row["height"]."x". $row["width"] ;
echo '<div class="pull-right">'.'<a href="cartdisplay.php">'.'<span class="glyphicon glyphicon-shopping-cart">'.'</span>'.'</a>'.'</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
}
}
echo '</div>';

?>
</body>
</html>
