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

require 'users.php';
require 'general.php';
 
 //user data
 if(logged_in()==true)
 {
	$SESSION_ID= $_SESSION['ID'];  
	$user_data= user_data($SESSION_ID,'ID','fname','username','password','email','contact','skypeid');
 }

if(empty($_POST)==false)
 {
$uname = $_POST['u']; 
$pword = $_POST['p'];

if(empty($uname) ||  empty($pword))
{
$errors[]='You need to enter a username and password';	
}
else if(user_exists($uname)==false)
{
$errors[]='We can\'t find that username. Have you registered?';	
}
else
{
	$login= login($uname,$pword);
	if($login==false){
	$errors[]='That username/password combination is incorrect'	;
	}
	else if(find_role($uname)=='Student'){ 
	 $_SESSION['ID']=$login;
	 header("location: student.php");
	 exit();
	}
	else if(find_role($uname)=='Tutor'){ 
	 $_SESSION['ID']=$login;
	 header("location: tutor1.php");
	 exit();
	}
	else if(find_role($uname)=='Counselor'){ 
	 $_SESSION['ID']=$login;
	 header("location: counselor.php");
	 exit();
	}
}
 print_r($errors);
 }
?>