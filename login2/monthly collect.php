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
$query1=$_GET['date1'];
$query1 = stripcslashes($query1);
$query1 = mysql_escape_string($query1);
mysql_connect("localhost","root","")or die("error connecting to database:".mysql_error());
	
	mysql_select_db("login")or die(mysql_error());

$raw_results=mysql_query("select *,EXTRACT(MONTH FROM date) AS m from users INNER JOIN rate where users.city=rate.city1 and users.dcity=rate.city2") or die("failed to query database".mysql_error());
echo"<table border='2' width='1200'>
<tr>
<th> Id</th>
<th>Date</th>
<th> Source</th>
<th> Destination</th>
<th>Rate</th>
<th>Weight</th>
<th>Charges</th>";
$sum=0;
while($row =mysql_fetch_array($raw_results))
{

if($query1==$row['m'])
{
	echo"<tr>";
	echo"<td>".$row['id']."</td>";
	echo"<td>".$row['date']."</td>";
	echo"<td>".$row['city1']."</td>";
	echo"<td>".$row['city2']."</td>";
	echo"<td>".$row['rate']."</td>";
	echo"<td>".$row['weight']."</td>";
	echo"<td>".$row['charges']."</td>";
	echo"</tr>";
	$sum=$sum+$row['charges'];
}
}
echo"</table>";

echo"<h1> the total amount is : </h1>";
echo" <h2>$sum  INR<h2>";

?>
</form>
</body>
</html>



