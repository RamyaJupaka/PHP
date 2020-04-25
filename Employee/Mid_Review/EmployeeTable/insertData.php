<?php
require_once 'config.php';
$sqlStmt = "insert into employee values (7777, 'Harry','Callum','Clark'),
                                        (6666, 'rose','brown','Engineer')";
$queryId = mysqli_query($GLOBALS['connectionID'], $sqlStmt);
if ($queryId==true)
{
    echo"<h2> A new teacher is added successfully </h2>";
}
else
{
    echo "<h1>" . mysqli_errno($GLOBALS['connectionID'])."</h2>";
    
}
?>
<a href = "manipulateDatabase.php">Return</a><br/>