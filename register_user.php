
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
echo $_SESSION['variable'];

//connection with database

$selected = mysql_select_db("scihigh",$con);
//isset is used to manage the error of undefined 
if(isset($_POST["submit_btn1"]) && $_SESSION['variable']=='1')
{
	session_start();
$_SESSION['r']=$_POST['role']; 
 header("location:register2.php");
}



if(isset($_POST["submit_btn2"]) && $_SESSION['variable']=='2')
{
	session_start();
$_SESSION['uname'] = $_POST['username'];
$_SESSION['pword'] = $_POST['pass'];
$_SESSION['secq'] = $_POST['q'];
$_SESSION['seca'] = $_POST['sa'];
if (user_exists($_SESSION['uname'])==true)
 {
	echo 'Username already taken.';
	die();
 } 
 header("location:register3.php");
}




if(isset($_POST["submit_btn3"]) && $_SESSION['variable']=='3')
{
	session_start();
$_SESSION['email'] = mysql_real_escape_string($_POST['email']);
$_SESSION['qualification']=$_POST['qualification'];
$_SESSION['skype']=$_POST['skype'];

 header("location:register4.php");
}



if(isset($_POST["submit_btn4"]) && $_SESSION['variable']=='4')
{
session_start();
$_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname']; 
$_SESSION['age']=$_POST['age'];
$_SESSION['number'] = $_POST['phno'];
$_SESSION['city']=$_POST['city'];


 



$query1= "INSERT INTO user(fname,lname,contact,city,age,email,qualification,skypeid,username,password,role,question,answer) VALUES('$_SESSION[fname]','$_SESSION[lname]',$_SESSION[number],'$_SESSION[city]',$_SESSION[age],'$_SESSION[email]','$_SESSION[qualification]','$_SESSION[skype]','$_SESSION[uname]','$_SESSION[pword]','$_SESSION[r]','$_SESSION[secq]','$_SESSION[seca]')";
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
//'$_SESSION['fname']','$_SESSION['lname']',$_SESSION['number'],'$_SESSION['city']',$_SESSION['age'],'$_SESSION['email']','$_SESSION['qualification']','$_SESSION['skype']','$_SESSION['uname']','$_SESSION['pword']','$_SESSION['r']','$_SESSION['secq']','$_SESSION['seca']')
else
{
	echo "<span class=\"jumbotron\"> successful </span>";
	 echo '<a href="register.html"> <br> Go back to the main page</a>.';
	header("location:index.html");


}

mysql_close($con);

}
?>
