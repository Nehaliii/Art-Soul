<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Create Account</title>


    <style>
    .form-group  input, textarea,button, label{
        margin-top: 20px;
    }
   
    </style>
</head>

<body>
<script type="text/javascript">
function validation()
{
var users = document.getElementById('name').value;
var passd = document.getElementById('pwd').value;
var cpassd = document.getElementById('cpwd').value;
var mob = document.getElementById('phone').value;
var emails = document.getElementById('email').value;
var address = document.getElementById('add').value;

if(users == "")
{
document.getElementById('uname').innerHTML = "Please enter your name";
return false;
}

if(users.length < 2)
{
document.getElementById('uname').innerHTML = "Please enter proper name";
return false;
}

if(!isNaN(users))
{
document.getElementById('uname').innerHTML = "Please enter characters in name";
return false;
}

if(emails == "")
{
document.getElementById('mail').innerHTML = "Please enter email";
return false;
}

if(emails.indexOf('@') <= 0)
{
document.getElementById('mail').innerHTML = "Position of @ is incorrect";
return false;
}

if((emails.charAt(emails.length-4)!='.') && (emails.charAt(email.length-3)!='.'))
{
document.getElementById('mail').innerHTML = "Position of @ and . is invalide";
return false;
}


if(passd == "")
{
document.getElementById('password').innerHTML = "Please enter password";
return false;
}

if((passd.length < 0) || (passd.length > 8))
{
document.getElementById('password').innerHTML = "Password length must 8";
return false;
}


if(cpassd == "")
{
document.getElementById('cpassword').innerHTML = "Please enter conform password";
return false;
}

if(passd != cpassd)
{
document.getElementById('cpassword').innerHTML = "password are not matching";
return false;
}


if(mob == "")
{
document.getElementById('mno').innerHTML = "Please enter mobile no.";
return false;
}

if(isNaN(mob))
{
document.getElementById('mno').innerHTML = "Please enter numbers";
return false;
}


if(mob.length != 10)
{
document.getElementById('mno').innerHTML = "Mobile no. length must be 10 digits";
return false;
}


if(address == "")
{
document.getElementById('addr').innerHTML = "Please enter address";
return false;
}

}
</script>
    <div class="container">
        <h2>Create your Artist account!</h2>
        <form method="POST" onsubmit="return validation()" action="artistsignup.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
					<p id="uname" style="color:red;"></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					<p id="mail" style="color:red;"></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" name="password">
					<p id="password" style="color:red;"></p>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2 " for="pwd">Confirm Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" name="cpwd">
						<p id="cpassword" style="color:red;"></p>
                    </div>
                </div>

             
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Phone:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
						<p id="mno" style="color:red;"></p>
                    </div>
                </div>

				<div class="form-group">
                    <label class="control-label col-sm-2" for="add">Address:</label>
                    <div class="col-sm-10 ">
                        <textarea class=" form-control" rows="5" id="add" placeholder="Enter Address" name="add"></textarea>
						<p id="addr" style="color:red;"></p>
                    </div>
                </div>

        
                    <div class="form-group">
                        <div class="col-sm-offset-2  col-sm-10 col-md-6 col-lg-6">
                            <button type="submit" name="register" class="btn btn-info">Submit</button>
                        </div>
                    </div>
        </form>
    </div>

    </div>


</body>

</html>