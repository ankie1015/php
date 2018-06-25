<?php

$DB=mysqli_connect("localhost","root","","registration");

$q="select * from information";
$result=mysqli_query($DB,$q);
$num=mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html>
<head>

	<title> Registration</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div>

	<form action="" method="post">
	
	<table border="1px" >
	<tr align="center">
		<td><b>USERNAME</b></td>
		<td><b>FIRST NAME</b></td>
		<td><b>LAST NAME</b></td>
		<td><b>GENDER</b></td>
		<td><b>ADDRESS</b></td>
		<td><b>EMAIL</b></td>
		<td><b>PASSWORD</b></td>
		<td><b>CONTACT</b></td>
		<td><b>ACTION</b></td>
		<td><b>STATUS</b></td>
		<td><b>IMAGE</b></td>
		<td><b>VIDEO</b></td>
		
	</tr>
<?php
for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_array($result);
?>
	<tr align="center">
		
		<td><?php echo $row['username']; ?></td>
		<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><?php echo $row['contact']; ?></td>
		<td><a href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
		<a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
		<td><a href="status.php?id=<?php echo $row['id'];?>&status=<?php echo $row['status']; ?>"><?php echo $row['status']; ?></a></td>
		<td><img src="<?php echo "image/".$row['image'];?>" height="100" width="100"></td>
		<td><video src="<?php echo "video/".$row['video'];?>" height="100" width="100"></td>
		
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
