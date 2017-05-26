<?php
require 'users.php';
require 'general.php';
session_start();
//header("Content-type: text/css");
// connection with database server
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
//isset is used to manage the error of undefined 
if(isset($_POST["course_btn"]))
{

$name=$_POST['addsub'];
$fees = $_POST['fees']; 
$course_description= $_POST['course_description'];
$query1= "INSERT INTO course(name, fees, total_videos,no_of_students_enrolled,uploaded_by, description) VALUES('$name',$fees,0,0,'$_SESSION[ID]','$course_description')";
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
//	echo "<span class=\"jumbotron\"> successful </span>";
	//  echo '<a href="register.html"> <br> Go back to the main page</a>.';
	header("location:tutor1.php");


}

mysql_close($con);

}
?>
