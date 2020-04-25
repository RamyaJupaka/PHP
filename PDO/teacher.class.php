<?php
class teacher 
{
    private $teacherId;
    private $name;
    private $phone;
    private $email;
    
    function __construct($teacherId=null,$name=null,$phone=null,$email=null)  //null means we can have empty constructor
    {
        $this->teacherId=$teacherId;
        $this->name=$name;
        $this->phone=$phone;
        $this->email=$email;
    }
    
    public function getteacherId() // getter
    {
        return $this->teacherId;
    }
    public function getname() 
    {
        return $this->name;
    }
    public function getphone()
    {
        return $this->phone;
    }
    public function getemail() 
    {
        return $this->email;
    }
    
    // setter
    public function setteacherId($teacherId)
    {
        $this->teacherId=$teacherId;
    }
    public function setname($name)
    {
        $this->name=$name;
    }
    public function setphone($phone)
    {
       $this->phone=$phone ;
    }
    public function setemail($email)
    {
        $this->email=$email;
    }
    
    // header function
    
    public static function getHeader()
    {
        $str="<table border = '2'>";
        $head="<tr><th>Teacher Id</th><th>Teacher name</th>";
        $head=$head."<th>Teacher phone</th><th>Teacher e-mail</th></tr>"; // using $head=$head printing in 2 lines or 1 lines is same 
        return $str.$head;
    }
    public static function getFooter()
    {
        return "</table>";
    }
    public function __toString()
    {
        $data="<tr><td>$this->teacherId</td><td>$this->name</td>";
        $data= $data."<td>$this->phone</td><td>$this->email</td></tr>"; 
        return $data;
    }
    
    // CURD METHODS
    //add one row to the table teacher ,, connect the db
    public function create($connection)
    {
        $teacherId=$this->teacherId;
        $name=$this->name;
        $phone=$this->phone;
        $email=$this->email;
        
        $sqlStmt ="insert into teacher values ($teacherId,'$name','$phone','$emial')"; // teacher id is int so no quotes ,, phone number is string  so it has quotes
        $result=$connection->exec($sqlStmt); // connection is object ,, exec means execute command
        return $result;
    }
    public function updatePhone($connection)
    {
        $teacherId = $this->teacherId;
        $phone = $this->phone;
        
        $sqlStmt = "update teacher set phone=$phone where teacherId = $teacherId";
        
        $result = $connection->exec($sqlStmt);
        return $result;
    }
    public function delete($connection)
    {
        $teacherId = $this->teacherId;
        $sqlStmt = "Delete from teacher where teacherId=$teacherId";
        $result = $connection->exec($sqlStmt);
        return $result;
    }
    

    
    public function getAllTeacher($connection)
    {
        $counter = 0;
        $sqlStmt = "select * from teacher";
        foreach ($connection->query($sqlStmt)as $oneRow)
        {
            $teacherObj= new teacher();
            $teacherObj->setteacherId($oneRow["teacherid"]);
            $teacherObj->setname($oneRow["name"]);
            $teacherObj->setphone($oneRow["phone"]);
            $teacherObj->setemail($oneRow["email"]);
            $listOfTeacher[$counter++]=$teacherObj;
   
        }
        return  $listOfTeacher;
    }
    public function  displayAllTeachers($listOfTeacher)
    {
        echo teacher::getHeader();
        foreach ($listOfTeacher as $oneTeacher)
        {
            echo $oneTeacher;
            
        }
        echo teacher::getFooter();
        
    }
    public function getTeacherById($connection)
    {
        $sqlStmt = "Select * from teacher where teacherid = :tid";
        
        // 1 // preparation
        
        $prepare = $connection -> prepare($sqlStmt);
        
        // 2 bind values
        
        $prepare->bindValue("tid",
                             $this->teacherId,PDO ::PARAM_INT);
        
        // 3 Prepare arrow execute
        
        $prepare->execute();
        $result = $prepare->fetchAll();
        $tobj ="";
        if(sizeof($result)>0)
        {
            // build obj of teacher
            $teacherId = $result[0]["teacherid"];
            $name = $result[0]["name"];
            $phone = $result[0]["phone"];
            $email = $result[0]["email"];
            $tobj = new teacher($teacherId,$name,$phone,$email);
        }
        return $tobj;
    }
}