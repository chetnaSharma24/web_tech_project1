<?php

$mysql_host='localhost';
$mysql_username='root';
$mysql_pwd='';
$mysql_db='bct';


//connect to the database
$connectlink=@mysqli_connect($mysql_host,$mysql_username,$mysql_pwd,$mysql_db);


if(!$connectlink)
die('not connected to mysql database');

$sql1="CREATE TABLE ContactUs(Cno VARCHAR(3) PRIMARY KEY,Cemail VARCHAR(10),Cname VARCHAR(10),Cmessage VARCHAR(100))";
$result2=mysqli_query($connectlink,$sql1);
if(!$sql1)
echo"no";
?>