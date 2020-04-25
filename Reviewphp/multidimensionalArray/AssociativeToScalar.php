<?php
$hobbiesList = array("Harry"=>array("running","dancing","singing"),
                    "Ron"=>array("writing","teaching","magic"),
                    "Harmoini"=>array("magic","art","music"));

function displayArray($hobbiesList)
{
    echo"<table border = '2'>";
    
    foreach($hobbiesList as $key => $row )
    {
        echo"<tr>";
        echo"<th>$key</th>";
        echo "</tr>";
        
     for($i = 0 ; $i<count($row); $i++)
     {
         echo"<tr>";
         echo"<td>$row[$i]</td>";
         echo"</tr>";
     }
    }
}
displayArray($hobbiesList);