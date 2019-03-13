
<!Doctype html>
<html>
<head>
<title>Tracking Page</title>
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
$track_id=$_POST['query'];

$track_id = stripcslashes($track_id);
$track_id = mysql_escape_string($track_id);
//connect to the server and select database

mysql_connect("localhost","root","");
mysql_select_db("login");

//query the database for user

$result= mysql_query("select * from tracking NATURAL JOIN users where tracking.id=users.id ")
              or die("failed to query database".mysql_error());
while($row=mysql_fetch_array($result))
{
if($row['id']==$track_id) 
{
echo"<h3>"."TRACKING ID:".$row['id']."</h3>"."<br>";
echo "<h1>"."Sender"."</h1>"
."<br>"."<p>"."<h4>"."FIRST NAME:"."</h4>"
."<h4>".$row['firstname']."-".$row['lastname']."</h4>"."</td>"."</p>"
."<p>"."MOBILE NO:"."</h4>".
"<h4>".$row['mobileno']."</h4>"."</p>".
"<p>"."<h4>"."ADDRESS:"."</h4>"."<h4>".$row['address'].",".$row['city'].",".$row['state']."</h4>"."</p>"."<h1>"."Reciever"."</h1>"."<br>"."<p>"."FIRST NAME:".$row['dfirstname']."-".$row['dlastname']."</h4>"."</p>"."<p>"."<h4>"."MOBILE NO:".$row['dmobile']."</h4>"."</p>"."<p>"."<h4>"."ADDRESS:".$row['daddress'].",".$row['dcity'].",".$row['dstate']."</h4>"."</p>"."<br>";
echo"<h2>"."TRACKING INFO"."</h3>"."<br>";
if($row['startloc']!=NULL)
{
echo "<p>"."<h3>"."Start Location: ".$row['startloc']."</h3>"."</td>"."</p>"."<p>"."<h3>"."Start Date: ".$row['dateofstart']."</h3>"."</p>"."<br>";
if($row['middle']!=NULL)
{
echo "<p>"."<h3>"."Current Location: ".$row['middle']."</h3>"."</p>"."<p>"."<h3>"."Current Date: ".$row['dateofmid']."</h3>"."</p>"."<br>";
if($row['destination']!=NULL)
{
echo "<p>"."<h3>"."Delivery Location: ".$row['destination']."</h3>"."</p>"."<p>"."<h3>"."Delivery Date: ".$row['deliverydate']."</h3>"."</p>";
}
}
}
}}
$_SESSION['id']=NULL;
?>
</body>
</html>