<?php
require_once 'config.php';
$sqlStmt = "insert into employee values (7777, 'Harry','Callum','Clark'),
                                        (6666, 'Singh','Gursukh','Engineer')";
$queryId = mysqli_query($GLOBALS['connectionID'], $sqlStmt);

if($queryId == true){
    echo "<h1> A nes employee is added successfully</h1>";
}
else{
    echo "<h1>" . mysqli_errno($GLOBALS['connectionID'])."</h2>";
    
}
?>
<a href="ManipulateDatabase.php">Return</a>