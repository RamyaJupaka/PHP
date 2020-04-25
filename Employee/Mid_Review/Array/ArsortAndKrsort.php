<?php
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

$ageAosrt = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

arsort($ageAosrt);

foreach ($ageAosrt as $key => $value){
    echo "Key = " .$key . "; Value = " . $value;
    echo "<br/>";
}

echo "==============Ksort============<br/>";

$NameKsort = array("Peter" =>"35","Ben" =>"37", "Joe" =>"43");
krsort($NameKsort);
foreach ($NameKsort as $key => $value){
    echo "Key = " .$key . "; Value = " . $value;
    echo "<br/>";
}