<?php
$studentInfo =array("Marc"=>array("age"=>22 , "Country"=>"India"),
                    "David"=>array("age"=>30,"Hobby"=>"kabbadi","Job"=>"Manager"),
                     "Ramya"=>array("age"=>25,"Country"=>"India","Hobby"=>"Art&Craft"));

display( $studentInfo);
function display($arr)
{
    foreach ($arr as $key=>$oneDim)
    {
        echo "<strong>$key&nbsp&nbsp</strong> >>";
        foreach ($oneDim as $k=>$v)
        {
            echo "($k:$v)&nbsp&nbsp";
           
        }
        echo "<hr/>";
    }
}