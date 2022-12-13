<?php
session_start();
?>
<html lang="en">

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
  <link rel="stylesheet" type="text/css" href="homepage2.css?v=<?php echo time(); ?>">
  <script src="Homepage.js"></script>

<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<div class="fix">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Art & Soul
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="Home.php">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Painting<span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Acrylic.php">Acrylic Painting</a></li>
              <li><a href="Glass.php">Glass Painting</a></li>
              <li><a href="Spray.php">Spray Painting</a></li>
              <li><a href="Oil.php">Oil Painting</a></li>
            </ul>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pencil<span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Portrait.php">Portrait</a></li>
              <li><a href="BodyS.php">Body Sketch</a></li>
              <li><a href="Landscape.php">Landscape</a></li>
              <li><a href="Wildlife.php">Wildlife</a></li>
            </ul>
          </li>
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Color Pencil<span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="PortraitC.php">Portrait</a></li>
              <li><a href="BodySC.php">Body Sketch</a></li>
              <li><a href="LandscapeC.php">Landscape</a></li>
              <li><a href="WildlifeC.php">Wildlife</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Craft<span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="GlassC.php">Glass Craft</a></li>
              <li><a href="Paper.php">Paper Craft</a></li>
              <li><a href="Wood.php">Wood Craft</a></li>
              <li><a href="Clay.php">Clay Craft</a></li>
            </ul>
          </li>
          <li><a href="aboutus.php">About Us</a></li>
<?php
              if (isset($_SESSION['emaa'])) {
                
echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Details<span
                class="caret"></span></a>';
				echo '<ul class="dropdown-menu">';
              echo '<li><a href="artistdetails.php">Artist Details</a></li>';
              echo '<li><a href="customerdetails.php">Customer Details</a></li>';
              }
			  
			  if (isset($_SESSION['emas'])) {
                
            echo '<li class="active"><a href="artistdetails.php">Artist Details</a></li>';               
              }
              
              ?>
			  
    
	
</ul>
        </li>
        </ul>
	    <ul class="nav navbar-nav navbar-right">
          <li>
            <span class="currentuser" style="color:white;font-size:15px;margin-right:10px;">
			  <?php
              if (isset($_SESSION['emaa'])) {

                echo '<span class="fa fa-user">&nbsp;&nbsp;</span>';
                echo $_SESSION['emaa'];

                echo '<a href="logout.php"><button style="margin-top:4px;margin-left:5px; height:40px;" id="logout" class="btn btn-warning"><span class="fa fa-sign-out" style="color:white; ">&nbsp;&nbsp;</span>Logout</button></a>';
              }
              ?>
			  <?php
              if (isset($_SESSION['emas'])) {

                echo '<span class="fa fa-user">&nbsp;&nbsp;</span>';
                echo $_SESSION['emas'];

                echo '<a href="logout.php"><button style="margin-top:4px;margin-left:5px; height:40px;" id="logout" class="btn btn-warning"><span class="fa fa-sign-out" style="color:white; ">&nbsp;&nbsp;</span>Logout</button></a>';
              }
              ?>
			  
            </span>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>

<body>
 <div class="container">
 <h2>Your Cart!</h2>
 </div>
<?php
//including the database connection file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artandsoul";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

?>
 
 

<div class="container">

 
    <table width='70%' border="0" height='250px'>
        <tr bgcolor='#CCE5FF'>	 
            <td><center>Product Id</center></td>
            <td><center>Price</center></td>
            <td><center>Email</center></td>
			<td><center>Category</center></td>
		<td><center>Remove</center></td>	  
       </tr>
        <?php 
$total_price=0;		
        while($res = mysqli_fetch_array($result)) {
echo '<form action="cartdatainsert.php" method="POST">';			
            echo "<tr>";
			
            echo "<td>"."<div align='center'>".$res['product_id']."</div>"."</td>";
            echo "<td>"."<div align='center'>"."<i class='fa fa-rupee'>".$res['price']."</i>"."</div>"."</td>";
            echo "<td>"."<div align='center'>".$res['email_id']."</div>"."</td>";  
			echo "<td>"."<div align='center'>".$res['category']."</div>"."</td>"; 			
 echo "<td><div align='center'><a href=\"remove.php?cart_id=$res[cart_id]\" onClick=\"return confirm('Are you sure you want to remove?')\">Remove</a></div></td>";               
        ?>
<tr>
 <td colspan="4">
<div align="right">

<?php
$total_price = $total_price + ($res["price"]);
		}
		echo "Total: "."<i class='fa fa-rupee'>".$total_price."</i>";
	
	
?>
</div>
 </td>
 <td>
 <div align="center">
<a href="buy.php"> Buy Now </a>
 </div>
 </td>
 </tr>
 
    </table>
	</div>
	
</body>
</html>
