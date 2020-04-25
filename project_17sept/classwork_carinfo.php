!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$cars = array(
    "honda" => array(
        "year" => 2008,
        "km" => 12000,
        "price" => 9000,
        "picture" => "https://images.honda.ca/models/H/Models/2019/civic_type_r/hondaca_modelNav.png?width=480&quality=100",
        "discount" => 10),
    "toyota" => array(
        "year" => 2012,
        "km" => 10000,
        "price" => 12000,
        "picture" => "http://toyota.com.ph/wp-content/uploads/2018/12/Thermalyte.png",
        "discount" => 12),
    "tesla" => array(
        "year" => 2017,
        "km" => 40000,
        "price" => 22000,
        "picture" => "https://www.tesla.com/content/dam/tesla-site/sx-redesign/img/socialcard/MS.jpg",
        "discount" => 15),
    "audi" => array(
        "year" => 2017,
        "km" => 11000,
        "price" => 15000,
        "picture" => "https://cdn.motor1.com/images/mgl/JmVR6/s1/2019-audi-r8-onlocation.jpg",
        "discount" => 8),
    "bmw" => array(
        "year" => 2013,
        "km" => 8000,
        "price" => 11000,
        "picture" => "https://s.aolcdn.com/dims-global/dims3/GLOB/legacy_thumbnail/640x400/quality/80/https://s.aolcdn.com/commerce/autodata/images/USC90BMC681A021001.jpg",
        "discount" => 7),
);

display($cars);

function display($cars)
{
    echo "<table border='1'>";
    foreach ($cars as $eachCarName => $eachCarValue) {

        $discount = $eachCarValue['price'] - ($eachCarValue['price'] * $eachCarValue['discount'] / 100);

        echo
            "<tr>
                <td>
                    $eachCarName -
                    $eachCarValue[year]<br>
                    $eachCarValue[km]km<br>
                    <strike>$eachCarValue[price] $</strike><br>
                    $discount $
                </td>
                <td>
                    <img src=$eachCarValue[picture] width='200'/>
                </td>
            </tr>";
    }
    echo "<table>";
}
?>

</body>

<style>

    td{
        padding: 20px;
    }

</style>
</html>