<?php
session_start();
?>

<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="homepage2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="Images/AS.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Upload</title>
    <style>
    .form-group  input, textarea,button, label{
        margin-top: 0px;
		
    }
  body {
  background-image: url('backgroundartist.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
    </style>
	
</head>

<body >

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
              if (isset($_SESSION['ema'])) {
                

               echo '<li class="active">';
			   echo '<a href="index1.php">Upload page</a>';
			   echo '</li>';
			   echo '<li>';
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
                echo $_SESSION['ema'];

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

 <div class="container" style="width:60%;background-color:gray;margin-top:5%;">
<div class="container-fluid">
      <div id="wel" class="row">
        <div class="col-md-6 col-lg-6">
          <h1>&nbsp;Upload!!!</h1>
        </div>
      </div>
    </div>

<form method="post" action="upload1.php" enctype="multipart/form-data">

<div class="form-group">
                

<label class="control-label col-sm-2" for="price">Category:</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<select name="category" id="category" style="height:30px;">
<option value="ArcylicPainting" id="ArcylicPainting">Arcylic Painting</option>
<option value="GlassPainting" id="GlassPainting">Glass Painting</option>
<option value="SprayPainting" id="SprayPainting">Spray Painting</option>
<option value="OilPainting" id="OilPainting">Oil Painting</option>
<option value="Potrait" id="Potrait">Portrait</option>
<option value="BodySketch" id="BodySketch">Body Sketch</option>
<option value="Landscape" id="Landscape">Landscape</option>
<option value="Wildlife" id="Wildlife">Wildlife</option>
<option value="ColorPotrait" id="ColorPotrait">Color Portrait</option>
<option value="ColorBodySketch" id="ColorBodySketch">Color Body Sketch</option>
<option value="ColorLandscape" id="ColorLandscape">Color Landscape</option>
<option value="ColorWildlife" id="ColorWildlife">Color Wildlife</option>
<option value="GlassCraft" id="GlassCraft">Glass Craft</option>
<option value="PaperCraft" id="PaperCraft">Paper Craft</option>
<option value="WoodCraft" id="WoodCraft">Wood Craft</option>
<option value="ClayCraft" id="ClayCraft">Clay Craft</option>


</select>
	
<div class="form-group">
              <br>  <label class="control-label col-sm-2" for="price">Price:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price"></br>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="height">Height:(in feet)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="height" placeholder="Enter Height" name="height"></br>
                </div>
            </div>
			
            <div class="form-group">
                <label class="control-label col-sm-2" for="width">Width:(in feet)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="width" placeholder="Enter width" name="width"></br>
					</br>
					</br>
					
                </div>
			</div>

<div class="form-group">
<label class="control-label col-sm-2" for="image">Image:</label>
 <div class="col-sm-10">
<input type="hidden" name="MAX_FILE_SIZE" value="900000"/><input name="userfile" type="file" />
</br>
</br>
</div>
</div>

<input type="submit" value="submit"  class="btn btn-info">
</div>
</form>
</body>
</html>