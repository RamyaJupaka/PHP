<?php
//reset($arr):points to first & returns its value
$students = array ("p100" =>"David",
    "p200"=>"Ahmad",
    "p300"=>"Cathy",
    "p400"=>"Joe","p500"=>"Mary");
echo "-----------Before Usort--------->br/>";
display($students);
echo "-----------after Usort--------->br/>";

uasort($students,"sortByLength");
display($students);
$first = reset($students);
echo "The first stuent in the array $first <br/>";
$last =  end($students);
echo "The last students in the array $last <br/>";

prev($students);prev($students);prev($students);
$st = each($students);
echo "The current student id is " . $st[0]."<br/>";
echo "The current student name is " . $st[1]."<br/>";

next($students);
$st = each($students);
echo "the next student id is " . $st[0]."<br/>";
echo "The current student name is " . $st[1]."<br/>";



function display($arr)
{
    echo "<hr/>";
    foreach ($arr as $key=>$val)
    {
        echo "($key,$val)<br/>";
    }
}
function sortByLength($a, $b)
{
    if(strlen($a)>strlen($b))
    {
        return  1;
        
    }
    elseif (strlen($a,)<strlen($b))
    {
        return  -1;
    }
    else
    {
        return  0;
    }
}