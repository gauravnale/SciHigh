<?php
session_start();
require 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tutor</title>
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
			<span class="caret"></span> Hello, <?php echo $user_data['fname'] ?>!</a>
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
        <h1>Power is gained by <span class="redText">sharing knowledge</span>,<br>not hoarding it.</h1>
    </div>
	
	<div class="col-md-12">
		<h1>PERSONAL INFO<h1>
		<div class="col-md-8">
			<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span class="glyphicon glyphicon-user"></span> Username</h2>
		</div>
		<div class="col-md-4">
		  <?php echo $user_data['username'] ?>
		</div>
		<div class="col-md-8">
			<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span class="glyphicon glyphicon-envelope"></span> Email Id</h2>
		</div>
		<div class="col-md-4">
			<?php echo $user_data['email'] ?>
		</div>	
		<div class="col-md-8">
			<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <i class="fa fa-skype"></i> Skype Id</h2>
		</div>
		<div class="col-md-4">
		    <?php echo $user_data['skypeid'] ?>
		</div>	
	</div>

	
	<div class="col-md-4">
		<br><br><br><br><br><br><br>
			<button data-toggle="collapse" data-target="#add" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span>&nbsp &nbsp Add Course</button>
			<div id="add" class="collapse">
				<p><h4>Enter course name</h4>
				<div>
					<input type="text" name="addsub" class="form-control" id="addsub">
				</div>

		<br><br><h3>Add course description</h3>
		<div class="form-group">
			<textarea class="form-control" rows="8" col="8" id="sub"></textarea>
		</div>
		<div>
			<br><br><h3>Upload files and videos</h3>
			<button class="btn btn-primary btn-lg" onclick="myFunction()">CLICK HERE...</button>
			<br><br><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
			<script>
				function myFunction() {
				var x = document.createElement("INPUT");
				x.setAttribute("type", "file");
				document.body.appendChild(x);
				}
			</script>
			<button class="btn btn-primary btn-lg">Submit</button>
		</div>	
        </div>		
		</div>
		
		<div class="col-md-4">
		<br><br><br><br><br><br><br>
			<button data-toggle="collapse" data-target="#view" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-collapse-down"></span>&nbsp &nbsp View Courses</button>
			<div id="view" class="collapse">
				<div>
					<input type="text" name="addsub" class="form-control" id="addsub">
				</div>

		<br><br><h3>Add course description</h3>
		<div class="form-group">
			<textarea class="form-control" rows="8" col="8" id="sub"></textarea>
		</div>
		</div>
		</div>
	
		
		
	</div-->
	
	
		<!--FOOTER
	<footer class="container-fluid bg-2 text-center" id="contact">
	<div>
		<b>
		<h4><p>&copy Sci-High</p>
		<p>Email Id:scihigh@gmail.com</p>
		<p>Mob No:97028 85311</p></h4>
		<p><h1><a href="https://www.facebook.com/"<i class="fa fa-facebook logo-1"></a></i>
		&nbsp <a href="https://www.linkedin.com/"<i class="fa fa-linkedin logo-1"></a></i>
		&nbsp <a href="https://twitter.com/"<i class="fa fa-twitter logo-1"></a></i></h1>
		</p>
		</b>
	</div>  
</footer-->

	
</body>
</html>