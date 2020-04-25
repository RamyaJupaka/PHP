<?php
$arr = array("system","java","oracle","computer","database","c");

function sortFunc ($a,$b){
    
    if($a == $b){
        return 0;
    }
    elseif ($a > $b){
        return -1;
    }
    elseif ($a < $b){
        return 1;
    }
}

usort($arr,"sortFunc");

for($i=0;$i<count($arr);$i++){
    
    echo "$arr[$i]";
    echo " ";
}
echo " ";

echo "<br/>===================Exercise===================<br/>";

$arrStudentName = array("p100" =>"David",
                        "p200" =>"Ahmad",
                        "p300" =>"Cathy",
                        "p400" =>"Joe",
                        "p500" =>"Mary");

function sortDescending($a,$b){
    if($a == $b)
        return 0;
        return $a < $b ? -1 : 1;
}
function display($arr1){
    foreach ($arr1 as $key => $val){
        echo "KEY = ". $key.  " ". "VALUE = ".$val .";";
        echo " ";
    }
    echo "<br/> ";
}

//display($arrStudentName);


uasort($arrStudentName, "sortDescending");
display($arrStudentName);


// $arrStudentName = array("p100" =>"David","p200" =>"Ahmad","p300" =>"Cathy","p400" =>"Joe","p500" =>"Mary");

// function sorting ($a,$b){
//     if($a == $b)
//         return 0;
//         return $a < $b ? -1 : 1;
        
        
// }

// function displayKeyValue($arr){
//     foreach($arr as $key =>$val){
//         echo "The name of key is $key and the name is $val <br/>";
//     }
    
// }
// uasort($arrStudentName, "sorting");
// displayKeyValue($arrStudentName);