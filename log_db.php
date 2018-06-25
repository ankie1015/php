<?php

$DB=mysqli_connect("localhost","root","","registration");

if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	$query="select * from information where username='$username' AND password='$password' AND status='approved'";
	
	$result=mysqli_query($DB,$query);
	$num=mysqli_num_rows($result);
	
	
	if($num == 1)
	{
		echo "Login successfully";
	}
	else
	{
		echo "Fail";
	}
	
}

?>