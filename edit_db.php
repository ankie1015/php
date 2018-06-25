<?php

$DB=mysqli_connect("localhost","root","","registration");

if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	//$gender=$_POST['gender'];
	$address=$_POST['address'];
	$email=$_POST['email'];	
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	
 $query="update information set first_name='$first_name',last_name='$last_name',address='$address',email='$email',password='$password',contact='$contact' where id=$id";
	
	$result=mysqli_query($DB,$query);
	
	if($result)
	{
		echo "Record updated successfully";
	}
	else
	{
		echo "Fail";
	}
	
	
}

?>