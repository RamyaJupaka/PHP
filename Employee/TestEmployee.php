<?php
include 'EmployeeData.php';
$emp1 = new employee(100, "Emma","F",100,50);
$emp2 = new employee(200, "Isabella","p",500,30);
$emp3 = new employee(300, "Mia","F",300,60);
$emp4 = new employee(400, "Maya","P",800,40);
$emp5 = new employee(500, "Sophia","T",1000,40);
$emp6 = new employee(600, "Olivia","F",1100,80);

$listOfEmployee=[$emp1,$emp2,$emp3,$emp4,$emp5,$emp6];

displayemployee($listOfEmployee);

$emp2 ->setSalary(8000);
$emp3->setSalary(1,400);
$emp5->setSalary(1,1,80);
echo"****************************** After changes in salary***********";

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