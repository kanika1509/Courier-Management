
<!DOCTYPE html>
<html>
<head>
 	<title>Rate Calculation Page</title>
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
<br>
<div id="frm">


	<form   action ="" method="post" >

<fieldset><legend>Rate Calculation</legend>

<p>
			<label>Enter the source place:</label>
			<input type="text" id="city1" name="city1" value="<?php echo isset($_POST['city1'])?$_POST['city1']:''?>" />

		</p>
		<p>
			<label>Enter the destination:</label>
			<input type="text" id="city2" name="city2" value="<?php echo isset($_POST['city2'])?$_POST['city2']:''?>"  />
		</p>
<p>
			<label>Enter weight in grams:</label>
			<input type="text" id="weight" name="weight" value="<?php echo isset($_POST['weight'])?$_POST['weight']:''?>" />
		</p>
		<p>
			<input type="submit" id="btn" value="Calculate" />
		</p>	
<?php
//get values passe from in login.php file
$city1=$_POST['city1'];
$city2=$_POST['city2'];
$weight=$_POST['weight'];
// to prevent mysql injection
$city1 = stripcslashes($city1);
$city2 = stripcslashes($city2);
$weight = stripcslashes($weight);
$weight = mysql_escape_string($weight);
$city1 = mysql_escape_string($city1);
$city2= mysql_escape_string($city2);
//connect to the server and select database

mysql_connect("localhost","root","");
mysql_select_db("login");
//query the database for user
$result= mysql_query("select * from rate where city1= '$city1' and city2 ='$city2'")
              or die("failed to query database".mysql_error());
$row =mysql_fetch_array($result);


 if($row['city1']==$city1 && $row['city2']== $city2){
$charges=$weight*$row['rate'];
echo "Charges:<input type='text' value='$charges'/>";
}
else if($city1==NULL ||$city2==NULL||$weight==NULL)
{
echo "Weight Calculation not possible";
}
else{
echo"Failed to login!";
}
?>
</fieldset>
</form> 
</div>

</body>
</html>