<?php
include 'Product.cls.php';

$p1 = new Product("Mouse", 10, 40);
$p2 = new Product("Keyboard", 5, 15);
$p3 = new Product("SoundBox", 40, 10);
$p4 = new Product("LED Screen", 110, 8);
$listOfProduct[0]=$p1; $listOfProduct[1]=$p2;
$listOfProduct[2]=$p3; $listOfProduct[3]=$p4;
displayProduct($listOfProduct);
$p1->setPrice(25);
$p2->setPrice('p',0.30);
echo"-----------------------After changing price------------";
displayProduct($listOfProduct);
function displayProduct($list)
{
    Product::heading();
    //echo $p1;echo $p2;echo $p3;echo $p4;
    //foreach ($listOfProduct as $oneProduct)
    foreach ($list as $oneProduct)
        echo $oneProduct;
        Product::footer();
}



