<?php

$DB=mysqli_connect("localhost","root","","registration");

$q="select * from login";
$result=mysqli_query($DB,$q);
$num=mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html>
<head>

	<title> Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
	<center>
	<form action="" method="post">
	
	<table border="1px">
	<tr>
		
		<td>username</td>
		<td>password</td>
	</tr>
<?php
for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_array($result);
?>
	<tr>
		
		<td><?php echo $row['username']; ?></td>
		<td><?php echo $row['password']; ?></td>
		
	</tr>
	
<?php
}
?>
	</table>
	
	
		
</form>
</center>
</div>
</body>
</html>
