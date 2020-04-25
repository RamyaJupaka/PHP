<?php
$students = array ("p100" =>"David",
                    "p200"=>"Ahmad",
                    "p300"=>"Cathy",
                    "p400"=>"Joe","p500"=>"Mary");
echo "-----------Before Usort--------->br/>";
display($students);
echo "-----------after Usort--------->br/>";

 uasort($students,"sortByLength");
 display($students);
 
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