<?php
$studentHobbies = array("Marc" => array("Soccer","Dance","Music"),
    "Tamer" => array("Games","Dive","Skate","Read","Write"),
    "Luis" => array("Cook","Chess",));

echo "<table border='1'>";
foreach ($studentHobbies as $key => $row){
    echo "<tr>";
    echo "<th>$key</th>";
    echo "</tr>";
    for ($i = 0 ; $i<count($row);$i++){
    //var_dump($row);
        echo "<tr>";
        echo "<td>$row[$i]</td>";
        echo "</tr>";
    }
    
}
echo "</table>";