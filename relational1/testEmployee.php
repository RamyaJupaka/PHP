<?php
include 'Employee.php';
$emp1 = new employee(100, "Emma",100);
$emp2 = new employee(200, "Isabella",500);
$emp3 = new employee(300, "Mia",300);
$emp4 = new employee(400, "Maya",800);
$emp5 = new employee(500, "Sophia",1000);

$listOfEmployee=[$emp1,$emp2,$emp3,$emp4,$emp5];

displayemployee($listOfEmployee);

function displayemployee($list)
{
    employee::heading();
    //echo $p1;echo $p2;echo $p3;echo $p4;
    //foreach ($listOfProduct as $oneProduct)
    foreach ($list as $oneEmployee)
        echo $oneEmployee;
        employee::footer();
}