<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>


    <link rel="icon" href="Images/AS.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="homepage2.css">
</head>

<body>
<script type="text/javascript">
function validation()
{
var users = document.getElementById('email').value;
var passd = document.getElementById('pwd').value;


if(users == "")
{
document.getElementById('uname').innerHTML = "Please enter email";
return false;
}

if(users.length < 2)
{
document.getElementById('uname').innerHTML = "Please enter proper email";
return false;
}

if(passd == "")
{
document.getElementById('password').innerHTML = "Please enter password";
return false;
}

if((passd.length < 0) || (passd.length > 8))
{
document.getElementById('password').innerHTML = "Password length must be 8";
return false;
}
}
</script>
    <div class="container">
        <h2>Login to your Admin account!</h2>
        <form method="POST" onsubmit="return validation()" action="adminform.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					<p id="uname" style="color:red;"></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
					<p id="password" style="color:red;"></p>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2  col-sm-10 col-md-6 col-lg-6">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


	</body>

</html>