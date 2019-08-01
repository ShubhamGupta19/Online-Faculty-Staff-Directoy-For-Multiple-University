
<?php
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	//if(!isset($_SESSION['SESS_NAME']) || (trim($_SESSION['SESS_NAME']) == ''))
		//{
		//header("location: access-denied.php");
		//exit();
	//}
$username=$_SESSION['username'];
$email=$_SESSION['email'];
//echo $username;
//echo $email;


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty Staff Directory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>
    body{
    background-image: url(images/3.jpg);
       
}

    </style>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Faculty Staff Directory</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
           <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#">Contact Us</a></li>
          <li><a href="profile.php">My Profile</a></li>
        <!--<li><a href="signup.html">Signup</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
      </ul>
    </div>
  </div>
</nav>
    
    <h1 align="center">Account</h1><br><br>
<center><!--<img src="profile.png">-->
<br>
  <div class="container" style="background-color:white;">
    <h2>User name:</h2>
    <h3 align=center><?php echo $username; ?></h3>
  </div>
  <div class="container" style="background-color:white;">
    <h2>Email:</h2>
    <h3 align=center><?php echo $email; ?></h3>
  </div>


    
   



<div class="footer">
 <p>Copyright © AAC. All Rights
Reserved and Contact Us: +91 90000 00000</p>
</div>

</body>
</html>
