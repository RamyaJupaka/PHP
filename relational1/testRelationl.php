<?php
include 'Car.class.php';
include 'Person.class.php';

// create objects

$car0 = new Car(100,"Toyota Corolla",2010);
$car1 = new Car(200,"Honda Civic",2006);
$car2 = new Car(300,"Hunday ",2012);

$person0 = new person("David",24);

echo Car :: heading();
//echo $car0,$person0;
echo $car0;
echo Car:: footer();

echo"<br>";
echo person :: heading();
echo $person0;
echo person:: footer();




$person1 = new person("Mary",25);


$person2 = new person("Dav",30);
