<?php

$id=$_GET['id'];

$DB=mysqli_connect("localhost","root","","registration");

$q="select * from information where id=$id";
$result=mysqli_query($DB,$q);
$num=mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html>
<head>
	<title> Registration Form </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
	<center>
	<form action="edit_db.php" method="post">
	<?php
for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_array($result);
?>
		<b>NEW REGISTRATION</b><br><br>
		First name:
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		<input type="text" name="first_name" placeholder="Enter first name" value="<?php echo $row['first_name']; ?>"><br><br>
		Last name:
		<input type="text" name="last_name" placeholder="Enter last name" value="<?php echo $row['last_name']; ?>" ><br><br>
		Gender:
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="male">Female
		<input type="radio" name="gender" value="male">Other<br><br>
		Address:
		<input type="text" name="address" placeholder="Enter address" value="<?php echo $row['address']; ?>"><br><br>
		Email:
		<input type="text" name="email" placeholder="Enter email" value="<?php echo $row['email']; ?>"><br><br>
		Password:
		<input type="password" name="password" placeholder="Enter password" value="<?php echo $row['password']; ?>"><br><br>
		Contact:
		<input type="text" name="contact" placeholder="Enter phone number" value="<?php echo $row['contact']; ?>"><br><br>
		
<?php
}
?>		
		<input type="submit" value="update" name="update"><br><br>
	</form>
	</center>
	</div>
</body>
</html>
