<?php

$id=$_GET['id'];

$DB=mysqli_connect("localhost","root","","registration");

$q="delete from information where id=$id";
mysqli_query($DB,$q);


?>