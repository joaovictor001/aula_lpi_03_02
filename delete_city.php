<?php
include 'connect.php';


$id = $_GET[1idCity];

$sq="delete from city where idCity=7";
=======
$sq="delete from city where idCity=1";

mysqli_query($con,$sq);
header('location:viewall_city.php');
?>