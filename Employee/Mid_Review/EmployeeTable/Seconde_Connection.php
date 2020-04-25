<?php
require_once 'First_dbconfig.php';
if(!mysqli_connect_errno()){
    echo "You are connected to ". $GLOBALS['dbname'] ." database<br/>";
}
else{
    echo "You are not connted to ".$GLOBALS['dbname']."database<br/>";
    header("location:Third_errorDatabase.php");
}