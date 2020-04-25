<?php
$studentHobbies = array("Marc"=>array("Soccer","Dance","Music"),
                        "Tamer"=>array("Games","Dive","Skate","Read","Write"),
                        "Luis"=>array("Cook","Chess"),
                         "Hao"=>array("Study","Read","Code","Robot")
);


display($studentHobbies);

$studentHobbies["Marc"][3]="fish";
$studentHobbies["Luis"][2]="LongDrive";

echo"-----------------------After adding to marc-----------";

display($studentHobbies);

function display($arr)
{
    foreach ($arr as $key=>$oneDim)
    {
        echo "<strong>$key</strong>&nbsp&nbsp>>";
        foreach ($oneDim as $oneVal)
            echo "$oneVal &nbsp&nbsp";
        echo "<hr/>";
    }
}