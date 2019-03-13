<!DOCTYPE html>
<html>
<head>
 	<title>Login Page</title>
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
	
	
	$query=$_GET['query'];
$query = stripcslashes($query);
$query = mysql_escape_string($query);
mysql_connect("localhost","root","")or die("error connecting to database:".mysql_error());
	
	mysql_select_db("login")or die(mysql_error());

$raw_results=mysql_query("select * from users where(id='$query')")or die(mysql_error());
if(mysql_num_rows($raw_results)>0)
{
while($results=mysql_fetch_array($raw_results))
{	
echo "<table border='1' width='1200'>"."<tr>"."<td>"."<h3>"."ID :".$results['id']."</h3>"."</td>"."</tr>".
"<tr>"."<td>"."<h3>"."Sender"."</h3>"."</td>"."</tr>".
"<tr>"."<td>"."<h3>"."First Name: ".$results['firstname']."</h3>"."</td>".
"<td>"."<h3>"."Last Name: ".$results['lastname']."</h3>"."</td>".
"<td>:"."<h3>"."Address:".$results['address']."</h3>"."</td>".
	"<td>".
"<h3>"."Mobile No: ".$results['mobileno']."</h3>"."</td>".
"<td>"."<h3>"."City: ".$results['city']."</h3>"."</td>"
."<td>"."<h3>"."State: ".$results['state']."</h3>"."</td>"
."<td>"."<h3>"."Country: ".$results['country']."</h3>".
"</td>"."<td>"."<h3>"."Pincode: ".
	$results['pincode']."</h3>"."</td>"."</tr>".
"<tr>"."<td>"."<h3>"."Reciever"."</h3>"."</td>"."</tr>".
"<tr>"."<td>"."<h3>"."First Name: ".$results['dfirstname']."</h3>"."</td>"."<td>".
	"<h3>"."Last Name: ".$results['dlastname']."</h3>"."</td>"."<td>"."<h3>"."Mobile: ".$results['dmobile']."</h3>"."</td>"."<td>"."<h3>"."Address: ".$results['daddress']."</h3>"."</td>"."<td>"."<h3>"."City: ".$results['dcity']."</h3>"."</td>"."<td>".
	"<h3>"."State: ".$results['dstate']."</h3>"."</td>"."<td>"."<h3>"."Country: ".$results['dcountry']."</h3>"."</td>"."<td>"."<h3>"."Pincode: ".$results['dpin']."</h3>"."</td>"."</tr>"."<tr>"."<td>"."<h3>"."Type: ".$results['type']."</h3>"."</td>"."</tr>".
	"<tr>".
"</td>"."<td>".
"<h3>"."Weight: ".$results['weight']."</h3>".
"</td>"."</tr>"."<tr>".
"<td>"."<h3>"."Charges: ".$results['charges']."</h3>"."</td>"."</tr>"."</table>";



}
}
else
{
	echo "no results";
}
?>	
</body>
</html>