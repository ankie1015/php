<?php

$id=$_GET['id'];
$status=$_GET['status'];

$DB=mysqli_connect("localhost","root","","registration");

$q="select * from information";
$result=mysqli_query($DB,$q);
$num=mysqli_num_rows($result);

for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_array($result);
}

if($status=="pending")
{
$q="update information set status='approved' where id='$id'";
$result=mysqli_query($DB,$q);	
	

header("location:display.php");
}
else
{
	
	$q="update information set status='pending' where id='$id'";
   $result=mysqli_query($DB,$q);	
	

header("location:display.php");
}
?>