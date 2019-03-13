<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 	<title>Printing Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
display:block;
}
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
$track_id=$_SESSION['id'];
$track_id = stripcslashes($track_id);
$track_id = mysql_escape_string($track_id);

//connect to the server and select database

mysql_connect("localhost","root","");
mysql_select_db("login");

$result=mysql_query("select * from users INNER JOIN rate where users.city=rate.city1 and users.dcity=rate.city2") or die("failed to query database".mysql_error());
while($row =mysql_fetch_array($result))
{
if($row['id']==$track_id) 
{
echo"<table border='1' width='1200'>"."<tr>"."<td>"."<h3>"."XYZ COURIERS"."</h3>"."</td>"."<td>"."<h4>"."Date"."&nbsp"."&nbsp".$row['date']."</h4>"."</td>"."</tr>"."<tr>"."<td>"."<h4>"."Sender:"."&nbsp"."&nbsp".$row['firstname']."</td>"."</h4>"."<td>"."<h4>"."Origin:"."&nbsp"."&nbsp".$row['city']."</td>"."</h4>"."</tr>"."<tr>".
"<td>"."<h4>"."Reciever:"."&nbsp"."&nbsp".$row['dfirstname']."</h4>"."</td>".
"<td>"."<h4>"."Destination:"."&nbsp"."&nbsp".$row['dcity']."</h4>"."</td>".
"</tr>"."<tr>"."<td>"."<h4>"."Declared rates per gram:"."&nbsp"."&nbsp".$row['rate']."</td>"."<td>"."</h4>"."<h4>"."Weight:"."&nbsp"."&nbsp".$row['weight']."</td>"."</h4>"."<td>"."<h4>"."Charges:"."&nbsp"."&nbsp".$row['charges']."</td>"."</h4>".
"</tr>".
"<tr>"."<td>"."<h4>"."Signature:"."</td>"."</tr>"."</h4>".

"</table>";
}
}
?>		
</body>
</html>