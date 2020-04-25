<?php
$studentinformation = array("Harry"=>array("age"=>26,"hobby"=> "magic","job"=>"magician"),
                            "Ron"=>array("age"=>30,"hobby"=>"writer","job"=>"novelist"),
                            "Harmoini"=>array("age"=>25,"hobby"=>"study","job"=>"teacher"));

function displayArray($studentinformation)
{
    echo "<table border = '2'>";
    echo "<tr>";
    
    foreach ($studentinformation as $key => $row)
    {
        echo"<th colspan = '2'>$key</th>";
        echo"</tr>";
        
        echo"<tr>";
        foreach ($row as $key => $val)
        {
            echo"<td>$key</td>";
            echo"<td>$val</td>";
            echo"</tr>";
            
        }
    }
    echo"</table>";
}
displayArray($studentinformation);