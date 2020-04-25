<?php
include 'Car.class.php';
class person
{
    private $name;
    private $age;
    private $listOfCars;
    private static $sequence=0;
    
    
    function __construct($name=null,$age=null) //no listOfCars bcoz it also contains cars.php file
    {
        $this->name=$name;
        $this->age=$age;
        $listOfCars=array(); // empty array
        
    }
    function addCar($cars)
    {
        $lisyOfCars[$sequences++]=$cars;
    }
    
    //add setter / getter if needed
    
    public static function heading()
    {
        echo "<table border = '2'>";
        echo"<tr><th>Name</th>
                  <th>Age</th></tr>";
    }
    public static function footer()
    {
        echo "</table>";
        echo "------------------- list of cars  ----------<br/>";
        
    }
    
    public function __toString()
    {
        return "<tr><td>$this->name</td>
                    <td>$this->age</td></tr>";
    }
}