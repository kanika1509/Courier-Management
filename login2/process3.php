<?php
session_start();
//get values passe from in pickup.php file
$firstname=$_POST['first'];
$lastname=$_POST['last'];
$address=$_POST['add'];
$mobile=$_POST['mob'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$pincode=$_POST['pin'];
$dfirstname=$_POST['dfname'];
$dlastname=$_POST['dlname'];
$dmobile=$_POST['dmob'];
$daddress=$_POST['dadd'];
$dcity=$_POST['dcity'];
$dstate=$_POST['dstate'];
$dcountry=$_POST['dcountry'];
$dpincode=$_POST['dpin'];
$type=$_POST['type'];
$weight=$_POST['weight'];
$date=$_POST ['date'];


// to prevent mysql injection

$dcity=stripcslashes($dcity);
$firstname = mysql_escape_string($firstname);
$lastname = mysql_escape_string($lastname);
$address = mysql_escape_string($address);
$mobile = mysql_escape_string($mobile);
$city = mysql_escape_string($city);
$state = mysql_escape_string($state);
$country = mysql_escape_string($country);
$pincode = mysql_escape_string($pincode);
$dfirstname= mysql_escape_string($dfirstname);
$dlastname= mysql_escape_string($dlastname);
$dmobile= mysql_escape_string($dmobile);
$dcity= mysql_escape_string($dcity);
$dstate= mysql_escape_string($dstate);
$dcountry= mysql_escape_string($dcountry);
$dpincode= mysql_escape_string($dpincode);
$type= mysql_escape_string($type);
$weight= mysql_escape_string($weight);
$date= mysql_escape_string($date);

//connect to the server and select database

mysql_connect("localhost","root","");
mysql_select_db("login");
//query the database for user
echo "ok";
$result= mysql_query("select * from users INNER JOIN rate where firstname= '$firstname' and lastname= '$lastname' and address= '$address' and mobileno= '$mobile' and city= '$city' and state= '$state' and country= '$country' and pincode= '$pincode' and dfirstname= '$dfirstname' and dlastname= '$dlastname' and dmobile= '$dmobile' and daddress= '$daddress' and dcity= '$dcity' and dstate= '$dstate' and dcountry= '$dcountry' and dpin= '$dpincode' and type= '$type' and weight= '$weight' and rate.city1='$city' and rate.city2='$dcity'and date='$date'" )
              or die("failed to query database".mysql_error());
$row =mysql_fetch_array($result);

$query="INSERT INTO users(firstname,lastname,address,mobileno,city,state,country,pincode,dfirstname,dlastname,dmobile,daddress,dcity,dstate,dcountry,dpin,type,weight,date) VALUES('$firstname','$lastname','$address','$mobile','$city','$state','$country','$pincode','$dfirstname','$dlastname','$dmobile','$daddress','$dcity','$dstate','$dcountry','$dpincode','$type','$weight','$date')";

$data=mysql_query($query)or die(mysql_error());

if($data)
{
$query2="UPDATE users,rate set charges=weight*rate where users.city=rate.city1 and users.dcity=rate.city2";
$data2=mysql_query($query2)or die(mysql_error());
$id=mysql_query("select id from users");
$id=$id-1;
$_SESSION['id']=$id;
header('Location: http://localhost/login2/customer details.php');
}

?>