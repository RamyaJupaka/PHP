<?php

$months = array(array("jan" => 28 , "feb" => 30 ,"mar" => 40 ,
                      "april" => 37 , "may" => 60 , "june" => 40,
                      "july" => 55 , "aug" => 80,"sept" => 68 , 
                      "oct" =>79,"nov" => 68 , "dec" =>90 ));

function displayArray($months)
{
    foreach ($months as $row)
    {
        foreach ($row as $key=>$val)
        {
            echo "($key,$val)&nbsp&nbsp";
        }
    }
}

displayArray($months);


