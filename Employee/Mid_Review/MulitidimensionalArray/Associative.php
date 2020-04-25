<?php
$statWeight = array(array("jan" =>45,"mar" =>47, "apr" =>44),
    array("feb" =>79,"mai" =>74, "jul" =>73),
    array("jan" =>56, "feb" =>52,
        "mar" =>51, "jun" =>54));

//     function displayArray($arr){
//         foreach ($arr as $row){
            
//         }
//     }

    foreach ($statWeight as $row){
        //var_dump($row); 
        foreach ($row as $key=>$val){
            echo "($key,$val)&nbsp&nbsp";
        }
        
    }
    