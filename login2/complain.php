<!DOCTYPE html>
<html>
<head>
 	<title>Admin Info Page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
<style>
.dropdown{
position: relative;
display:inline-block;
}
.dropdown-content{
display:none;
position:absolute;
background-color:#f9f9f9;
min-width:160px;
box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
padding: 12px 16px;
z-index:1;
}
.dropdown:hover .dropdown-content{
display:block;}
</style>
</head>
<body>
<form>
<input type="button" value="GO BACK!!" onclick="history.back()">
</input>
</form>
<h1><p align="center">XYZ COURIER COMPANY</p></h1>
<marquee behaviour="scroll" direction="left"> <img src="two.JPG" width="480" height="160"alt="Natural"/><img src="three.jpg" width="480" height="160"alt="Natural"/> <img src="four.jpg" width="480" height="160"alt="Natural"/></marquee>

<table border="1" width="1200" >
<tr>
<th><a href="homepage.php"><span>HOME</span></a></th>
<th><a href="about.php">ABOUT US</a></th>
<th><div class="dropdown">SERVICES<div class="dropdown-content"><p><a href="rate.php">Rate Calculator</a></p><div></th>
<th><a href="complain2.php">COMPLAIN PAGE</a></th>
<th><a href="track.php">TRACK YOUR COURIER</a></th>
</tr>
</table>  
<br>
<?php


$query=$_GET['date1'];
$query = stripcslashes($query);
$query = mysql_escape_string($query);
$sum=0;
mysql_connect("localhost","root","")or die("error connecting to database:".mysql_error());
	
	mysql_select_db("login")or die(mysql_error());
 echo"<h1>".$query."</h1>";

$raw_results=mysql_query("select * from query ") or die("failed to query database".mysql_error());
echo"<table border='2' width='600'>
<tr>
<th> ID</th>
<th>Complain</th>";
while($row =mysql_fetch_array($raw_results))
{
if($query==$row['date'])
{
	echo"<tr>";
	echo"<td>".$row['id']."</td>";
	echo"<td>".$row['query']."</td>";
	$sum=$sum+1;
}
}
echo"</table>";
echo "<br>";
echo "<h4>"."the total no of queries on date $query is: $sum"."</h4>";
?>
</form>
</body>
</html>
