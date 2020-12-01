<?php
include 'connection.php';
$cno=1;
$email=$_POST['email'];
$name=$_POST['name'];
$message=$_POST['msg'];

$sql2="insert into ContactUs (Cno,Cemail,Cname,Cmessage) values ('$cno','$email','$name','$message')";
$result=mysqli_query($connectlink,$sql2);



?>
