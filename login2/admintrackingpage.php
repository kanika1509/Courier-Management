<!DOCTYPE html>

<html>
<head>
 	<title>Login Page</title>
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

<div id="frm">
<form action="" method="post">
<fieldset><legend>Tracking info</legend>
<p>
<label>Enter the id:</label>
<input type="text" id="userid" name="userid"/>
<input type="submit" id="btn" value="Find" />
</p>
</fieldset>
</form>
</div>
<?php
$userid=$_POST['userid'];
$userid=stripcslashes($userid);
$userid=mysql_escape_string($userid);
mysql_connect("localhost","root","");
mysql_select_db("login");
$result=mysql_query("select * from tracking")or die("failed to query databse".mysql_error());
while($row=mysql_fetch_array($result))
{
if($row['id']==$userid)
{
echo "<table border='1' width='1200' height='25'>";
echo "<tr>"."<td>"."<h4>"."Dispatch date"."</h4>"."</td>"."<td>"."<h4>"."dispatch Location:"."</h4>"."</td>"."<td>"."<h4>"."Midway Date: "."</h4>"."</td>"."<td>"."<h4>"." Midway Location: "."</h4>"."</td>"."<td>"."<h4>"." Delivery Date: "."</h4>"."</td>"."<td>"."<h4>"." Delivery Location: "."</h4>"."</td>"."</tr>".
"<tr>"."<td>"."<h4>".$row['dateofstart']."</td>"."</h4>"."<td>"."<h4>".$row['startloc']."</td>"."</h4>"."<td>"."<h4>".$row['dateofmid']."</td>"."</h4>"."<td>".
"<h4>".$row['middle']."</h4>"."</td>"."<td>"."<h4>".$row['deliverydate']."</h4>"."</td>"."<td>"."<h4>".$row['destination']."</h4>"."</td>"."</tr>"."</table>";
$startloc=$row['startloc'];
$midwayloc=$row['middle'];
$destination=$row['destination'];
}}
echo "<br>";
echo "<div id='frm'>";
echo "<form action='process6.php' method='post'>";
echo "<fieldset><legend>Update Table</legend>";
echo "<p>";
echo "<br>";
if($startloc==NULL)
{
echo "<p>";
echo "<label>user id:</label>";
echo "<input type='text' id='userid' name='userid' value=$userid>";

echo "</p>";
echo "<p>";
echo "<label>Pick Up Location:</label>";
echo "<input type='text' id='start' name='start' value=''/>";
echo "</p>";
echo "<p>";
echo "<label>Pick Up Date:</label>";
echo "<input type='date' id='date1' name='date1' value=''/>";
echo "</p>";

echo "<p>";
echo "<label>Midway Location:</label>";
echo "<input type='text' id='start2' name='start2' value=''/>";
echo "</p>";
echo "<p>";
echo "<label>Midway Date:</label>";
echo "<input type='date' id='date2' name='date2' value=''/>";
echo "</p>";

echo "<p>";
echo "<label>Destination Location:</label>";
echo "<input type='text' id='start3' name='start3' value=''/>";
echo "</p>";
echo "<p>";
echo "<label>Destination Date:</label>";
echo "<input type='date' id='date3' name='date3' value=''/>";
echo "</p>";
echo "<input type='submit' id='btn' value='Update'>";

}
else if(($startloc!=NULL)&&($midwayloc==NULL))
{echo "<p>";
echo "<label>user id:</label>";
echo "<input type='text' id='userid' name='userid' value=$userid>";

echo "</p>";
echo "<p>";
echo "<label>Midway Location:</label>";
echo "<input type='text' id='start2' name='start2' value=''/>";
echo "</p>";
echo "<p>";
echo "<label>Midway Date:</label>";
echo "<input type='date' id='date2' name='date2' value=''/>";
echo "</p>";

echo "<p>";
echo "<label>Destination Location:</label>";
echo "<input type='text' id='start3' name='start3' value''/>";
echo "</p>";
echo "<p>";
echo "<label>Destination Date:</label>";
echo "<input type='date' id='date3' name='date3' value=''/>";
echo "</p>";
echo "<input type='submit' id='btn' value='Update'>";
}
else if(($startloc!=NULL)&&($midwayloc!=NULL)&&($destination==NULL))
{
echo "<p>";
echo "<label>user id:</label>";
echo "<input type='text' id='userid' name='userid' value=$userid>";

echo "</p>";
echo "<p>";
echo "<label>Destination Location:</label>";
echo "<input type='text' id='start3' name='start3' value=''/>";
echo "</p>";
echo "<p>";
echo "<label>Destination Date:</label>";
echo "<input type='date' id='date3' name='date3' value=''/>";
echo "</p>";
echo "<input type='submit' id='btn' value='Update'>";
}
else if(($startloc!=NULL)&&($midwayloc!=NULL)&&($destination!=NULL))
{
echo "<p>";
echo "Data is Up-To-Date";
echo "</p>";
}
?>
</body>
</html>


