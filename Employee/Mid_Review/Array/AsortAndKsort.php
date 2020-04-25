<?php
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key

$ageValue = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($ageValue);

foreach($ageValue as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo "================Ksort================<br/>";
$ageKey = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($ageKey);

foreach($ageKey as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
