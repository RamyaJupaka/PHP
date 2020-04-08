<?php
include_once 'car_class.php';
include_once 'dbconfig.php';

$connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
$carObj = new Car();
$carlist = $carObj->getAllCars($connection);
$carObj->displayAllCars($carlist);

?>