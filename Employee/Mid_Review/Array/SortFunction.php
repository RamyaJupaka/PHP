<?php
// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order


//Sort()
//Number
$numberSort = array (7,6,9,8,3,2,4,1,10,3);
sort($numberSort);

$numberLength = count($numberSort);

for ($i = 0; $i < $numberLength; $i++) {
    echo $numberSort[$i];
    echo " ";
}
    echo "<br/>";
//Stirng
$strSort = array ("Red","Green","Yellow","Black");
sort($strSort);

$numberLength = count($strSort);

for ($i = 0; $i < $numberLength; $i++) {
    echo $strSort[$i];
    echo " ";
}
echo "<br/>";

//Rsort()
//Number
$numberRsort = array (7,6,9,8,3,2,4,1,10,3);
rsort($numberRsort);

$len = count($numberRsort);

for ($i=0;$i<$len;$i++){
    echo $numberRsort[$i];
    echo " ";
}
echo "<br/>";

//String
$strRsort = array ("Red","Green","Yellow","Black");
Rsort($strRsort);

$numberLength = count($strRsort);

for ($i = 0; $i < $numberLength; $i++) {
    echo $strRsort[$i];
    echo " ";
}
echo "<br/>";
























