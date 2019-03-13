<?php

$userid=$_POST['userid'];
$userid=stripcslashes($userid);
$userid=mysql_escape_string($userid);
$startloc=$_POST['start'];
$startloc=stripcslashes($startloc);
$startloc=mysql_escape_string($startloc);
$startdate=$_POST['date1'];
$midwayloc=$_POST['start2'];
$middate=$_POST['date2'];
$destin=$_POST['start3'];
$destdate=$_POST['date3'];


$startdate=stripcslashes($startdate);
$startdate=mysql_escape_string($startdate);

$midwayloc=stripcslashes($midwayloc);
$midwayloc=mysql_escape_string($midwayloc);
$middate=stripcslashes($middate);
$middate=mysql_escape_string($middate);

$destin=stripcslashes($destin);
$destin=mysql_escape_string($destin);
$destdate=stripcslashes($destdate);
$destdate=mysql_escape_string($destdate);


mysql_connect("localhost","root","");
mysql_select_db("login");
$result=mysql_query("select * from tracking")or die("failed to query databse".mysql_error());
while($row=mysql_fetch_array($result))
{
if($row['id']==$userid)
{

if($startloc!=NULL)
{

$sql="UPDATE tracking SET startloc='$startloc',dateofstart='$startdate',middle='$midwayloc',dateofmid='$middate',destination='$destin',deliverydate='$destdate' WHERE id='$userid'";
$data=mysql_query($sql) or die(mysql_error());
echo"<h4>"."Data successfully updated"."</h4>";
}
else if(($startloc==NULL)&&($midwayloc!=NULL))
{

$sql="UPDATE tracking SET middle='$midwayloc',dateofmid='$middate',destination='$destin',deliverydate='$destdate' WHERE id='$userid'";
$data=mysql_query($sql) or die(mysql_error());
echo"<h4>"."Data successfully updated"."</h4>";
}
else if(($startloc==NULL)&&($midwayloc==NULL)&&($destdate!=NULL))
{

$sql="UPDATE tracking SET destination='$destin',deliverydate='$destdate' WHERE id='$userid'";
$data=mysql_query($sql) or die(mysql_error());
echo"<h4>"."Data successfully updated"."</h4>";
}
}
}
?>