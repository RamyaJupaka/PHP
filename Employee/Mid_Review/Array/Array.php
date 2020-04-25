<?php
$colorArr = array("Red","Green","Yellow","Black");

// display 
function displayArray ($colorArr){
    foreach ($colorArr as $element ){
        echo "$element,<br/>";
        //echo "<br/>";
    }
}

// call function
displayArray($colorArr);

//count Array, how many element have

echo "The total number of element is " . count($colorArr)."<br/>";

// search array, and then display position

$elem = array_search("Green", $colorArr);
//echo "$elem";

if (!empty($elem)){
    echo "Green is exsit <br/>";
}
else{
    echo "Green is not exsit <br/>";
}

$elemPositionExist = array_key_exists(2, $colorArr);

if(!empty($elemPositionExist)){
    echo "$elemPositionExist is exist <br/>";
}
else{
    echo "$elemPositionExist is not exist <br/>";
}