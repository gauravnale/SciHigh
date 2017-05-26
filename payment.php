<?php
session_start();
$errors=array();
// connection with database server
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}


//connection with database
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
$selected = mysql_select_db("scihigh",$con);
if(isset($_POST['course_btn']))
{
	$course=$_POST['sub_id'];
	$password=randomPassword();
	$_SESSION['password1']=$password;
	$query1= "INSERT INTO registration(student_id, course_id, password) VALUES('$_SESSION[ID]',$course,'$password')";
	$count=mysql_result(mysql_query("SELECT `no_of_students_enrolled` FROM `course` WHERE `ID`=$course"),0,'no_of_students_enrolled');
	$count++;
	$query2= "UPDATE course SET `no_of_students_enrolled`=$count WHERE `ID`=$course ";
    $res1=mysql_query($query2,$con);
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
//	echo "<span class=\"jumbotron\"> successful </span>";
	//  echo '<a href="register.html"> <br> Go back to the main page</a>.';
	header("location:payment2.php");


}

mysql_close($con);

}

?>
<html>
  <head>
	<title>Payment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel=stylesheet type=text/css href=basic.css/>
	<style>
	.bg-1 {
    background-color: #f4511e; /* Orange */
	color: #ffffff;
	padding-top: 70px;
    padding-bottom:70px;
	}
	</style>
  </head>
  <body class="bg-1">
		<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
         <a href="#"><img src="its.jpg" width="100" height="60"></a>
      <a class="navbar-brand" href="#">It's Show Time</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index2.php">Home</a></li>
      <!--<li><a href="#"></a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#myModal" data-toggle="modal" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
	</ul>
	</nav>
	
	<!--<div class="col-md-8">
		<form>
			<input type="text" name="result" class="form-control" id="result">
			<br><input type="text" name="cost" class="form-control" id="cost">
		</form>
	</div>-->
	<div class="col-md-8">
		<h2>Total cost<h2>
		<div class="col-md-8">
			<h3>No.of Tickets</h3>
		</div>
		<div class="col-md-4">
			<?php //echo $count; ?>
		</div>
		<!--<div class="col-md-8">
			<h3>Discount/Credits</h3>
		</div>
		<div class="col-md-4">
			<input type="text" name="dis" class="form-control" id="dis">
		</div>	-->
		<div class="col-md-8">
			<h3>Total Cost</h3>
		</div>
		<div class="col-md-4">
			<?php// echo $count*250 ?>
		</div>	
	</div>
	<div class="col-md-5">
		<h3>Select Mode Of Payment:</h3>
		<h4><label class="radio-inline"><input type="radio" name="optradio"><i class="fa fa-credit-card-alt"></i> Credit Card</label>
		<label class="radio-inline"><input type="radio" name="optradio"><i class="fa fa-google-wallet"></i> Net Banking</label>
		<label class="radio-inline"><input type="radio" name="optradio"><i class="fa fa-money"></i> Pay At Theatre</label></h4> 
		<br><a href="payment2.php" type="button" class="btn btn-primary">Submit</a>
	</div>
</div>

</body>
</html>