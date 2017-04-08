<?php
session_start();
require 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Counselor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  .redText { color: grey; }
  </style>
  
</head>

<body>
	<!--NAVIGATION BAR-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
     <a href="#"><img src="logo.jpg" width="100" height="60"></a>
      <a class="navbar-brand" href="#">Sci-High</a>
    </div>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="caret"></span> Hello,  <?php echo $user_data['fname'] ?>!</a>
		<ul class="dropdown-menu">
         <!-- <li><a href="#">YOUR COURSES</a></li>-->
		  <li><a href="#">LOGOUT</a></li>
		</ul>	
	  </li> 
	</ul>
	</div>
	</nav>
	
	<div class="jumbotron">
        <!--<img src="study.png" alt=" " width="350" height="220" class="pull-right"/>-->
        <h1>You must master a new way to think before you can master a new way to be.</h1>
    </div>
	
	<div class="col-md-8">
		<h1>PERSONAL INFO<h1>
		<div class="col-md-8">
			<h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span class="glyphicon glyphicon-user"></span> Username</h3>
		</div>
		<div class="col-md-4">
			<input type="text" name="usr" class="form-control" id="cot">
		</div>
		<div class="col-md-8">
			<h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span class="glyphicon glyphicon-envelope"></span> Email Id</h3>
		</div>
		<div class="col-md-4">
			<input type="text" name="eid" class="form-control" id="dis">
		</div>	
		<div class="col-md-8">
			<h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <i class="fa fa-skype"></i> Skype Id</h3>
		</div>
		<div class="col-md-4">
			<input type="text" name="sid" class="form-control" id="cost">
		</div>	
	</div>
	
	<div class="col-md-8">
		<div class="col-md-8">
			<h3>View appointments</h3>
		</div>

		<div class="col-md-4">
			<input type="text" name="appoint" class="form-control" id="cost">
		</div>
	
		<div class="col-md-8">
			<h3>View student marks</h3>
		</div>
	
		<div class="col-md-4">
			<input type="text" name="smark" class="form-control" id="cost">
		</div>
	</div>
	
</body>
</html>