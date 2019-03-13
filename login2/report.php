
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

	
<fieldset><legend><h2>Generating Reports</h2></legend>
	
			<p>
			
			<form action="search.php" method="GET">
				<h3>search customer details :</h2>
				<h4>Enter ID:</h4><input type ="text" name="query"/>
				<input type="submit" value="search"/>
				

		
</form>
</p>

		<p>
			<form action="daily collect.php" method="GET">
				<h3>View Collection :</h3>
				<ul><li type="circle"><h4> Daily Collection:</h4>
				<h4>Enter Date:
				<input type="date"  id="date1" name="date1" required />
				<input type="submit" value="view"/></h4>
			</form>
			<form action="monthly collect.php" method="GET">	
				<li type="circle"><h4> Monthly collection:</h4>
				
				
			<h4><label>Enter month:</label>
			<select name="date1">
			<option value="01">January</option>
			<option
			value="02">febuary</option>
<option
			value="03">March</option>
			<option
			value="04">April</option>
			<option
			value="05">May</option>
<option
			value="06">June</option>
			
<option
			value="07">July</option>
			<option
			value="08">August</option>
<option
			value="09">September</option>
			<option
			value="10">October</option>
<option
			value="11">November</option>
			<option
			value="12">December</option>
			
</select>

				<input type="submit" value="view"/></h4>
</form>

				<form action="yearly collect.php" method="POST">
				<li type="circle"><h4> Yearly collection:</h4>
				<h4>Enter year:
				<input type="text" id="date3" name="date3" required />
				<input type="submit" value="view"/></ul></h4>
				</form>

				
				
			</p>
		<p>
			<form action="complain.php" method="GET">
				<h3>View complains :</h3>
				<h4>Enter Date:<input type ="date" id="date1" name="date1"/></h4>
				<input type="submit" value="view"/>
				</form>
		</p>	
		
			
				
		
				
		
</fieldset>

</div>
<br>	
</body>
</html>