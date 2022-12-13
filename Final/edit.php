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
table, th, tr, td {
    border: 1px solid black;
}
</style>
</head>
<body>
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
                
echo '<li class="active" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Details<span
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
<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['user_name'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email_id']; 
	$address=$_POST['address']; 	
    
    // checking empty fields
    if(empty($name) || empty($phone_no) || empty($email) || empty($address)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($phone_no)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }

		if(empty($address)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE users SET user_name='$name',phone_no='$phone_no',email_id='$email',address='$address' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
       echo "Update Done"; 
    }
}
?>
<?php
//getting id from url
 
//selecting data associated with this particular id
if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$update = true;
		$record = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
		
		while($res = mysqli_fetch_array($record))
{
    $name = $res['user_name'];
    $phone_no = $res['phone_no'];
    $email = $res['email_id'];
	$address = $res['address'];
}
}
?>
 
  <div class="container">
    <form name="form1" method="post" action="edit.php">
        <table border="0" bgcolor='#CCCCCC'>
            <tr> 
                <th>Name</th>
                <td><input type="text" name="user_name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <th>Phone No</th>
                <td><input type="text" name="phone_no" value="<?php echo $phone_no;?>"></td>
            </tr>
            <tr> 
                <th>Email</th>
                <td><input type="text" name="email_id" value="<?php echo $email;?>"></td>
            </tr>
			<tr> 
                <th>Address</th>
                <td><input type="text" name="address" value="<?php echo $address;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
            </tr>
        </table>
		<br>
		<input type="submit" name="update" value="Update">
    </form>
	</div>
</body>
</html>