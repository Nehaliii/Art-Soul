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

  <link rel="stylesheet" href="owl.theme.default.min.css">
  <link rel="stylesheet" href="owl.carousel.min.css">
  <script src="jquery-1.9.1.min.js"></script>
  <script src="owl.carousel.min.js"></script>


</style>

  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>

  <script>
    $(document).ready(function () {

      $("#owl-demo").owlCarousel({
        navigation: true
      });

    });
  </script>

  <style>
    .owl-dot {
      outline: none;
    }

    #owl-demo .item {
      background: #C0C0C0;
      padding: 30px 0px;
      margin: 10px;
      color: #FFF;

      border-radius: 3px;
      text-align: center;
      height: 250px;
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
          <li class="active"><a href="Home.php">Home</a></li>
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
              if (isset($_SESSION['emas'])) {
                
            echo '<li><a href="artistdetails.php">Artist Details</a></li>';               
              }
              ?>        
<?php
              if (isset($_SESSION['ema'])) {
                

               echo '<li>';
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
         <?php
              if (isset($_SESSION['emas'])) {

           echo "<li><a href='cartdatainsert.php''><span class='glyphicon glyphicon-shopping-cart'></span></a></li>";
		 
			  }
		 ?>	  <li>
            <span class="currentuser" style="color:white;font-size:15px;margin-right:10px;">
              <?php
              if (isset($_SESSION['ema'])) {

                echo '<span class="fa fa-user">&nbsp;&nbsp;</span>';
                echo  $_SESSION['ema'];
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
  <div class="main">



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images/main1.jpg" alt="Los Angeles" style="width:100%;height:100%;">
      </div>

      <div class="item">
        <img src="Images/main2.jpg" alt="Chicago" style="width:100%; height:100%;">
      </div>
    
      <div class="item">
        <img src="Images/main3.jpg" alt="New york" style="width:100%; height:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


    <div class="container-fluid">
      <div id="wel" class="row">
        <div class="col-md-6 col-lg-6">
          <h1>&nbsp;Welcome to Art & Soul</h1>
        </div>
      </div>
    </div>
<div class="container-fluid">
    <div class="quote">
          <div class="jumbotron">
              <div class="container text-center">
              <p>Art&soul is an online platform for promoting quality art created by artists worldwide. With a simple registration process, we allow you to sell art as many as you choose, with the freedom of putting up the price you want.</p>      
              </div>
            </div>           
        </div>
		</div>
		 <div id="owl-demo" class="owl-carousel owl-theme">

        <div class="item"><h3 style="align:center; margin:10%;">Choose from our wide range of paintings, crafts, Portraits and Landscaps that add to the beauty of your home.

</h3></div>
        <div class="item"><img src="Images/co4.jfif" height="100%" width="100%" alt="image"></div>
        <div class="item"><h3 style="align:center; margin:10%;">Choose the most beautiful décor in the world and step into the wall creating art</h3></div>
        <div class="item"><img src="Images/co6.jpg" height="100%" width="100%" alt="image"></div>
        <div class="item"><h3 style="align:center; margin:10%; ">Find the color most suitable for you in the world</h3></div>
        <div class="item"><img src="Images/co5.jpg" height="100%" width="100%" alt="image"></div>
        <div class="item"><h3 style="align:center; margin:10%;">Choose from a range of wonderful options of wall decor</h3></div>
        <div class="item"><img src="Images/co3.jfif" height="100%" width="100%" alt="image"></div>
        <div class="item"><h3 style="align:center; margin:10%;">Personalise your world with special effect paints inspired by artisans

</h3></div>
        <div class="item"><img src="Images/co1.jpg" height="100%" width="100%" alt="image"></div>
        <div class="item"><h3 style="align:center; margin:10%;">Not only transforms walls, but also improves the lives of millions around the world.</h3></div>
        <div class="item"><img src="Images/co2.png" height="100%" width="100%" alt="image"></div>

      </div>

         <div class="fixed-bg">
           
      </div>
	  <div class="container-fluid">
      <div id="wel" class="row">
        <div class="col-md-6 col-lg-6">
          <h1>&nbsp;Popular Category </h1>
        </div>
      </div>
    </div>
<br><br>

	  <div class="con5">
	  <div class="container">    
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-danger">
              <div class="panel-heading">Glass Craft</div>
              <div class="panel-body" style="height:70%">
                  <a href="GlassC.php" target="_blank">
                    <img src="Images/gg9.jpg" class="image-responsive" alt="Lights"
                      style="width:100%; height:100%; position: relative;">
                      </a>
               </div>
             
			 </div>
          </div>
          <div class="col-sm-4">
            <div class="panel panel-danger">
              <div class="panel-heading">Acrylic Painting</div>
              <div class="panel-body" style="height:70%">
			  <a href="Acrylic.php" target="_blank">
                <img src="Images/2.jpg" class="image-responsive" alt="Lights"
                  style="width:100%; height:100%; position: relative;">
                  </a></div>

            </div>
          </div>
          <div class="col-sm-4"> 
            <div class="panel panel-danger">
              <div class="panel-heading">Color Wildlife</div>
              <div class="panel-body" style="height:70%">
			  <a href="wildlifeC.php" target="_blank">
                <img src="Images/cb14.jpg" class="image-responsive" alt="Lights"
                  style="width:100%; height:100%; position: relative;">
                  </a></div>
            </div>
          </div>
        </div>
		</div>
</div>	 


     
  
      </div>

    </div>
  </div>
  <div class="footer">
    <center>
      <img src="Images/logo1.jpg" alt="logo">


      <div class="social2">
            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
            <a href="https://twitter.com/login" class="fa fa-twitter"></a>
      </div>
    </center>

    <center>
    <div class="container-fluid">
      <div class="footlinks">
        <div class="row">
          <ul>
            <div class="col-sm-6 col-md-3 col-xs-6">
              <li><a href="Acrylic.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Painting</a></li>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
              <li><a href="Portrait.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pencil</a></li>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
            <li><a href="GlassC.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Craft</a></li>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
            <li><a href="aboutus.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About us</a></li>
            </div>
          </ul>
        </div>
      </div>
    </div>
    
    <hr size="3">
    <p>Copyright &copy; 2019 All rights reserved</p>
  </center>
  </div>
</body>

</html>