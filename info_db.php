<?php

$DB=mysqli_connect("localhost","root","","registration");

if(isset($_POST['submit']))
{
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$email=$_POST['email'];	
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$username=$_POST['username'];
	
    $result =$_FILES['image']['name'];
	$exti=(explode('.',$result));
	$ci=count($exti);
	$imagename=$exti[0].".".$exti[$ci-1];
	
	$res =$_FILES['video']['name'];
	$extv=(explode('.',$res));
	$cv=count($extv);
	$videoname=$extv[0].".".$extv[$cv-1];
    
	if(move_uploaded_file($_FILES['image']['tmp_name'],"image/".$imagename)AND (move_uploaded_file($_FILES['video']['tmp_name'],"video/".$videoname)))
	{
		$query="insert into information(first_name,last_name,gender,address,email,password,contact,username,image,video)
	values('$first_name','$last_name','$gender','$address','$email','$password','$contact','$username','$imagename','$videoname')";
		
		$result=mysqli_query($DB,$query);	
		
     if($result == 1)
	{
		echo "File uploaded Successfully";
		header('location:display.php');
	}
	else
	{
		echo "fail";
		header('location:info.html');
	}
	}
	
	
	
}
		
?>