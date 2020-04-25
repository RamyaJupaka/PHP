<?php
require_once 'First_dbconfig.php';

$sqlStmt = "delete from employee where EmployeeID = 5555";
$queryId = mysqli_query($GLOBALS['connectionID'], $sqlStmt);

if($queryId == true){
    echo "<h2>A delect was successfully</h2>";
}
else{
    echo "<h2>" . mysqli_errno($GLOBALS['connectionID'])."</h2>";
    
}
?>

<a href="ManipulateDatabase.php">Return</a><br/>