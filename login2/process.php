<?php
//get values passe from in login.php file
$username=$_POST['user'];
$password=$_POST['pass'];
// to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_escape_string($username);
$password= mysql_escape_string($password);
//connect to the server and select database

mysql_connect("localhost","root","");
mysql_select_db("login");
//query the database for user
$result= mysql_query("select * from admin where username= '$username' and password ='$password'")
              or die("failed to query database".mysql_error());
$row =mysql_fetch_array($result);
if($username==NULL ||$password==NULL)
echo "login not possible";
else if($row['username']==$username && $row['password']== $password){
	header('Location: http://localhost/login2/admin login page.php');
}else{
echo"Failed to login!";
}
?>