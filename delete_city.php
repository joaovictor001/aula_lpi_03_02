<?php
include 'connect.php';

$id = $_GET[1idCity];

$sq="delete from city where idCity=7";
mysqli_query($con,$sq);
header('location:viewall_city.php');
?>