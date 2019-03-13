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
<h1>fill your details :</h1>
<div id ="frm">

		
	<form action="query1.php"  method="post" >
	<fieldset><legend>COMPLAIN BOX</legend>


<p>
			<label>Enter id:</label>
			<input type="text" id="id" name="id" />
</p>		<p>
			<label>complain:</label>
			<br>
			<input type="text" style="height:150px;width:300px;"   id="query" name="query" />

		</p>
		<p>
			<label>date:</label>
			<input type="date" id="date" name="date" />
		<p>
			
	
		<p>
			<input type="submit" id="btn" value="Login" />
		</p>	
</fieldset>
</form> 
</div>
				
	

</body>
</html>
		








			