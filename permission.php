<?php
session_start();
$errors=array();
// connection with database server
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}


//connection with database

$selected = mysql_select_db("scihigh",$con);

if(isset($_POST['submit_btn']))
{
	$id=$_POST['video_upload'];
	$_SESSION['course_id']=$id;
	
	$password=$_POST['course_password'];
	$student_id=$_SESSION['ID'];
	$pass=mysql_result(mysql_query("SELECT `password` FROM `registration` WHERE `student_id`=$student_id "),0,'password');
	if($password==mysql_result(mysql_query("SELECT `password` FROM `registration` WHERE( `student_id`=$student_id  AND `course_id`=$id )"),0,'password'))
	{
			 header("location: view.php");
}
else{
	echo 'wrong password, try again';
}
}
?>
