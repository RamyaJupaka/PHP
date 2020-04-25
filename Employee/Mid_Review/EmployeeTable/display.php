
<?php
require_once 'First_dbconfig.php';
$sqlStmt= "Select * from employee";
$queryId = mysqli_query($GLOBALS['connectionID'], $sqlStmt);
$nbEmployee = mysqli_num_rows($queryId);
echo "<table border='1'>";
echo "<tr><th>Employee ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Employee Type</th>";
while($row=mysqli_fetch_array($queryId)){
    $empID = $row["EmployeeID"];
    $FirstName=$row["FirstName"];
    $LastName=$row["LastName"];
    $EmpType=$row["EmployeeType"];
    echo "<tr><td>$empID</td> 
              <td>$FirstName</td>
              <td>$LastName</td>
              <td>$EmpType</td>";
}
echo "</table> <br/>";
echo "The total number of tearch is $nbEmployee";

if ($queryId==true)
    echo "<h2> A delete was successfully </h2>";
    else
        echo "<h2>".mysqli_error($GLOBALS['connectionId'])."</h2>";
?>
<a href="manipulateDtabase.php">Return</a><br/>

