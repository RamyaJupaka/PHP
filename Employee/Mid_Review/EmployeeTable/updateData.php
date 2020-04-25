<?php
require_once 'First_dbconfig.php';

$sqlStmt = "update employee set EmployeeType ='Designer' where EmployeeID=4444";
$queryID = mysqli_query($GLOBALS['connectionID'], $sqlStmt);

if($queryID == true){
    echo "<h2> A update was successfully </h2>";
}
else{
    echo "<h2>" . mysqli_errno($GLOBALS['connectionID'])."</h2>";
}
?>

<a href="ManipulateDatabase.php">Return</a><br/>