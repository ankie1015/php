
<?php
$id=$_GET['id'];
$DB=mysqli_connect("localhost","root","","registration");

$q = "SELECT image FROM information where `id` = $id";
$imageresult1 = mysqli_query($DB,$q);

while($rows = mysqli_fetch_assoc($imageresult1))
{       
    $image = $rows['image'];    
    print $image;
	header("location:display.php");
}
?>