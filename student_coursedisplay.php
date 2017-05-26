<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$con = mysqli_connect('localhost','root','','scihigh');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"scihigh");
$sql="SELECT * FROM course";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>id</th>
<th>name</th>
<th>fees</th>
<th>total_videos</th>
<th> tutor name </th>
<th>no_of_students_enrolled</th>
<th>description</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['fees'] . "</td>";
    echo "<td>" . $row['total_videos'] . "</td>";
	echo "<td>" . $row['uploaded_by_tutor'] . "</td>";
    echo "<td>" . $row['no_of_students_enrolled'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>