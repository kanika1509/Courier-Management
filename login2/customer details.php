<?php
session_start();
?>
<!Doctype html>
<html>
<head>
<title>User logged In Page</title>
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
<?php

$id=$_SESSION['id'];
$id = stripcslashes($id);

$id = mysql_escape_string($id);

//connect to the server and select database

mysql_connect("localhost","root","");
mysql_select_db("login");
//query the database for user
$result= mysql_query("select * from users where id= '$id'")
              or die("failed to query database".mysql_error());
$row =mysql_fetch_array($result);
if($row['id']==$id)
{
echo "<h4>"."ID=".$row['id']."</h4>"."<br>"."<h1>"."Sender"."</h1>"."<br>"."<p>"."<h4>"."FIRST NAME:".$row['firstname']."-".$row['lastname']."</h4>"."</p>"."<p>"."<h4>"."MOBILE NO:".$row['mobileno']."</h4>"."</p>"."<p>"."<h4>"."ADDRESS:".$row['address'].",".$row['city'].",".$row['state']."</h4>"."</p>" ."<h1>"."Reciever"."</h1>"."<br>"."<p>"."<h4>"."FIRST NAME:".$row['dfirstname']."-".$row['dlastname']."</h4>"."</p>"."<p>"."<h4>"."MOBILE NO:".$row['dmobile']."</h4>"."</p>"."<p>"."<h4>"."ADDRESS:".$row['daddress'].",".$row['dcity'].",".$row['dstate']."</h4>"."</p>";
}
?>
<br>
<p><h4>Press the button below to generate the bill reciept</h1></p>
<form action="http://localhost/login2/printingpage.php">
<p>
<input type="submit" id="btn" value="PRINT" />
</p>
</form>
</body>
</html>