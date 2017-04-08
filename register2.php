
<?php
session_start();
$_SESSION['variable']='2';
echo $role;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  
  <style>
	html {
	height: 100%;
	<!--Image only BG fallback*/-->
	
	<!--/*background = gradient + image pattern combo*/-->
	background: 
		linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
}

body {
	font-family: montserrat, arial, verdana;
	background-color: #f4511e; /* Orange */
}
<!--/*form styles*/-->
	#msform {
	width: 600px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	<!--/*stacking fieldsets above each other*/-->
	position: relative;
}
<!--/*Hide all except first fieldset*/-->
#msform fieldset:not(:first-of-type) {
	display: none;
}
<!--/*inputs*/-->
#msform input, #msform textarea, #msform select {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
<!--/*buttons*/-->
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
<!--/*headings*/-->
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
<!--/*progressbar*/-->
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 23.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
<!--/*progressbar connectors*/-->
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1;<!-- /*put it behind the numbers*/-->
}
#progressbar li:first-child:after {
<!--	/*connector not needed before the first step*/-->
	content: none; 
}
<!--/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/-->
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}

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
	</nav>
	
	<div class="jumbotron">
        <br><h1>Register</h1>
    </div>

	<!-- multistep form -->
	<form id="msform" name="registration_form2" method="post" action="register_user.php">
		<!-- progressbar -->
		<ul id="progressbar">
			<li class="active">Account type</li>
			<li class="active">Account Setup</li>
			<li>Profile</li>
			<li>Personal Details</li>
		</ul>
		<!-- fieldsets -->
		<fieldset>
			<h2 class="fs-title">Create your account</h2>
			<h3 class="fs-subtitle"></h3>
			<input type="text" name="username" placeholder="Username"/>
			<input type="password" name="pass" placeholder="Password" />
			<input type="password" name="cpass" placeholder="Confirm Password" />
			<select name="q">
	        <option placeholder="Security Question"> - Security Question -</option>
	        <option value="What was the name of your primary school?">What was the name of your primary school? </option>
	        <option value="What was your childhood nickname?">What was your childhood nickname?</option>
	        <option value="What was the name of the place where you were born?">What was the name of the place where you were born?"</option>
	        <option value="What is your mother's name?">What is your mother's name?</option>
            </select>
			<textarea rows="1" cols="15" name="sa" placeholder="Your Answer"></textarea>
			<br>
			<a href="register1.php" class="btn btn-success" role="button">Previous</a>
			<input type="submit" name ="submit_btn2" value="next" class="btn btn-success" role="button"/>
			
		</fieldset>
	<form>
</body>
</html>