
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

<div id="frm">

	<form  >
<fieldset><legend><h2>Admin Priviliges</h2></legend>
		<p>
			<input type="button" onclick="location.href='booking page.php';"value="COURIER BOOKING"/>
		</p>
		<p>
			<input type="button" onclick="location.href='admintrackingpage.php';"value="UPDATE TRACKING ROUTE" />
		</p>
		<p>
			<input type="button" onclick="location.href='report.php';"value="GENERATE REPORTS"/>
		</p>	
		
			
				
		
				
		
</fieldset>
</form> 
</div>
<br>	
</body>
</html>