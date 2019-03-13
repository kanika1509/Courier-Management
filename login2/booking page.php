<!DOCTYPE html>
<html>
<head>
 	<title>PICK UP PAGE</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
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


<div id="frm">
<form action="process3.php" method="post">
<fieldset><legend>BOOKING FORM</legend>
		<p> 
			<label>First Name:</label>
			<input type="text" id="user" name="first" required />
		</p>
<p> 
			<label>Last Name:</label>
			<input type="text" id="user" name="last" required />
		</p>
<p> 
			<label>Adress:</label>
			<input type="text" id="user" name="add" required />
		</p>
		<p> 
			<label>Mobile No:</label>
			<input type="text" id="user" name="mob" maxlength="10" minlength="10" required />
		</p>

		<p> 
			<label>City:</label>
			<select name="city">
			<option value="agra">Agra</option>
			<option
			value="banglore">Banglore</option>
<option
			value="chandigarh">Chandigarh</option>
			<option
			value="chennai">Chennai</option>
			<option
			value="dehradun">Dehradun</option>
<option
			value="delhi">Delhi</option>
			
<option
			value="gurgaon">Gurgaon</option>
			<option
			value="guwahati">Guwahati</option>
<option
			value="Jaipur">Jaipur</option>
			<option
			value="hyderabad">Hyderabad</option>
<option
			value="kanpur">Kanpur</option>
			<option
			value="kolkata">Kolkata</option>
			<option
			value="lucknow">Lucknow</option>
<option
			value="patna">Patna</option>
<option
			value="pune">Pune</option>
<option
			value="ranchi">Ranchi</option>
<option
			value="surat">Surat</option>
</select>
<br>

		</p>

		<p> 
			<label>State:</label>
			<select name="state">
			<option
			value="Assam">Assam</option>
			<option
			value="Bihar">Bihar</option>
			<option
			value="Goa">Goa</option>
			<option
			value="Jharkand">Jharkand</option>
			<option
			value="Gurgaon">Gurgaon</option>
			<option
			value="Maharashtra">Maharashtra</option>
			<option
			value="Punjab">Punjab</option>
			<option
			value="Rajasthan">Rajasthan</option>
			<option
			value="Up">Up</option>
</select>
<br>
		</p>
 		
		<p> 
			<label>Country:</label>
			<input type="text" id="user" name="country" required />
		</p>

		<p> 
			<label>Pincode:</label>
			<input type="text" id="user" name="pin" maxlength=6 minlength=6 required />
		</p>

	
		</fieldset>
<form id="myform">	
	<fieldset><legend>Delivered To</legend>


		<p> 
			<label>First Name:</label>
			<input type="text" id="user" name="dfname" required />
		</p>
		<p> 
			<label>Last Name:</label>
			<input type="text" id="user" name="dlname" required />
		</p>
		<p> 
			<label>Mobile:</label>
			<input type="text" id="user" name="dmob" maxlength=10 minlength=10 required />
		</p>
		<p> 
			<label>Address:</label>
			<input type="text" id="user" name="dadd" required />
		</p>
		<p> 
			<label>City:</label>
			<select name="dcity">
			<option
			value="agra">Agra</option>
			<option
			value="banglore">Banglore</option>
<option
			value="chandigarh">Chandigarh</option>
			<option
			value="chennai">Chennai</option>
			<option
			value="dehradun">Dehradun</option>
<option
			value="delhi">Delhi</option>
			
<option
			value="gurgaon">Gurgaon</option>
			<option
			value="guwahati">Guwahati</option>
<option
			value="Jaipur">Jaipur</option>
			<option
			value="hyderabad">Hyderabad</option>
<option
			value="kanpur">Kanpur</option>
			<option
			value="kolkata">Kolkata</option>
			<option
			value="lucknow">Lucknow</option>
<option
			value="patna">Patna</option>
<option
			value="pune">Pune</option>
<option
			value="ranchi">Ranchi</option>
<option
			value="surat">Surat</option>
</select>
<br>


		</p>
		<p> 
			<label>State:</label>
			<select name="dstate">
			<option
			value="Assam">Assam</option>
			<option
			value="Bihar">Bihar</option>
			<option
			value="Goa">Goa</option>
			<option
			value="Jharkand">Jharkand</option>
			<option
			value="Gurgaon">Gurgaon</option>
			<option
			value="Maharashtra">Maharashtra</option>
			<option
			value="Punjab">Punjab</option>
			<option
			value="Rajasthan">Rajasthan</option>
			<option
			value="Up">Up</option>
</select>
<br>
</p>
<p> 
			<label>Country:</label>
			<input type="text" id="user" name="dcountry" required />
		</p>

		<p> 
			<label>Pincode:</label>
			<input type="text" id="user" name="dpin" maxlength=6 minlength=6 required />
		</p>
<input type="reset" value="Reset"></p>
</form>


</fieldset>

		<fieldset><legend>Courier Information</legend>
		<p> 
			<label>Courier Type:</label>
<select name="type">
			<option
			value="parsel">Parsel</option>
<option
			value="document">Document</option>
<option
			value="bulky">Bulky Goods</option>
<option
			value="care">Handle with Care</option>
</select>
			
		</p>
		<p> 
			<label>Courier Weight:</label>
			<input type="text" id="user" name="weight" required/><select name="wei">
			<option
			value="kg">kg</option>
			<option
			value="gm">gm</option> /></select>
		</p>
		<p>
			<label >date:</label>
			<input type="date" name="date" required />
		</p>
		
			

		<p>
			<input type="submit" id="btn" value="signup" />


	
	</fieldset>
	</form>
	</div>
</body>
</html>