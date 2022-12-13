<?php
session_start();
?>
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
  <link rel="stylesheet" type="text/css" href="homepage2.css?v=<?php echo time(); ?>">
  <style>
  .container
  {
	  background:#D3D3D3;
	  
  }
  </style>

  <title>Art & Soul</title>
</head>
<body>
  <div class="container-fluid">
    <div class="header">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="social">
            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
            <a href="https://twitter.com/login" class="fa fa-twitter"></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 ">
          <div class="mainlogo">
            <img class="logo" src="logo1.jpg" alt="logo">
          </div>
        </div>
      </div>



      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="login">
            <a href="#sub-login1" class="btn btn-warning" data-toggle="collapse"><i
                class="fa fa-user"></i>&nbsp;&nbsp;Log In</a>
            <div id="sub-login1" class="panel-collapse collapse">
              <a href="userloginform.php" class="list-group-item">Customer</a>
              <a href="artistloginform.php" class="list-group-item">Artist</a>
			  <a href="admin.php" class="list-group-item">Admin</a>
            </div>
          </div>
        </div>
      
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="signup">
            <a href="#sub-login2" class="btn btn-warning" data-toggle="collapse"><i
                class="fa fa-user"></i>&nbsp;&nbsp;Register</a>
            <div id="sub-login2" class="panel-collapse collapse">
              <a href="customers.php" class="list-group-item">Customer</a>
              <a href="artist.php" class="list-group-item">Artist</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
<div class="fix">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
	<div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
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
              if (isset($_SESSION['ema'])) {
                

               echo '<li>';
			   echo '<a href="index1.php">Upload page</a>';
			   echo '</li>';
			   
			   echo '<li class="active">';
			   echo '<a href="yourprofile.php">Profile</a>';
			   echo '</li>';
              }
              ?>
<?php
              if (isset($_SESSION['emaa'])) {
                
echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Details<span
                class="caret"></span></a>';
				echo '<ul class="dropdown-menu">';
              echo '<li><a href="artistdetails.php">Artist Details</a></li>';
              echo '<li><a href="customerdetails.php">Customer Details</a></li>';
          
               
              }
              ?>
    
	
</ul>
        </li>
        </ul>
	    <ul class="nav navbar-nav navbar-right">
          <li>
            <span class="currentuser" style="color:white;font-size:15px;margin-right:10px;">
              <?php
              if (isset($_SESSION['ema'])) {

                echo '<span class="fa fa-user">&nbsp;&nbsp;</span>';
                echo  $_SESSION['ema'];
                echo '<a href="logout.php"><button style="margin-top:4px;margin-left:5px; height:40px;" id="logout" class="btn btn-warning"><span class="fa fa-sign-out" style="color:white; ">&nbsp;&nbsp;</span>Logout</button></a>';
              }
              ?>
			 
			  <?php
              if (isset($_SESSION['emaa'])) {

                echo '<span class="fa fa-user">&nbsp;&nbsp;</span>';
                echo $_SESSION['emaa'];

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
<div class="container-fluid">
      <div id="wel" class="row">
        <div class="col-md-4 col-lg-4">
          <h1>&nbsp;Profile</h1>
        </div>
      </div>
    </div>

<?php
include_once("config.php");
if (isset($_SESSION['ema'])) {
$id=$_SESSION['ema'];
$sql = mysqli_query($mysqli,"SELECT * FROM uploadacralic where email_id = '$id'");
echo '<div class="container">';
while($row = mysqli_fetch_assoc($sql)) {
echo '<div class="col">';
echo '<div class="col-sm-4">';
echo '<div class="panel panel-danger">';
echo '<div class="panel-body" style="height:55%;">';
echo '<img style="height:100%;width:100%;position: relative;" class="img-responsive" src="data:image;base64,'.base64_encode( $row['image'] ).'"/>';
echo '</div>';
echo '<div class="panel-footer">';
echo "HxW:". $row["height"]."x". $row["width"]."\tfeet" ;
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["status"];
echo '<div class="pull-right">'.'<i class="fa fa-rupee">'.$row["price"].'</i>'.'</div>';
echo '</div>';
echo '</div>';
echo '</div>';
}
}
echo '</div>';
?>
</body>
</html>