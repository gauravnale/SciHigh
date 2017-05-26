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
				<form method="post" action="add_course.php">

				<p><h4>Enter course name</h4>
				<div>
					<input type="text" name="addsub" class="form-control" id="addsub">
				</div>
				<p><h4>Enter course fees</h4>
				<div>
					<input type="text" name="fees" class="form-control">
				</div>

		<br><br><h3>Add course description</h3>
		<div class="form-group">
			<textarea class="form-control" name="course_description" rows="8" col="8" id="sub"></textarea>
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
			
			<input type="submit" value="submit"  name="course_btn" class="btn btn-primary btn-lg">
			</form>
		</div>	
        </div>		
		</div>
		
		<div class="col-md-12">
		<div class="col-md-4">
		<br><br><br><br><br><br><br>
			<button data-toggle="collapse" data-target="#view" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-collapse-down"></span>&nbsp &nbsp View Courses</button>
			<div id="view" class="collapse">
			<form name="course_display" method="post" action="tutor.php">
			<select name="viewcourse"> 
       <option value=""> -----------ALL----------- </option>
     <?php
	 $con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}

else	
{
echo "Server connection established";
}

//connection with database

$selected = mysql_select_db("scihigh",$con);
         $dd_res=mysql_query("Select DISTINCT name from course");
         while($r=mysql_fetch_row($dd_res))
         { 
               echo "<option value='$r[0]'> $r[0] </option>";
         }
     ?>
</select>
<input type="submit" value="find" name="find">
<br> <br> <br> <br> <br><br><br><br><br><br>	
    <table border="1">
     <tr align="center">
     <th>Course Name </th>      <th>total videos </th>     <th> students enrolled</th>    <th>add video</th>    
     </tr>
		</div>
		<?php
		$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}

else	
{
echo "Server connection established";
}

//connection with database

$selected = mysql_select_db("scihigh",$con);
		//session_destroy();
		//session_start();
		//require 'login.php';
  if(isset($_POST['find']))
  {
         $des=$_POST["viewcourse"]; 
         if($des=="")  // if ALL is selected in Dropdown box
         { 
             $res=mysql_query("Select * from course");
         }
         else
         { 
             $res=mysql_query("Select * from course where name='".$des."'");
         }
  
         echo "<tr><td colspan='4'></td></tr>";
         while($r=mysql_fetch_row($res))
         {
                 echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 echo "<td width='200'>$r[1]" . " $r[2]</td>";
                 echo "<td alig='center' width='40'> $r[3]</td>";
                // echo "<td align='center' width='200'>$r[4]</td>";
                // echo "<td width='100' align='center'>$r[5]</td>";
                 echo "</tr>";
        }
    }
?>
		
   
 		</div>
		
		
		
		</div>
	
		
		
	
	
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

</form>	
</body>
</html>