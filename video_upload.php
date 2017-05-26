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

if(isset($_POST['btn-upload']))
{
	$id=$_POST['video_upload'];
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO video(file,file_type,size,course_id) VALUES('$final_file','$file_type','$new_size',$id)";
 $res= mysql_query($sql,$con);
  echo 'reached here';
 }
 if(!$res)
{
	die('could not enter data:'.mysql_error());
}
//'$_SESSION['fname']','$_SESSION['lname']',$_SESSION['number'],'$_SESSION['city']',$_SESSION['age'],'$_SESSION['email']','$_SESSION['qualification']','$_SESSION['skype']','$_SESSION['uname']','$_SESSION['pword']','$_SESSION['r']','$_SESSION['secq']','$_SESSION['seca']')
else
{
	 header("location:tutor1.php");
	


}
}
 
  ?>

  
 

	
