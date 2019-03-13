
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


<?php

//get values passe from in login.php file

$id=$_POST['id'];
$query=$_POST['query'];
$date=$_POST['date'];
$flag=0;
$d=0;
// to prevent mysql injection
$id = stripcslashes($id);
$id = mysql_escape_string($id);
$query= stripcslashes($query);

$query= mysql_escape_string($query);
$date= stripcslashes($date);
$date= mysql_escape_string($date);
//connect to the server and select database
mysql_connect("localhost","root","");
mysql_select_db("login");
$results=mysql_query("select * from query")or die("failed to query database".mysql_error());
while($row=mysql_fetch_array($results))
{
	if(($row['id']==$id))
	{	
	$flag=1;
	$sql="UPDATE query SET query='$query', date='$date' WHERE id='$id'";
	$data=mysql_query($sql)or die(mysql_error());
	echo"<h3>"."query recieved by  admin ,hope to resolve it soon"."</h3>";
	break;
	}
	
	
}


if($flag!=1)
{
	$raw_results=mysql_query("select username, password from users")or die("failed to query database".mysql_error());
	while($row=mysql_fetch_array($raw_results))
{
	if(($row['username']==$username) && ($row['password']==$password))	
	{
	$query="INSERT INTO query(username,password,query,date) VALUES('$username','$password','$query','$date')";
	$data=mysql_query($query)or die(mysql_error());
	$d=1;
	echo"Your complaint has been recieved by  admin ,hope to resolve it soon";

	break;
	}
}
if($d!=1)
echo"cannot be entered";


}

?>
</body>
</html>
