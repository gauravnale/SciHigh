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
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
 <table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="tutor1.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>

    </tr>
    <?php
	$errors=array();
// connection with database server
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}


//connection with database

$selected = mysql_select_db("scihigh",$con);
$id=$_SESSION['course_id'];
$query="SELECT * FROM `video` WHERE `course_id`=$id ";
 if(!$query)
{
	die('could not enter data:'.mysql_error());
}
//'$_SESSION['fname']','$_SESSION['lname']',$_SESSION['number'],'$_SESSION['city']',$_SESSION['age'],'$_SESSION['email']','$_SESSION['qualification']','$_SESSION['skype']','$_SESSION['uname']','$_SESSION['pword']','$_SESSION['r']','$_SESSION['secq']','$_SESSION['seca']')
else
{
	echo "<span class=\"jumbotron\"> successful </span>";
	


}
$result_set=mysql_query($query,$con);
 if(!$result_set)
{
	die('could not enter data:'.mysql_error());
}
//'$_SESSION['fname']','$_SESSION['lname']',$_SESSION['number'],'$_SESSION['city']',$_SESSION['age'],'$_SESSION['email']','$_SESSION['qualification']','$_SESSION['skype']','$_SESSION['uname']','$_SESSION['pword']','$_SESSION['r']','$_SESSION['secq']','$_SESSION['seca']')
else
{
	echo "<span class=\"jumbotron\"> successful </span>";
	


}
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['file_type'] ?></td>
        <td><?php echo $row['size'] ?></td>
		
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    
</div>
</body>
</html>