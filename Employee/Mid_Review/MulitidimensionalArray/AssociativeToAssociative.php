<?php $studentInfo =
array ("Marc"=>array("age" =>22,"country" =>"England"),
       "David" =>array("hobby"=>"soccer","age"=>30,"job"=>"clerck"),
       "Maria"=>array("age"=>18,"country"=>"Canada","Hobby"=>"read"));

    
    echo "<table border='1'>";
    echo "<tr>";
    foreach ($studentInfo as $key => $row){
        echo "<th colspan='2'>$key</th>";
        echo "</tr>";
        echo "<tr>";
        foreach ($row as $key => $val){
         echo "<td>$key</td>";
         echo "<td>$val</td>";
         echo "</tr>";
        }
    }
    echo "</table>";



