<?php
$arr=array("System","Java","Oracle","Computer","Database","C");
echo "-----------Before Usort--------->br/>";

display($arr);
usort($arr, "sortByLength");

echo"--------After usort---------------<br/>";

display($arr);

function display($arr)
{
    echo "The Values of the array are : => <br/>";
    foreach ($arr as $oneValue)
    {
        echo "$oneValue &nbsp&nbsp";
    }
}
function sortByLength($a ,$b)
{
    if(strlen($a)>strlen($b))
    {
        return  1;
    }
    elseif (strlen($a)<strlen($b))
    {
        return  -1;
    }
    else 
    {
        return  0;
    }
}