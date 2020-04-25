<?php
require_once 'config.php';
if(!mysqli_connect_errno())
{
    echo "you are connected to $dbname database<br/>";
    // redirect to manipulation page
    //header("location:manipulateDatabase.php");
}
else
{
    echo "you not connected to $dbname database <br/>";
    // redirect to error page
}