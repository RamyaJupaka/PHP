<?php
include 'dbconfig.php';
include 'teacher.class.php';

try
{
$connection = new PDO("mysql:host=$host;
                             dbname=$dbname",
                             $username,$password);

  echo"you are connected to $dbname database <br/>";
//   $t1 = new teacher(500,"Renuka","5005678943","renuka@yahoo.com");
  
//   $result = $t1->create($connection);
//   if($result==TRUE)
//   {
//       echo"the teacher with id 500 id added successfully !<br/>";
//   }
//   else
//   {
//       $error =$connection->errorInfo();
//       echo $error[2]."<br/>";
//   }

//    $t2 = new teacher();
//    $t2->setteacherId(500);
//    $t2->setphone("5146789888");
//    $result = $t2->updatePhone($connection);
//    if($result==TRUE )
//    {
//        echo"The teacher with the id ".$t2->getteacherId()."is updated successfully<br/>";
       
//    }
//    else
//    {
//        $error=$connection->errorInfo();
//        echo $error[2]."<br/>";
//    }


// $t3 = new teacher();
// $t3->setteacherId(500);
// $result = $t3->delete($connection);
// if ($result == TRUE)
// {
//     echo"one row is deleted successfully <br/>";
// }
// else 
// {
//     $error =$connection->errorInfo();
//     echo $error[2]."<br/>";
// }

// $t4 = new teacher();
// $listOfTeacher = $t4->getAllTeacher($connection);
// $t4->displayAllTeachers($listOfTeacher);

$t5 = new teacher();
$t5->setteacherId(200);
$t5=$t5->getTeacherById($connection);
echo teacher::getHeader();
echo $t5;
echo teacher::getFooter();
echo "<br/>";
echo "**********************fetch is successful**************";


}
catch (Exception $exception)
{
    $error = $connection->Error[2]; // error[0] for driver , error[1] for error code , error[2] for error msg
    echo $error;
}